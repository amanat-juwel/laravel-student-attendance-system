<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\ParentModel;
use App\Teacher;
use App\Member;
use App\Staff;
use DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class SmsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function sendSms(Request $request, $type)
    {

        if($type=='selected'){
            echo $this->sendSmsToSelectedNumber($request);
        }
        elseif($type=='students'){
            echo $this->sendSmsToStudent($request);
        }
        elseif($type=='teachers'){
            echo $this->sendSmsToTeacher($request);
        }
        elseif($type=='members'){
            echo $this->sendSmsToMember($request);
        }
        elseif($type=='staffs'){
            echo $this->sendSmsToStaff($request);
        }
        elseif($type=='general'){
            echo $this->sendSmsToAll($request);
        }

    }
    /**
    * Send SMS to Selected Numbers
    * Mixed: Students/Teachers/ Members/ Staff
    */
    private function sendSmsToSelectedNumber($request){

        

        $implode= implode(",",$request->mobile_no);
        $result_string = '"' . str_replace(",", '","', $implode) . '"';
        $numbers = $result_string;
        $text = $request->text;

        $result = $this->queuedSms($numbers,$text);
        
        return redirect()->back()->with('success',"Response: $result");
        
        }
    /**
    * Send SMS to Students
    */
    private function sendSmsToStudent($request){
        $text = $request->text;
        if($request->optradio=="to_all"){

            $obj = DB::table('students')
            ->join('parents','parents.id', '=', 'students.parent_id')
            ->selectRaw('parents.mobile_no')
            ->groupBy('parents.mobile_no')
            ->get();

            $array_of_numbers = $this->convertObjToArray($obj);
            $formatted_numbers = $this->convertArraytoString($array_of_numbers);

            if($this->queuedSms($formatted_numbers,$text)){
            return redirect()->back()->with('success','Sms Sent Successfully');
            }
            else{
                return redirect()->back()->with('danger','Sms could not be sent.');
            }
        }
        elseif($request->optradio=="class_section"){
            $class_id = $request->class_id;
            $section_id = $request->section_id;

            if(!empty($section_id)){
                //to specific class and section
                $obj = DB::table('student_class_section')
                ->join('students','students.id','=','student_class_section.student_id')
                ->join('parents','parents.id', '=', 'students.parent_id')
                ->selectRaw('parents.mobile_no')
                ->where('class_id',$class_id)
                ->where('section_id',$section_id)
                ->groupBy('parents.mobile_no')
                ->get();
                
            }
            else{
                //to specific class only
                $obj = DB::table('student_class_section')
                ->join('students','students.id','=','student_class_section.student_id')
                ->join('parents','parents.id', '=', 'students.parent_id')
                ->selectRaw('parents.mobile_no')
                ->where('class_id',$class_id)
                ->groupBy('parents.mobile_no')
                ->get();
            }
            $array_of_numbers = $this->convertObjToArray($obj);
            $formatted_numbers = $this->convertArraytoString($array_of_numbers);

            if($this->queuedSms($formatted_numbers,$text)){
            return redirect()->back()->with('success','Sms Sent Successfully');
            }
            else{
                return redirect()->back()->with('danger','Sms could not be sent.');
            }
        }
        elseif($request->optradio=="van_student"){
            
            $obj = DB::table('student_van')
            ->join('students','students.id','=','student_van.student_id')
            ->join('parents','parents.id', '=', 'students.parent_id')
            ->selectRaw('parents.mobile_no')
            ->where('van_id',$request->van_id)
            ->groupBy('parents.mobile_no')
            ->get();

            $array_of_numbers = $this->convertObjToArray($obj);
            $formatted_numbers = $this->convertArraytoString($array_of_numbers);
            
            if($this->queuedSms($formatted_numbers,$text)){
            return redirect()->back()->with('success','Sms Sent Successfully');
            }
            else{
                return redirect()->back()->with('danger','Sms could not be sent.');
            }
               
        }

    }

    /**
    * Send SMS to Teachers
    */
    private function sendSmsToTeacher($request){
        $text = $request->text;
        if($request->optradio=="to_all"){
            $obj = DB::table('teachers')
            ->selectRaw('teachers.mobile_no')
            ->get();
        }
        elseif($request->optradio=="class_section"){
            $class_id = $request->class_id;
            $section_id = $request->section_id;

            if(!empty($section_id)){
                $obj = DB::table('teachers')
                ->leftJoin('teacher_class_section','teacher_class_section.teacher_id' ,'=','teachers.id')
                ->select('teachers.*','teacher_class_section.*')
                ->where('teacher_class_section.class_id',$class_id)
                ->where('teacher_class_section.section_id',$section_id)
                ->get() ;
            }
            else{
                $obj = DB::table('teachers')
                ->leftJoin('teacher_class_section','teacher_class_section.teacher_id' ,'=','teachers.id')
                ->leftJoin('classes','classes.id' ,'=','teacher_class_section.class_id')
                ->leftJoin('sections','sections.id' ,'=','teacher_class_section.section_id')
                ->select('teachers.*','teacher_class_section.*')
                ->where('teacher_class_section.class_id',$class_id)
                ->get() ;
            }
        }
        
        $array_of_numbers = $this->convertObjToArray($obj);
        $formatted_numbers = $this->convertArraytoString($array_of_numbers);
            
        if($this->queuedSms($formatted_numbers,$text)){
        return redirect()->back()->with('success','Sms Sent Successfully');
        }
        else{
            return redirect()->back()->with('danger','Sms could not be sent.');
        } 
    }
    /**
    * Send SMS to Members
    */
    private function sendSmsToMember($request){
        $text = $request->text;
        if($request->optradio=="to_all"){
            $obj = DB::table('members')
            ->get() ;
        }

        $array_of_numbers = $this->convertObjToArray($obj);
        $formatted_numbers = $this->convertArraytoString($array_of_numbers);

        if($this->queuedSms($formatted_numbers,$text)){
        return redirect()->back()->with('success','Sms Sent Successfully');
        }
        else{
            return redirect()->back()->with('danger','Sms could not be sent.');
        } 
    }
    /**
    * Send SMS to Staffs
    */
    private function sendSmsToStaff($request){
        $text = $request->text;
        if($request->optradio=="to_all"){
            $obj = DB::table('staffs')
            ->get() ;
        }

        $array_of_numbers = $this->convertObjToArray($obj);
        $formatted_numbers = $this->convertArraytoString($array_of_numbers);

        if($this->queuedSms($formatted_numbers,$text)){
        return redirect()->back()->with('success','Sms Sent Successfully');
        }
        else{
            return redirect()->back()->with('danger','Sms could not be sent.');
        } 
    }
    /**
    * Send SMS to All
    */
    private function sendSmsToAll($request){
        $text = $request->text;
        $formatted_numbers = '';
        ###STUDENT
        $obj = DB::table('students')
        ->join('parents','parents.id', '=', 'students.parent_id')
        ->selectRaw('parents.mobile_no')
        ->groupBy('parents.mobile_no')
        ->get();

        $array_of_numbers = $this->convertObjToArray($obj);
        $formatted_numbers .= $this->convertArraytoString($array_of_numbers);
        ###STUDENT

        ###TEACHER
        $obj = DB::table('teachers')
        ->get();

        $array_of_numbers = $this->convertObjToArray($obj);
        $formatted_numbers .= ','.$this->convertArraytoString($array_of_numbers);
        ###TEACHER

        ###MEMBER
        $obj = DB::table('members')
        ->get();

        $array_of_numbers = $this->convertObjToArray($obj);
        $formatted_numbers .= ','.$this->convertArraytoString($array_of_numbers);
        ###MEMBER

        ###STAFF
        $obj = DB::table('staffs')
        ->get();

        $array_of_numbers = $this->convertObjToArray($obj);
        $formatted_numbers .= ','.$this->convertArraytoString($array_of_numbers);
        ###STAFF

        //return $formatted_numbers;
        //Get numbers
        
        if($this->queuedSms($formatted_numbers,$text)){
            return redirect()->back()->with('success','Sms Sent Successfully');
        }
        else{
            return redirect()->back()->with('danger','Sms could not be sent.');
        }
        //$this->queuedSms($numbers,$text);
        //SMS::queuedSms($numbers,$text);
    }

    /**
    * Main SMS Functionality :: OLD FORMAT
    */
    /*
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
    */
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
    /**
    *  Helper Method
    */
    public function convertObjToArray($obj)
    {
        $array_of_numbers = array();
        foreach ($obj as $key => $value) {
            array_push($array_of_numbers,"$value->mobile_no");
        }
        return $array_of_numbers;
    }

    public  function convertArraytoString($array_numbers)
    {
        $implode= implode(",",$array_numbers);
        $result_string = '"' . str_replace(",", '","', $implode) . '"';
        return $result_string;
    }

    


    
}
