<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use App\Teacher;
use App\Staff;
use App\ClassModel;
use App\Section;
use DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    ######################################
    // STUDENT -SINGLE
    ######################################
    public function studentSingleIndex()
    {
        $students = Student::all();
        return view('report.attendance.student.single',compact('students'));
    }

    public function studentSingleReport(Request $request)
    {
        
        $student_id = $request->student_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $attendances = $this->singleStudentAttendance($student_id,$start_date,$end_date);
        
        $student = Student::find($student_id);
        $students = Student::all();

        return view('report.attendance.student.single',compact('students','student','start_date','end_date','attendances'));
    }

    public function studentSingleReportPrint($student_id,$start_date,$end_date)
    {
        $student = Student::find($student_id);
        $attendances = $this->singleStudentAttendance($student_id,$start_date,$end_date);

        return view('report.attendance.student.single-print',compact('student','start_date','end_date','attendances'));
    }

    public function singleStudentAttendance($student_id,$start_date,$end_date){
        $attendances = DB::table('student_attendance')
        ->join('students','students.id', '=', 'student_attendance.student_id')
        ->whereBetween('date', [$start_date, $end_date])
        ->where('students.id',$student_id)
        ->orderBy('student_attendance.id', 'asc')
        ->get();

        return $attendances;
    }

    ######################################
    // TEACHER -SINGLE
    ######################################
    public function teacherSingleIndex()
    {
        $teachers = Teacher::all();
        return view('report.attendance.teacher.single',compact('teachers'));
    }

    public function teacherSingleReport(Request $request)
    {
        
        $teacher_id = $request->teacher_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $attendances = $this->singleTeacherAttendance($teacher_id,$start_date,$end_date);
        
        $teacher = Teacher::find($teacher_id);
        $teachers = Teacher::all();

        return view('report.attendance.teacher.single',compact('teachers','teacher','start_date','end_date','attendances'));
    }

    public function teacherSingleReportPrint($teacher_id,$start_date,$end_date)
    {
        $teacher = Teacher::find($teacher_id);
        $attendances = $this->singleTeacherAttendance($teacher_id,$start_date,$end_date);

        return view('report.attendance.teacher.single-print',compact('teacher','start_date','end_date','attendances'));
    }

    public function singleTeacherAttendance($teacher_id,$start_date,$end_date){
        $attendances = DB::table('teacher_attendance')
        ->join('teachers','teachers.id', '=', 'teacher_attendance.teacher_id')
        ->whereBetween('date', [$start_date, $end_date])
        ->orderBy('teacher_attendance.id', 'asc')
        ->where('teacher_id',$teacher_id)
        ->get();

        return $attendances;
    }

    ######################################
    // STAFF -SINGLE
    ######################################
    public function staffSingleIndex()
    {
        $staffs = Staff::all();
        return view('report.attendance.staff.single',compact('staffs'));
    }

    public function staffSingleReport(Request $request)
    {
        
        $staff_id = $request->staff_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $attendances = $this->singleStaffAttendance($staff_id,$start_date,$end_date);
        
        $staff = Staff::find($staff_id);
        $staffs = Staff::all();

        return view('report.attendance.staff.single',compact('staffs','staff','start_date','end_date','attendances'));
    }

    public function staffSingleReportPrint($staff_id,$start_date,$end_date)
    {
        $staff = Staff::find($staff_id);
        $attendances = $this->singleStaffAttendance($staff_id,$start_date,$end_date);

        return view('report.attendance.staff.single-print',compact('staff','start_date','end_date','attendances'));
    }

    public function singleStaffAttendance($staff_id,$start_date,$end_date){
        $attendances = DB::table('staff_attendance')
        ->join('staffs','staffs.id', '=', 'staff_attendance.staff_id')
        ->whereBetween('date', [$start_date, $end_date])
        ->orderBy('staff_attendance.id', 'asc')
        ->where('staff_id',$staff_id)
        ->get();

        return $attendances;
    }

    ######################################
    // CLASS - SECTION
    ######################################
    public function classSectionIndex()
    {
        $class_all = ClassModel::all();
        $section_all = Section::all();

        return view('report.attendance.class_section.single',compact('class_id','section_id','class_all','section_all','attendances','date'));
    }

    public function classSectionReport(Request $request)
    {
        
        $class_id = $request->class_id;
        $section_id = $request->section_id;
        $date = $request->date;

        $attendances = $this->classSectionAttendance($class_id,$section_id,$date);
        
        $class_all = ClassModel::all();
        $section_all = Section::all();

        return view('report.attendance.class_section.single',compact('class_id','section_id','class_all','section_all','attendances','date'));
    }

    public function classSectionReportPrint($class_id,$section_id,$date)
    {
        $class = ClassModel::find($class_id);
        $section = Section::find($section_id);
        $attendances = $this->classSectionAttendance($class_id,$section_id,$date);

        return view('report.attendance.class_section.single-print',compact('class','section','class_all','section_all','attendances','date'));
    }

    public function classSectionAttendance($class_id,$section_id,$date){
        $attendances = DB::table('student_attendance')
        ->join('student_class_section','student_class_section.student_id', '=', 'student_attendance.student_id')
        ->join('students','students.id', '=', 'student_attendance.student_id')
        ->selectRaw('student_attendance.*,students.name as student_name')
        ->where('class_id',$class_id)
        ->where('section_id',$section_id)
        ->whereBetween('date', [$date, $date])
        ->orderBy('student_attendance.id', 'asc')
        ->get();

        return $attendances;
    }

    ######################################
    // SMS - LOG
    ######################################
    public function smsLogIndex()
    {
        return view('report.sms_log.index');
    }

    public function smsLogReport(Request $request)
    {

        $start_date = $request->start_date;
        $end_date = $request->end_date;
        
        $sms_logs = $this->smsLog($start_date,$end_date);

        return view('report.sms_log.index',compact('start_date','end_date','sms_logs'));
    }

    public function smsLogReportPrint($start_date,$end_date)
    {
        $sms_logs = $this->smsLog($start_date,$end_date);

        return view('report.sms_log.index-print',compact('start_date','end_date','sms_logs'));
    }

    public function smsLog($start_date,$end_date){

        $sms_logs = DB::table('sms_logs')
        ->join('users','users.id', '=', 'sms_logs.user_id')
        ->selectRaw('sms_logs.*,users.name as user')
        ->whereBetween('date', [$start_date, $end_date])
        ->orderBy('sms_logs.id', 'asc')
        ->get();

        return $sms_logs;
    }

    ######################################
    // Metric Id List
    ######################################
    public function metricIdList()
    {
        $metricIdLists = DB::table('metric_id_type')
        ->orderBy('metric_id_type.metric_id', 'asc')
        ->get();

        return view('report.metric_id.index',compact('metricIdLists'));
    }

    ######################################
    // Student Present
    ######################################
    public function studentPresent()
    {
        
        $students   = DB::table('students')
                      ->leftJoin('parents','parents.id' ,'=','students.parent_id')
                      ->leftJoin('student_class_section','student_class_section.student_id' ,'=','students.id')
                      ->leftJoin('classes','classes.id' ,'=','student_class_section.class_id')
                      ->leftJoin('sections','sections.id' ,'=','student_class_section.section_id')
                      ->leftJoin('student_van','student_van.student_id' ,'=','students.id')
                      ->leftJoin('vans','vans.id' ,'=','student_van.van_id')  
                      ->select('students.*','parents.father','parents.mother','parents.mobile_no','classes.name as class','sections.name as section','student_class_section.roll','vans.name as van')
                      ->orderBy('student_class_section.class_id','asc')
                      ->orderBy('student_class_section.section_id','asc')                      
                      ->get() ;

        $attendances  = DB::table('student_attendance')
                      ->where('date',date('Y-m-d'))                  
                      ->get() ;
                    

        return view('report.present.student',compact('students','attendances'));
    }

    ######################################
    // Student Absent
    ######################################
    public function studentAbsent()
    {
        
        $students   = DB::table('students')
                      ->leftJoin('parents','parents.id' ,'=','students.parent_id')
                      ->leftJoin('student_class_section','student_class_section.student_id' ,'=','students.id')
                      ->leftJoin('classes','classes.id' ,'=','student_class_section.class_id')
                      ->leftJoin('sections','sections.id' ,'=','student_class_section.section_id')
                      ->leftJoin('student_van','student_van.student_id' ,'=','students.id')
                      ->leftJoin('vans','vans.id' ,'=','student_van.van_id')  
                      ->select('students.*','parents.father','parents.mother','parents.mobile_no','classes.name as class','sections.name as section','student_class_section.roll','vans.name as van')
                      ->orderBy('student_class_section.class_id','asc')
                      ->orderBy('student_class_section.section_id','asc')                      
                      ->get() ;

        $attendances  = DB::table('student_attendance')
                      ->where('date',date('Y-m-d'))                  
                      ->get() ;
                    

        return view('report.absent.student',compact('students','attendances'));
    }

    ######################################
    // Teacher Present
    ######################################
    public function teacherPresent()
    {
        
        $teachers   = DB::table('teachers')
                      ->leftJoin('teacher_class_section','teacher_class_section.teacher_id' ,'=','teachers.id')
                      ->leftJoin('classes','classes.id' ,'=','teacher_class_section.class_id')
                      ->leftJoin('sections','sections.id' ,'=','teacher_class_section.section_id') 
                      ->select('teachers.*','classes.name as class','sections.name as section')
                      ->orderBy('teacher_class_section.class_id','asc')
                      ->orderBy('teacher_class_section.section_id','asc')                      
                      ->get() ;

        $attendances  = DB::table('teacher_attendance')
                      ->where('date',date('Y-m-d'))                  
                      ->get() ;
                    

        return view('report.present.teacher',compact('teachers','attendances'));
    }

    ######################################
    // Teacher Absent
    ######################################
    public function teacherAbsent()
    {
        
        $teachers   = DB::table('teachers')
                      ->leftJoin('teacher_class_section','teacher_class_section.teacher_id' ,'=','teachers.id')
                      ->leftJoin('classes','classes.id' ,'=','teacher_class_section.class_id')
                      ->leftJoin('sections','sections.id' ,'=','teacher_class_section.section_id') 
                      ->select('teachers.*','classes.name as class','sections.name as section')
                      ->orderBy('teacher_class_section.class_id','asc')
                      ->orderBy('teacher_class_section.section_id','asc')                      
                      ->get() ;

        $attendances  = DB::table('teacher_attendance')
                      ->where('date',date('Y-m-d'))                  
                      ->get() ;
                    

        return view('report.absent.teacher',compact('teachers','attendances'));
    }

    ######################################
    // Staff Present/Absent
    ######################################
    public function currentDateStaffAttendance($type)
    {
        
        $staffs   = DB::table('staffs')
                      ->orderBy('staffs.name','asc')                     
                      ->get() ;

        $attendances  = DB::table('staff_attendance')
                      ->where('date',date('Y-m-d'))                  
                      ->get() ;
                    
        if("$type"=="present"){
            return view('report.present.staff',compact('staffs','attendances'));
        }
        elseif("$type"=="absent"){
            return view('report.absent.staff',compact('staffs','attendances'));
        }
    }

    ######################################
    // Student Present Datewise
    ######################################
    public function studentDatewiseIndex(){
        return view('report.present.datewise.student');
    }   

    public function  studentDatewiseReport(Request $request){
        
        $reporting_date = $request->reporting_date;

        $students   = DB::table('students')
                      ->leftJoin('parents','parents.id' ,'=','students.parent_id')
                      ->leftJoin('student_class_section','student_class_section.student_id' ,'=','students.id')
                      ->leftJoin('classes','classes.id' ,'=','student_class_section.class_id')
                      ->leftJoin('sections','sections.id' ,'=','student_class_section.section_id')
                      ->leftJoin('student_van','student_van.student_id' ,'=','students.id')
                      ->leftJoin('vans','vans.id' ,'=','student_van.van_id')  
                      ->select('students.*','parents.father','parents.mother','parents.mobile_no','classes.name as class','sections.name as section','student_class_section.roll','vans.name as van')
                      ->orderBy('student_class_section.class_id','asc')
                      ->orderBy('student_class_section.section_id','asc')                      
                      ->get() ;

        $attendances  = DB::table('student_attendance')
                      ->where('date',$reporting_date)                  
                      ->get() ;
                    

        return view('report.present.datewise.student',compact('reporting_date','students','attendances'));
    }

    ######################################
    // Teacher Present Datewise
    ######################################
    public function teacherDatewiseIndex(){
        return view('report.present.datewise.teacher');
    }   
    
    public function  teacherDatewiseReport(Request $request){
        
        $reporting_date = $request->reporting_date;

        $teachers   = DB::table('teachers')
                      ->leftJoin('teacher_class_section','teacher_class_section.teacher_id' ,'=','teachers.id')
                      ->leftJoin('classes','classes.id' ,'=','teacher_class_section.class_id')
                      ->leftJoin('sections','sections.id' ,'=','teacher_class_section.section_id') 
                      ->select('teachers.*','classes.name as class','sections.name as section')
                      ->orderBy('teacher_class_section.class_id','asc')
                      ->orderBy('teacher_class_section.section_id','asc')                      
                      ->get() ;

        $attendances  = DB::table('teacher_attendance')
                      ->where('date',$reporting_date)                  
                      ->get() ;
                    

        return view('report.present.datewise.teacher',compact('reporting_date','teachers','attendances'));
    }
    
    ######################################
    // Staff Present Datewise
    ######################################
    public function staffDatewiseIndex(){
        return view('report.present.datewise.staff');
    }   
    
    public function  staffDatewiseReport(Request $request){
        
        $reporting_date = $request->reporting_date;

        $staffs   = DB::table('staffs')
                      ->orderBy('staffs.name','asc')                     
                      ->get() ;

        $attendances  = DB::table('staff_attendance')
                      ->where('date',$reporting_date)                
                      ->get() ;
                    

        return view('report.present.datewise.staff',compact('reporting_date','staffs','attendances'));
    }

}
