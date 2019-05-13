@extends('layouts.template')

@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>SELECTED - SMS</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Selected</li>
        <li class="active">Sms</li>
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
                            <form action="{{url('send/sms/selected')}}" method="post" id="smsForm">
                                {{ csrf_field() }}
                                <input type="hidden" name="type" value="selected_number">
                                <div class="form-group">
                                    <label for="">SMS Template</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i style="color: black !important;" class="fa fa-comments-o"></i></span>
                                        <select id="sms_template" name="sms_template" class="form-control select2" >
                                            <option value="">None</option>
                                            @foreach($sms_templates as $data)
                                            <option value="{{$data->message}}">{{$data->subject}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Contacts</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <select id="mobile_no" name="mobile_no[]" class="form-control select2" multiple="multiple" data-placeholder="Select" required="">
                                            <optgroup label="Students">
                                                @foreach($students as $data)
                                                <option value="{{$data->mobile_no}}">{{$data->class}}-{{$data->section}} | Roll: {{$data->roll}} | {{$data->name}} </option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="Teachers">
                                                @foreach($teachers as $data)
                                                <option value="{{$data->mobile_no}}">{{$data->class}}-{{$data->section}} | {{$data->name}} </option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="Members">
                                                @foreach($members as $data)
                                                <option value="{{$data->mobile_no}}">{{$data->name}} </option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="Staffs">
                                                @foreach($staffs as $data)
                                                <option value="{{$data->mobile_no}}">{{$data->name}} </option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                            <label for="">Text </label>
                            <textarea rows="5" name="text" class="form-control" id="text" placeholder="" required=""></textarea>
                            </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" id="" value="Send"/>
                                </div>
                            </form>
                            <div id="success"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Content -->
    </div>
</div>

<script>
$(document).ready(function () {    
    
    $('#sms_template').on('change', function() {
        $('#text').val(this.value);
    });

});

</script>

@endsection