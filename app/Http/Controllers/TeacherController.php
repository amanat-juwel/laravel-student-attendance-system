<?php

namespace App\Http\Controllers;
use DB ;
use App\Teacher;
use App\ClassModel;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = DB::table('teachers')
                      ->leftJoin('teacher_class_section','teacher_class_section.teacher_id' ,'=','teachers.id')
                      ->leftJoin('classes','classes.id' ,'=','teacher_class_section.class_id')
                      ->leftJoin('sections','sections.id' ,'=','teacher_class_section.section_id')
                      ->select('teachers.*','classes.name as class','sections.name as section')
                      ->orderBy('teachers.name','asc')
                      ->get() ;

        return view('teacher.index',compact('teachers')) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $classes = ClassModel::all() ;
        $sections = Section::all() ;
        return view('teacher.create',compact('classes','sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ['metric_id' => 'unique:teachers',]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(Input::all());
        }

        //Handling  image
        if($request->file('teacher_image') != ""){
            $_image = $request->file('teacher_image');
            $name = time().$_image->getClientOriginalName();
            $uploadPath = 'public/image/teacher/';
            $_image->move($uploadPath,$name);
            $teacher_image_url = $uploadPath.$name;
        }
        else{
            $teacher_image_url = "public/image/avatar.png";
        }      
        //Handling  image

        $teacher = New Teacher;
        $teacher->metric_id = $request->input('metric_id');
        $teacher->name = $request->input('name');
        $teacher->mobile_no = $request->input('mobile_no');
        $teacher->designation = $request->input('designation');
        $teacher->email = $request->input('email');
        $teacher->address = $request->input('address');
        $teacher->image = $teacher_image_url;
        $teacher->other_contact_type = $request->input('other_contact_type');
        $teacher->other_contact_name = $request->input('other_contact_name');
        $teacher->other_contact_mobile_no = $request->input('other_contact_mobile_no');
        $teacher->save();

        DB::table('teacher_class_section')->insert(
            ['teacher_id' => $teacher->id,
             'class_id' => $request->input('class_id'),
             'section_id' => $request->input('section_id')]
        );

        DB::table('metric_id_type')->insert(
            ['metric_id' => $teacher->metric_id,
             'type' => "teacher",
             'primary_id' => $teacher->id]
        );

        return redirect('/teachers')->with('success','Operation Successful');
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
        $teacher = Teacher::find($id);
        $classes = ClassModel::all() ;
        $sections = Section::all() ;
        $class_section_obj = DB::table('teacher_class_section')->where('teacher_id',$teacher->id)->first() ;

        return view('teacher.edit',compact('teacher','classes','sections','class_section_obj'))->with('id',$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);

        //Handling  image
        if($request->file('teacher_image') != ""){
            $_image = $request->file('teacher_image');
            $name = time().$_image->getClientOriginalName();
            $uploadPath = 'public/image/teacher/';
            $_image->move($uploadPath,$name);
            $imageUrl = $uploadPath.$name;
            $teacher->image = $imageUrl;
        }
        //Handling  image

        $teacher->metric_id = $request->input('metric_id');
        $teacher->name = $request->input('name');
        $teacher->mobile_no = $request->input('mobile_no');
        $teacher->designation = $request->input('designation');
        $teacher->email = $request->input('email');
        $teacher->address = $request->input('address');
        
        $teacher->other_contact_type = $request->input('other_contact_type');
        $teacher->other_contact_name = $request->input('other_contact_name');
        $teacher->other_contact_mobile_no = $request->input('other_contact_mobile_no');
        $teacher->update();

        DB::table('teacher_class_section')
                ->where('teacher_id', $id)
                ->update(['class_id' => $request->input('class_id'),
                          'section_id' => $request->input('section_id')
                         ]);

        DB::table('metric_id_type')
                ->where('primary_id', $id)
                ->where('type', "teacher")
                ->update(['metric_id' => $request->input('metric_id')
                         ]);

        return redirect('/teachers')->with('success','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect('/teachers')->with('success','Operation Successful');
    }
}
