@extends('layouts.template') 
@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>STUDENT</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-dashboard"></i>Dashboard</a>
        </li>
        <li class="active">Student</li>
    </ol>
</section>
<!-- End Content Header -->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            @include('partials.message')
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    TODAYS PRESENT STUDENT
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table-bordered datatable" id="" width="100%">
                            <thead>
                                <tr>
                                    <th height="25">Srl</th>
                                    <th>Metric Id.</th>
                                    <th>Name</th>
                                    <th class="text-center">Parent</th>
                                    <th>Academic</th>
                                    <th>In Time</th>
                                    <th>Out Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $srl = 0; @endphp
                                @foreach($students as $key => $data)
                                    @php $flag = 0; @endphp
                                    @foreach($attendances as $key => $attData)
                                        @if($data->id == $attData->student_id)
                                          <tr>
                                                <td>{{ ++$srl }}</td>
                                                <td>{{ $data->metric_id }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>
                                                    <span>Father : {{ $data->father}} </span><br>
                                                    <span>Mother : {{ $data->mother}} </span><br>
                                                    <span>Mobile no : {{ $data->mobile_no}} </span>
                                                </td>

                                                <td>
                                                    <span class="text-red">Class: {{ $data->class }}</span><br>
                                                    <span class="text-blue">Section: {{ $data->section }}</span><br>
                                                    <span class="text-red">Roll: {{ $data->roll }}</span><br>
                                                
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
    </div>
</section>
<!-- End Main Content -->
@endsection