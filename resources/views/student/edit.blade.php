@extends('layouts.template')

@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>STUDENT</h1>
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
        <li class="active">Student</li>
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
                            <form class="form" action="{{ url('/students/'.$student->id) }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Metric Id</label>
                                    <input autocomplete="OFF" type="text" name="metric_id" placeholder="Metric Id" required="" class="form-control input-sm" value="{{ $student->metric_id }}"/>
                                    @if($errors->has('metric_id'))
                                        <span class="text-danger">{{ $errors->first('metric_id')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input autocomplete="OFF" type="text" name="name" placeholder="Name" required="" class="form-control input-sm" value="{{$student->name}}"/>
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Student Image</label>
                                    <input type="file" name="student_image" placeholder="" class="form-control input-sm" />
                                    @if($errors->has('student_image'))
                                        <span class="text-danger">{{ $errors->first('student_image')}}</span>
                                    @endif
                                </div> 
                                <div class="form-group">
                                    <label for="">Date of birth</label>
                                    <input  autocomplete="OFF" type="text" id="datepicker" value="{{$student->dob}}" name="dob" id="" class="form-control input-sm"/>
                                    @if($errors->has('dob'))
                                        <span class="text-danger">{{ $errors->first('dob')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Parent</label>
                                    <select name="parent_id" id="input" class="form-control select2" required="required">
	                                    <option value="">Select </option>
                                        @foreach($parents as $parent)
                                        <option value="{{$parent->id}}" @if($parent->id==$student->parent_id) selected @endif>Father : {{$parent->father}} | Mother : {{$parent->mother}} | Mobile no : {{$parent->mobile_no}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Class</label>
                                    <select name="class_id" id="input" class="form-control select2" required="required">
                                        <option value="">Select </option>
                                        @foreach($classes as $data)
                                        <option value="{{$data->id}}" @if($data->id==$class_section_obj->class_id) selected @endif>{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Section</label>
                                    <select name="section_id" id="input" class="form-control select2" required="required">
                                        <option value="">Select </option>
                                        @foreach($sections as $data)
                                        <option value="{{$data->id}}" @if($data->id==$class_section_obj->section_id) selected @endif>{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Roll</label>
                                    <input autocomplete="OFF" type="text" name="roll" placeholder="Roll"  class="form-control input-sm" value="{{$class_section_obj->roll}}" required="" />
                                    @if($errors->has('roll'))
                                        <span class="text-danger">{{ $errors->first('roll')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Van</label>
                                    <select name="van_id" id="input" class="form-control select2" >
                                        <option value="">Select </option>
                                        @foreach($vans as $data)
                                        <option value="{{$data->id}}" @if(isset($van_obj)) @if($data->id==$van_obj->van_id) selected @endif @endif>{{$data->name}}</option>
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
