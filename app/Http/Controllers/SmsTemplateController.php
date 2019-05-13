<?php

namespace App\Http\Controllers;

use App\SmsTemplate;
use Illuminate\Http\Request;

class SmsTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sms_templates = SmsTemplate::all();
        return view('sms_template.index',compact('sms_templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sms_template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $SmsTemplate = New SmsTemplate;
        $SmsTemplate->subject = $request->input('subject');
        $SmsTemplate->message = $request->input('message');
        $SmsTemplate->save();

        return redirect('/sms_templates')->with('success','Operation Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SmsTemplate  $SmsTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(SmsTemplate $SmsTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SmsTemplate  $SmsTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sms_template = SmsTemplate::find($id);

        return view('sms_template.edit',compact('sms_template'))->with('id',$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SmsTemplate  $SmsTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $SmsTemplate = SmsTemplate::find($id);
        $SmsTemplate->subject = $request->input('subject');
        $SmsTemplate->message = $request->input('message');
        $SmsTemplate->update();

        return redirect('/sms_templates')->with('success','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SmsTemplate  $SmsTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SmsTemplate = SmsTemplate::find($id);
        $SmsTemplate->delete();
        return redirect()->back()->with('success','Operation Successful');
    }
}
