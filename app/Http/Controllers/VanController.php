<?php

namespace App\Http\Controllers;

use App\Van;
use Illuminate\Http\Request;
use App\Http\Requests\VanRequest;

class VanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $van = Van::all() ;
        return view('van.index',compact('van')) ;
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
    public function store(VanRequest $request)
    {
        $van = new Van ;
        $van->name         =  $request->input('name') ;
        $van->description  =  $request->input('description') ;
        $res = $van->save() ;
        if($res)
            return redirect('/van')->with('success','Successfully Saved');
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
    public function update(VanRequest $request, $id)
    {
        $van = Van::find($id);
        $van->name =  $request->input('name') ;
        $van->description =  $request->input('description') ;
        $res = $van->update() ;
        if($res)
            return redirect('/van')->with('success','Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $van = Van::find($id);
        $van->delete();
        return redirect('/van')->with('success','Successfully Delete');
    }
}
