@extends('layouts.template')

@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>TEACHER</h1>
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
        <li class="active">Teacher</li>
        <li class="active">Create</li>
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
                            <form class="form" action="{{ route('teachers.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Metric Id</label>
                                    <input autocomplete="OFF" type="text" name="metric_id" placeholder="Metric Id" required="" class="form-control input-sm" value="{{ old('metric_id') }}"/>
                                    @if($errors->has('metric_id'))
                                        <span class="text-danger">{{ $errors->first('metric_id')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input autocomplete="OFF" type="text" name="name" placeholder="Name"  class="form-control input-sm" value="{{ old('name') }}"/>
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile [<span class="text-danger">Number must start with 88; Total 13 Digits; Ex: 8801716998877</span>]</label>
                                    <input autocomplete="OFF" type="text" name="mobile_no" placeholder="" required="" class="form-control input-sm" pattern="^(?:\+?88)?01[15-9]\d{8}$" title="Number must start with 88; Total 13 Digits; Ex: 8801716998877" value="{{ old('mobile_no') }}"/>
                                    @if($errors->has('mobile_no'))
                                        <span class="text-danger">{{ $errors->first('mobile_no')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Designation</label>
                                    <input autocomplete="OFF" type="text" name="designation" placeholder=""  class="form-control input-sm" value="{{ old('designation') }}"/>
                                    @if($errors->has('designation'))
                                        <span class="text-danger">{{ $errors->first('designation')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input autocomplete="OFF" type="text" name="email" placeholder=""  class="form-control input-sm" value="{{ old('email') }}"/>
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input autocomplete="OFF" type="text" name="address" placeholder=""  class="form-control input-sm" value="{{ old('address') }}"/>
                                    @if($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address')}}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Other Contact Name</label>
                                    <input autocomplete="OFF" type="text" name="other_contact_name" placeholder=""  class="form-control input-sm" value="{{ old('other_contact_name') }}"/>
                                    @if($errors->has('other_contact_name'))
                                        <span class="text-danger">{{ $errors->first('other_contact_name')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Relation with Other Contact </label>
                                    <select name="other_contact_type" id="input" class="form-control select2" >
                                        <option value="">Select </option>
                                        <option value="Father" @if(Null !== old('other_contact_type')) @if("Father"==old('other_contact_type')) selected @endif @endif>Father</option>
                                        <option value="Husband" @if(Null !== old('other_contact_type')) @if("Husband"==old('other_contact_type')) selected @endif @endif>Husband</option>
                                        <option value="Mother" @if(Null !== old('other_contact_type')) @if("Mother"==old('other_contact_type')) selected @endif @endif>Mother</option>
                                        <option value="Other" @if(Null !== old('other_contact_type')) @if("Other"==old('other_contact_type')) selected @endif @endif>Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Other Contact Mobile No</label>
                                    <input autocomplete="OFF" type="text" name="other_contact_mobile_no" placeholder=""  class="form-control input-sm" value="{{ old('other_contact_mobile_no') }}"/>
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
                                    <select name="class_id" id="input" class="form-control select2" required="required">
                                        <option value="">Select </option>
                                        @foreach($classes as $data)
                                        <option value="{{$data->id}}" @if(Null !== old('class_id')) @if($data->id==old('class_id')) selected @endif @endif>{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Section</label>
                                    <select name="section_id" id="input" class="form-control select2" required="required">
                                        <option value="">Select </option>
                                        @foreach($sections as $data)
                                        <option value="{{$data->id}}" @if(Null !== old('section_id')) @if($data->id==old('section_id')) selected @endif @endif>{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Save"/>
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