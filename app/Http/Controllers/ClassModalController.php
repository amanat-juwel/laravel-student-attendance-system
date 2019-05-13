<?php

namespace App\Http\Controllers;

use App\ClassModel;
use Illuminate\Http\Request;
use App\Http\Requests\ClassModelRequest;

class ClassModalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = ClassModel::all() ;
        return view('classmodel.index',compact('classes')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassModelRequest $request)
    {
        $classModel = new ClassModel ;
        $classModel->name =  $request->input('name') ;
        $res = $classModel->save() ;
        if($res)
            return redirect()->back()->with('success','Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClassModelRequest $request, $id)
    {
        $classModel = ClassModel::find($id);
        $classModel->name =  $request->input('name') ;
        $res = $classModel->update() ;
        if($res)
            return redirect()->back()->with('success','Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classModel = ClassModel::find($id);
        $classModel->delete();
        return redirect()->back()->with('success','Successfully Delete');
    }
}
