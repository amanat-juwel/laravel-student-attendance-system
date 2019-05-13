<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParentModel ;
use App\Http\Requests\ParentModelRequest;

class ParentModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = ParentModel::all() ;
        return view('parentmodel.index',compact('parents')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parentmodel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParentModelRequest $request)
    {
        $parentModel =  new ParentModel() ;
        $parentModel->father        =  $request->input('father');
        $parentModel->mother        =  $request->input('mother');
        $parentModel->address       =  $request->input('address');
        $parentModel->mobile_no     =  $request->input('mobile_no');
        $parentModel->email         =  $request->input('email');
        $parentModel->occupation    =  $request->input('occupation');
        $res = $parentModel->save() ;
        if($res)
            return redirect('/parentmodel')->with('success','Successfully Saved') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parent =  ParentModel::find($id) ;
        return view('parentmodel.edit',compact('parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParentModelRequest $request, $id)
    {
        $parentModel = ParentModel::find($id) ;
        $parentModel->father        =  $request->input('father');
        $parentModel->mother        =  $request->input('mother');
        $parentModel->address       =  $request->input('address');
        $parentModel->mobile_no     =  $request->input('mobile_no');
        $parentModel->email         =  $request->input('email');
        $parentModel->occupation    =  $request->input('occupation');
        $res = $parentModel->update() ;
            if($res)
                return redirect('/parentmodel')->with('success','Successfully Update') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parentModel = ParentModel::find($id) ;
        $res = $parentModel->delete() ;
            if($res)
                return redirect('/parentmodel')->with('success','Successfully Delete') ;
    }
}
