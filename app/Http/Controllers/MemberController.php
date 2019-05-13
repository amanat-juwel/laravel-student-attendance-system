<?php

namespace App\Http\Controllers;
use DB ;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all() ;
        return view('member.index',compact('members')) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $member = New Member;
        $member->name = $request->input('name');
        $member->father = $request->input('father');
        $member->mother = $request->input('mother');
        $member->address = $request->input('address');
        $member->mobile_no = $request->input('mobile_no');
        $member->position = $request->input('position');
        $member->save();

        return redirect('/members')->with('success','Operation Successful');
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
        $member = Member::find($id);

        return view('member.edit',compact('member'))->with('id',$id);
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
        $member = Member::find($id);
        $member->name = $request->input('name');
        $member->father = $request->input('father');
        $member->mother = $request->input('mother');
        $member->address = $request->input('address');
        $member->mobile_no = $request->input('mobile_no');
        $member->position = $request->input('position');
        $member->update();
        return redirect('/members')->with('success','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/members')->with('success','Operation Successful');
    }
}
