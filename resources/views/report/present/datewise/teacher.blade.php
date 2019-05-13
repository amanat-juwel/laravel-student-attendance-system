@extends('layouts.template') 
@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>TEACHER</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-dashboard"></i>Dashboard</a>
        </li>
        <li class="active">Teacher</li>
    </ol>
</section>
<!-- End Content Header -->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            @include('partials.message')
            <form class="form" action="{{ url('report/teacher/single/datewise') }}" name="myForm" id="date_form" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-2">
                    <div class="form-group">
                         <label for="">Date</label>
                         <input type="text" id="datepicker2" autocomplete="off" name="reporting_date" id="reporting_date" class="form-control input-sm" @if(isset($reporting_date)) value="{{ $reporting_date }}"@endif required onchange='if(this.value != "") { this.form.submit(); }'/>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                         <br>
                         <input type="submit"  class="btn btn-success btn-sm" value="Submit" />
                    </div>
                </div>
            </form>    
        </div>
        @if(isset($reporting_date))
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    PRESENT TEACHERS ON {{ date('F d, Y', strtotime($reporting_date)) }} ; Present: {{ count($attendances)}} ; Absent: {{ count($teachers)-count($attendances)}}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table-bordered " id="" width="100%">
                            <thead>
                                <tr>
                                    <th height="25">Srl</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Academic</th>
                                    <th>In Time</th>
                                    <th>Out Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $srl = 0; @endphp
                                @foreach($teachers as $key => $data)
                                    @php $flag = 0; @endphp
                                    @foreach($attendances as $key => $attData)
                                        @if($data->id == $attData->teacher_id)
                                          <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    <strong>{{ $data->name }}</strong>
                                                    <br>
                                                    {{ $data->designation}}
                                                </td>
                                                <td>
                                               
                                                    {{ $data->mobile_no }}
                                                   
                                                </td>
                                                <td>
                                                    <span class="text-red">Class: {{ $data->class }}</span><br>
                                                    <span class="text-blue">Section: {{ $data->section }}</span>
                                                </td>
                                                <td>{{ date('g:i a',strtotime($attData->in_time)) }}</td>
                                                <td>@if(isset($attData->out_time)) {{ date('g:i a',strtotime($attData->out_time)) }} @endif</td>
                                                
                                            </tr>
                                        @endif
                                    @endforeach
                                   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- End Main Content -->
@endsection