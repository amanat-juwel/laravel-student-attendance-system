@extends('layouts.template') 
@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>STAFF</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-dashboard"></i>Dashboard</a>
        </li>
        <li class="active">Staff</li>
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
                    TODAYS PRESENT STAFF
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table-bordered datatable" id="" width="100%">
                            <thead>
                                <tr>
                                    <th height="25">Srl</th>
                                  
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>In Time</th>
                                    <th>Out Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $srl = 0; @endphp
                                @foreach($staffs as $key => $data)
                                    @php $flag = 0; @endphp
                                    @foreach($attendances as $key => $attData)
                                        @if($data->id == $attData->staff_id)
                                            <tr>
                                               <td>{{ ++$srl }}</td>
                                                <td>
                                                    <strong>{{ $data->name }}</strong>
                                                    <br>
                                                    {{ $data->position}}
                                                </td>
                                                <td>{{ $data->mobile_no}}</td>
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