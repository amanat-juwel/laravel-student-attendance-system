<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\StudentAttendance;
use App\TeacherAttendance;
use App\StaffAttendance;
use Validator;
use DB;


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

               return $this->sendResponse($stdObj->toArray(), 'Saved successfully.');

            }
            elseif(is_null($obj->out_time)){
                $stdObj = StudentAttendance::where('date', date('Y-m-d'))
                    ->where('student_id', $student->id)
                    ->first();

                // Set 5 minute waiting time
                $secondsDifference=strtotime(date('Y-m-d H:i:s'))-strtotime($stdObj->in_time);
                // if($secondsDifference < 300){

                //     $in_sec = 300-$secondsDifference;
                //     $in_min = ceil(intval($in_sec/60));
                //     if($in_min>0){
                //         return $this->sendResponse($stdObj->toArray(), "Wait $in_min Minute");
                //     }
                //     else{
                //         return $this->sendResponse($stdObj->toArray(), "Wait $in_sec Seconds");
                //     }
                // }
                
                if($secondsDifference < 120){
                    return $this->sendResponse($stdObj->toArray(), "Wait $secondsDifference Sec.");
                }

                $stdObj->out_time = date('Y-m-d H:i:s');
                $stdObj->update();

                $time = $time = date('h:i a');
                $_date = date('d M Y');
                $text = "Dear guardian,$student->name has left Saint Cosmo School at $time in $_date #Thanks SCS";
                $this->queuedSms($number, $text);

                return $this->sendResponse($stdObj->toArray(), 'Updated successfully.');
            }
            else{

                $stdObj = StudentAttendance::where('date', date('Y-m-d'))
                    ->where('student_id', $student->id)
                    ->first();
                return $this->sendResponse($stdObj->toArray(), 'Duplicate Entry!');
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

               return $this->sendResponse($teacherObj->toArray(), 'Saved successfully.');

            }
            elseif(is_null($obj->out_time)){
                $teacherObj = TeacherAttendance::where('date', date('Y-m-d'))
                    ->where('teacher_id', $teacher->id)
                    ->first();

                // Set 5 minute waiting time
                // $secondsDifference=strtotime(date('Y-m-d h:i:s'))-strtotime($stdObj->in_time);
                // if($secondsDifference < 300){

                //     $in_sec = 300-$secondsDifference;
                //     $in_min = ceil(intval($in_sec/60));
                //     if($in_min>0){
                //         return $this->sendResponse($stdObj->toArray(), "Wait $in_min Minute");
                //     }
                //     else{
                //         return $this->sendResponse($stdObj->toArray(), "Wait $in_sec Seconds");
                //     }
                // }

                $teacherObj->out_time = date('Y-m-d H:i:s');
                $teacherObj->update();

                return $this->sendResponse($teacherObj->toArray(), 'Updated successfully.');
            }
            else{

                $teacherObj = TeacherAttendance::where('date', date('Y-m-d'))
                    ->where('teacher_id', $teacher->id)
                    ->first();
                return $this->sendResponse($teacherObj->toArray(), 'Duplicate Entry!');
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

               return $this->sendResponse($staffObj->toArray(), 'Saved successfully.');

            }
            elseif(is_null($obj->out_time)){
                $staffObj = StaffAttendance::where('date', date('Y-m-d'))
                    ->where('staff_id', $staff->id)
                    ->first();

                $staffObj->out_time = date('Y-m-d H:i:s');
                $staffObj->update();

                return $this->sendResponse($stdObj->toArray(), 'Updated successfully.');
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
    private function queuedSms($numbers, $text){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://107.20.199.106/restapi/sms/1/text/single");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"from\":\"InfoSms\",\"to\":[$numbers],\"text\":\"$text\" }");
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = array();
        $headers[] = "Content-Type: application/json";
        $headers[] = "Accept: application/json";
        $headers[] = "Authorization: Basic ".env('SMS_APP_KEY');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = json_decode(curl_exec($ch),true);
        //print_r($result);
        //$array = $result['messages'][0];
        

        if (curl_errno($ch)) {
            $msg =  'Error:' . curl_error($ch);
            //return redirect('/')->with('danger',$array['status']['name']);
            return false;
        }
        curl_close ($ch);
        //end send sms
        return true;
    }
}