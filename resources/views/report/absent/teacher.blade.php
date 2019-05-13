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
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    TODAYS ABSENT TEACHER
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table-bordered datatable" id="" width="100%">
                            <thead>
                                <tr>
                                    <th height="25">Srl</th>
                                    <th>Metric Id</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Contact</th>
                                    <th>Image</th>
                                    <th>Other Contact</th>
                                    <th>Academic</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                @php $srl = 0; @endphp
                                @foreach($teachers as $key => $data)
                                    @php $flag = 0; @endphp
                                    @foreach($attendances as $key => $attData)
                                        @if($data->id == $attData->teacher_id)
                                            @php $flag = 1; break; @endphp
                                        @endif
                                    @endforeach
                                    @if($flag != 1)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data->metric_id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->designation}}</td>
                                        <td>
                                            Email: {{ $data->email }}<br>
                                            Mobile: {{ $data->mobile_no }}<br>
                                            Address: {{ $data->address }}
                                        </td>
                                        <td>
                                            <img src="{{ asset($data->image) }}" height="50px" width="50px"/>
                                        </td>
                                        <td>
                                            {{ $data->other_contact_name }}<br>
                                            Relation: {{ $data->other_contact_type }}<br>
                                            Contact: {{ $data->other_contact_mobile_no }}
                                        </td>
                                        <td>
                                            <span class="text-red">Class: {{ $data->class }}</span><br>
                                            <span class="text-blue">Section: {{ $data->section }}</span>
                                        </td>
                                    </tr>
                                    @endif
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