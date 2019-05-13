<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\ClassModel;
use App\Section;
use App\Van;
use App\Teacher;
use App\Staff;
use DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $api_key = env('SMS_APP_KEY');
        $api_token = env('SMS_APP_TOKEN');
        $from = "8804445629187";
        
        $url = 'http://app.mimsms.com/smsAPI?balance&apikey=Qm6NpIlEwCueAdxgBSzTsp7juC3K3qnZ&apitoken=Ejkg1548237056';   
        $client = new \GuzzleHttp\Client();
        $request = $client->get($url);

        $response_balance = $request->getBody()->getContents();
        $balance_object = json_decode($response_balance);
        if(isset($balance_object->balance)){
            $balance = $balance_object->balance;
        }
        else{
            $balance = 'Un-defined';
        }

        $count_student = Student::all()->count();
        $count_teacher = Teacher::all()->count();
        $count_staff = Staff::all()->count();

        $todays_student_att = DB::table('student_attendance')->where('date',date('Y-m-d'))->count() ;
        $todays_teacher_att = DB::table('teacher_attendance')->where('date',date('Y-m-d'))->count() ;
        $todays_staff_att = DB::table('staff_attendance')->where('date',date('Y-m-d'))->count() ;

        return view('home',compact('balance','count_student','count_teacher','count_staff','todays_student_att','todays_teacher_att','todays_staff_att'));
    }
}
