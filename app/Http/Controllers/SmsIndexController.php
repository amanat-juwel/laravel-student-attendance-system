<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\ParentModel;
use App\Teacher;
use App\Member;
use App\Staff;
use App\SmsTemplate;
use App\ClassModel;
use App\Section;
use App\Van;
use DB;

class SmsIndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
    * Send SMS to Selected Numbers
    * Mixed: Students/Teachers/ Members/ Staff
    */
    public function selectedIndex(){

        $students = DB::table('students')
                      ->leftJoin('parents','parents.id' ,'=','students.parent_id')
                      ->leftJoin('student_class_section','student_class_section.student_id' ,'=','students.id')
                      ->leftJoin('classes','classes.id' ,'=','student_class_section.class_id')
                      ->leftJoin('sections','sections.id' ,'=','student_class_section.section_id')
                      ->select('students.*','parents.father','parents.mother','parents.mobile_no','classes.name as class','sections.name as section','student_class_section.roll')
                      ->orderBy('student_class_section.class_id','asc')
                      ->orderBy('student_class_section.section_id','asc')
                      ->get() ;

        $teachers = DB::table('teachers')
                      ->leftJoin('teacher_class_section','teacher_class_section.teacher_id' ,'=','teachers.id')
                      ->leftJoin('classes','classes.id' ,'=','teacher_class_section.class_id')
                      ->leftJoin('sections','sections.id' ,'=','teacher_class_section.section_id')
                      ->select('teachers.*','classes.name as class','sections.name as section')
                      ->orderBy('teacher_class_section.class_id','asc')
                      ->orderBy('teacher_class_section.section_id','asc')
                      ->get() ;

        $members = Member::all();
        $staffs = Staff::all();
        $sms_templates = SmsTemplate::all();

        return view('send_sms.selected_numbers',compact('students','teachers','members','staffs','sms_templates'));
    }
    /**
    * Send SMS to Students
    */
    public function studentIndex(){
        $sms_templates = SmsTemplate::all();
        $classes = ClassModel::all() ;
        $sections = Section::all() ;
        $vans = Van::all() ;

        return view('send_sms.students',compact('sms_templates','classes','sections','vans'));
    }

    /**
    * Send SMS to Teachers
    */
    public function teacherIndex(){
        $sms_templates = SmsTemplate::all();
        $classes = ClassModel::all() ;
        $sections = Section::all() ;
        return view('send_sms.teachers',compact('sms_templates','classes','sections'));
    }
    /**
    * Send SMS to Members
    */
    public function memberIndex(){
        $sms_templates = SmsTemplate::all();
        
        return view('send_sms.members',compact('sms_templates'));
    }
    /**
    * Send SMS to Staffs
    */
    public function staffIndex(){
        $sms_templates = SmsTemplate::all();
        
        return view('send_sms.staffs',compact('sms_templates'));
    }
    /**
    * Send SMS to All of the numbers 
    */
    public function generalIndex(){
        $sms_templates = SmsTemplate::all();
        
        return view('send_sms.general',compact('sms_templates'));
    }

    
}
