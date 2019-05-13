<?php

namespace App\Http\Controllers;
use DB ;
use App\Student;
use App\ParentModel;
use App\ClassModel;
use App\Section;
use App\Van;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\Input;
use Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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


        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents    = DB::table('parents')->select('id','father','mother','mobile_no')->get() ;
        $classes = ClassModel::all();
        $sections = Section::all();
        $vans = Van::all();
        return view('student.create',compact('parents','classes','sections','vans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {   

        //Handling Item image
        if($request->file('student_image') != ""){
            $student_image = $request->file('student_image');
            $name = time().$student_image->getClientOriginalName();
            $uploadPath = 'public/image/student/';
            $student_image->move($uploadPath,$name);
            $student_image_url = $uploadPath.$name;
        }
        else{
            $student_image_url = "public/image/avatar.png";
        }      
        //Handling Item image

        $student = New Student;
        $student->metric_id = $request->input('metric_id');
        $student->name = $request->input('name');
        $student->image = $student_image_url;
        $student->dob = $request->input('dob');
        $student->parent_id = $request->input('parent_id');
        $student->save();

        DB::table('student_class_section')->insert(
            ['student_id' => $student->id,
             'class_id' => $request->input('class_id'),
             'section_id' => $request->input('section_id'),
             'roll' => $request->input('roll')]
        );

        DB::table('student_van')->insert(
            ['student_id' => $student->id,
             'van_id' => $request->input('van_id')]
        );

        DB::table('metric_id_type')->insert(
            ['metric_id' => $student->metric_id,
             'type' => "student",
             'primary_id' => $student->id]
        );
 
        return redirect('/students')->with('success','Operation Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student    = Student::find($id);
        $parents    = DB::table('parents')->select('id','father','mother','mobile_no')->get() ;
        $classes = ClassModel::all();
        $sections = Section::all();
        $vans = Van::all();

        $class_section_obj = DB::table('student_class_section')->where('student_id',$student->id)->first() ;
        $van_obj = DB::table('student_van')->where('student_id',$student->id)->first() ;

        return view('student.edit',compact('student','parents','classes','sections','class_section_obj','vans','van_obj'))->with('id',$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {      
        $student = Student::find($id);

        //Handling Item image
        if($request->file('student_image') != ""){
            $student_image = $request->file('student_image');
            $name = time().$student_image->getClientOriginalName();
            $uploadPath = 'public/image/student/';
            $student_image->move($uploadPath,$name);
            $student->image = $uploadPath.$name;
        }   
        //Handling Item image

        
        $student->metric_id = $request->input('metric_id');
        $student->name = $request->input('name');
        $student->dob = $request->input('dob');
        $student->update();

        DB::table('student_class_section')
                ->where('student_id', $id)
                ->update(['class_id' => $request->input('class_id'),
                          'section_id' => $request->input('section_id'),
                          'roll' => $request->input('roll')
                         ]);
        $count = DB::table('student_van')->where('student_id', $id)->count();   
        if($count>0){
        DB::table('student_van')
                ->where('student_id', $id)
                ->update(['van_id' => $request->input('van_id')
                         ]);
        }
        else{
            DB::table('student_van')->insert(
                ['student_id' => $student->id,
                 'van_id' => $request->input('van_id')]
            );
        }

        DB::table('metric_id_type')
                ->where('primary_id', $id)
                ->where('type', "student")
                ->update(['metric_id' => $request->input('metric_id')
                         ]);

        return redirect('/students')->with('success','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students')->with('success','Operation Successful');
    }
}
