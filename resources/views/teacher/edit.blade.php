@extends('layouts.template')

@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>Teacher</h1>
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
        <li class="active">Teacher</li>
        <li class="active">Edit</li>
    </ol>
</section>
<!-- End Content Header -->
<!-- Main content -->
<div class="row">
    <div class="col-md-8">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form" name="myForm" action="{{ url('/teachers/'.$teacher->id) }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Metric Id</label>
                                    <input autocomplete="OFF" type="text" name="metric_id" placeholder="Metric Id" required="" class="form-control input-sm" value="{{ $teacher->metric_id }}"/>
                                    @if($errors->has('metric_id'))
                                        <span class="text-danger">{{ $errors->first('metric_id')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input autocomplete="OFF" type="text" name="name" placeholder="Name" required="" class="form-control input-sm" value="{{$teacher->name}}"/>
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input autocomplete="OFF" type="text" name="mobile_no" placeholder=""  class="form-control input-sm" value="{{ $teacher->mobile_no }}"/>
                                    @if($errors->has('mobile_no'))
                                        <span class="text-danger">{{ $errors->first('mobile_no')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Designation</label>
                                    <input autocomplete="OFF" type="text" name="designation" placeholder=""  class="form-control input-sm" value="{{ $teacher->designation }}"/>
                                    @if($errors->has('designation'))
                                        <span class="text-danger">{{ $errors->first('designation')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input autocomplete="OFF" type="text" name="email" placeholder=""  class="form-control input-sm" value="{{ $teacher->email }}"/>
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input autocomplete="OFF" type="text" name="address" placeholder=""  class="form-control input-sm" value="{{ $teacher->address }}"/>
                                    @if($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address')}}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Other Contact Name</label>
                                    <input autocomplete="OFF" type="text" name="other_contact_name" placeholder=""  class="form-control input-sm" value="{{ $teacher->other_contact_name }}"/>
                                    @if($errors->has('other_contact_name'))
                                        <span class="text-danger">{{ $errors->first('other_contact_name')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Relation with Other Contact </label>
                                    <select name="other_contact_type" id="other_contact_type" class="form-control select2" >
                                        <option value="">Select </option>
                                        <option value='Father'>Father</option>
                                        <option value='Husband'>Husband</option>
                                        <option value='Mother'>Mother</option>
                                        <option value='Other'>Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Other Contact Mobile No</label>
                                    <input autocomplete="OFF" type="text" name="other_contact_mobile_no" placeholder=""  class="form-control input-sm" value="{{ $teacher->other_contact_mobile_no }}"/>
                                    @if($errors->has('other_contact_mobile_no'))
                                        <span class="text-danger">{{ $errors->first('other_contact_mobile_no')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Teacher Image</label>
                                    <input type="file" name="teacher_image" placeholder="" class="form-control input-sm" />
                                    @if($errors->has('teacher_image'))
                                        <span class="text-danger">{{ $errors->first('teacher_image')}}</span>
                                    @endif
                                </div> 
                                
                                <div class="form-group">
                                    <label for="">Class</label>
                                    <select name="class_id" id="class_id" class="form-control select2" required="required">
                                        <option value="">Select </option>
                                        @foreach($classes as $data)
                                        <option value="{{$data->id}}" @if($data->id==$class_section_obj->class_id) selected @endif>{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Section</label>
                                    <select name="section_id" id="section_id" class="form-control select2" required="required">
                                        <option value="">Select </option>
                                        @foreach($sections as $data)
                                        <option value="{{$data->id}}" @if($data->id==$class_section_obj->section_id) selected @endif>{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-warning" value="Update"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Content -->
    </div>
</div>

@endsection

@section('script')

@endsection