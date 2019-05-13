<?php

namespace App\Http\Controllers;
use DB ;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all() ;
        return view('staff.index',compact('staffs')) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = New Staff;
        $staff->metric_id = $request->input('metric_id');
        $staff->name = $request->input('name');
        $staff->father = $request->input('father');
        $staff->mother = $request->input('mother');
        $staff->address = $request->input('address');
        $staff->mobile_no = $request->input('mobile_no');
        $staff->position = $request->input('position');
        $staff->save();

        DB::table('metric_id_type')->insert(
            ['metric_id' => $staff->metric_id,
             'type' => "staff",
             'primary_id' => $staff->id]
        );

        return redirect('/staffs')->with('success','Operation Successful');
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
        $staff    = Staff::find($id);

        return view('staff.edit',compact('staff'))->with('id',$id);
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
        $staff = Staff::find($id);
        $staff->metric_id = $request->input('metric_id');
        $staff->name = $request->input('name');
        $staff->father = $request->input('father');
        $staff->mother = $request->input('mother');
        $staff->address = $request->input('address');
        $staff->mobile_no = $request->input('mobile_no');
        $staff->position = $request->input('position');
        $staff->update();

        DB::table('metric_id_type')
                ->where('primary_id', $id)
                ->where('type', "staff")
                ->update(['metric_id' => $request->input('metric_id')
                         ]);
        return redirect('/staffs')->with('success','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('/staffs')->with('success','Operation Successful');
    }
}
