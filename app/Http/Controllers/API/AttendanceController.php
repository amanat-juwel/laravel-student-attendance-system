<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\StudentAttendance;
use App\TeacherAttendance;
use App\StaffAttendance;
use Validator;
use DB;
use Carbon\Carbon;

class AttendanceController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        date_default_timezone_set("Asia/Dhaka");

        $validator = Validator::make($input, [
            'metric_id' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $metric_id_type = DB::table('metric_id_type')
        ->where('metric_id', "$request->metric_id")
        ->first();

        if("$metric_id_type->type" == "student"){
        ###################################
        # START STUDENT
        ###################################
            $student = DB::table('students')
            ->where('metric_id', "$request->metric_id")
            ->first();

            $parent_obj = DB::table('parents')
            ->where('id',$student->parent_id)
            ->first();
            $number = '"'.$parent_obj->mobile_no.'"';

            $obj = DB::table('student_attendance')
            ->where('date', date('Y-m-d'))
            ->where('student_id', $student->id)
            ->first();

            if(is_null($obj)){
                $stdObj = new StudentAttendance;
                $stdObj->date = date('Y-m-d');
                $stdObj->student_id = $student->id;
                $stdObj->in_time = date('Y-m-d H:i:s');
                $stdObj->save();

                $time = date('h:i a');
                $_date = date('d M Y');
                $text = "Dear guardian,$student->name has entered Saint Cosmo School at $time in $_date #Thanks SCS";

                $this->queuedSms($number, $text);
                $returnData = "$student->name [student]";
               return $this->sendResponse($returnData, 'Punched-In successfully');

            }
            elseif(is_null($obj->out_time)){
                $stdObj = StudentAttendance::where('date', date('Y-m-d'))
                    ->where('student_id', $student->id)
                    ->first();
                
                //Validation for time difference between In and Out time start
                $created_at = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $stdObj->in_time);
                $now = \Carbon\Carbon::now();
                $diff_in_seconds = $created_at->diffInSeconds($now);
    
                //setting 1 hour waiting time
                if($diff_in_seconds < 3600){
                    $waiting_time = 3600 - $diff_in_seconds;
                    return $this->sendResponse($student->name, "Wait $waiting_time Sec.");
                }
                //Validation for time difference between In and Out time start
                
                $stdObj->out_time = date('Y-m-d H:i:s');
                $stdObj->update();

                $time = $time = date('h:i a');
                $_date = date('d M Y');
                $text = "Dear guardian,$student->name has left Saint Cosmo School at $time in $_date #Thanks SCS";
                $this->queuedSms($number, $text);
                $returnData = "$student->name [student]";
                return $this->sendResponse($returnData, 'Punched-Out successfully');
            }
            else{

                $stdObj = StudentAttendance::where('date', date('Y-m-d'))
                    ->where('student_id', $student->id)
                    ->first();
                return $this->sendResponse($student->name, 'Duplicate Entry!');
            }

            ###################################
            # END STUDENT
            ###################################
        }    

        elseif("$metric_id_type->type" == "teacher"){
            ###################################
            # START TEACHER
            ###################################
            $teacher = DB::table('teachers')
            ->where('metric_id', "$request->metric_id")
            ->first();

            $obj = DB::table('teacher_attendance')
            ->where('date', date('Y-m-d'))
            ->where('teacher_id', $teacher->id)
            ->first();

            if(is_null($obj)){
                $teacherObj = new TeacherAttendance;
                $teacherObj->date = date('Y-m-d');
                $teacherObj->teacher_id = $teacher->id;
                $teacherObj->in_time = date('Y-m-d H:i:s');
                $teacherObj->save();
                $returnData = "$teacher->name [teacher]";
               return $this->sendResponse($returnData, 'Punched_in successfully.');

            }
            elseif(is_null($obj->out_time)){
                $teacherObj = TeacherAttendance::where('date', date('Y-m-d'))
                    ->where('teacher_id', $teacher->id)
                    ->first();

                //Validation for time difference between In and Out time start
                $created_at = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $teacherObj->in_time);
                $now = \Carbon\Carbon::now();
                $diff_in_seconds = $created_at->diffInSeconds($now);
    
                //setting 1 hour waiting time
                if($diff_in_seconds < 3600){
                    $waiting_time = 3600 - $diff_in_seconds;
                    return $this->sendResponse($teacherObj->toArray(), "Wait $waiting_time Sec.");
                }
                //Validation for time difference between In and Out time start

                $teacherObj->out_time = date('Y-m-d H:i:s');
                $teacherObj->update();
                $returnData = "$teacher->name [teacher]";
                return $this->sendResponse($returnData, 'Punched-Out successfully.');
            }
            else{

                $teacherObj = TeacherAttendance::where('date', date('Y-m-d'))
                    ->where('teacher_id', $teacher->id)
                    ->first();
                $returnData = "$teacher->name [teacher]";
                return $this->sendResponse($returnData, 'Duplicate Entry!');
            }

            ###################################
            # END TEACHER
            ###################################
        }    

        if("$metric_id_type->type" == "staff"){
            ###################################
            # START STAFF
            ###################################
            $staff = DB::table('staffs')
            ->where('metric_id', "$request->metric_id")
            ->first();

            $obj = DB::table('staff_attendance')
            ->where('date', date('Y-m-d'))
            ->where('staff_id', $staff->id)
            ->first();

            if(is_null($obj)){
                $staffObj = new StaffAttendance;
                $staffObj->date = date('Y-m-d');
                $staffObj->staff_id = $staff->id;
                $staffObj->in_time = date('Y-m-d H:i:s');
                $staffObj->save();
                $returnData = "$staff->name [staff]";
               return $this->sendResponse($returnData, 'Punched-In successfully.');

            }
            elseif(is_null($obj->out_time)){
                $staffObj = StaffAttendance::where('date', date('Y-m-d'))
                    ->where('staff_id', $staff->id)
                    ->first();

                //Validation for time difference between In and Out time start
                $created_at = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $staffObj->in_time);
                $now = \Carbon\Carbon::now();
                $diff_in_seconds = $created_at->diffInSeconds($now);
    
                //setting 1 hour waiting time
                if($diff_in_seconds < 3600){
                    $waiting_time = 3600 - $diff_in_seconds;
                    return $this->sendResponse($staffObj->toArray(), "Wait $waiting_time Sec.");
                }
                //Validation for time difference between In and Out time start

                $staffObj->out_time = date('Y-m-d H:i:s');
                $staffObj->update();
                $returnData = "$staff->name [staff]";
                return $this->sendResponse($returnData, 'Punched-Out successfully.');
            }
            else{

                $staffObj = StaffAttendance::where('date', date('Y-m-d'))
                    ->where('staff_id', $staff->id)
                    ->first();
                return $this->sendResponse($staffObj->toArray(), 'Duplicate Entry!');
            }

            ###################################
            # END STAFF
            ###################################
        }    
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
       
    }


    /**
    * Main SMS Functionality
    */
    // private function queuedSms($numbers, $text){

    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, "http://107.20.199.106/restapi/sms/1/text/single");
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"from\":\"InfoSms\",\"to\":[$numbers],\"text\":\"$text\" }");
    //     curl_setopt($ch, CURLOPT_POST, 1);

    //     $headers = array();
    //     $headers[] = "Content-Type: application/json";
    //     $headers[] = "Accept: application/json";
    //     $headers[] = "Authorization: Basic ".env('SMS_APP_KEY');
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    //     $result = json_decode(curl_exec($ch),true);
    //     //print_r($result);
    //     //$array = $result['messages'][0];
        

    //     if (curl_errno($ch)) {
    //         $msg =  'Error:' . curl_error($ch);
    //         //return redirect('/')->with('danger',$array['status']['name']);
    //         return false;
    //     }
    //     curl_close ($ch);
    //     //end send sms
    //     return true;
    // }
    
    
    private function queuedSms($numbers, $text){

        $api_key = env('SMS_APP_KEY');
        $api_token = env('SMS_APP_TOKEN');
        $from = "8804445629187";
        
        $url = 'http://app.mimsms.com/smsAPI?sendsms&apikey='.$api_key.'&apitoken='.$api_token.'&type=sms&from='.$from.'&to='.$numbers.'&text='.$text;   
           
        $client = new \GuzzleHttp\Client();
        $request = $client->get($url);
        $response = $request->getBody()->getContents();

        return $response;

    }
}