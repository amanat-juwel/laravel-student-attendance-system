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
                    <a class="btn btn-default btn-sm" href="{{url('/staffs/create')}}"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table-bordered datatable" id="" width="100%">
                            <thead>
                                <tr>
                                    <th height="25">Srl</th>
                                    <th>Metric Id</th>
                                    <th>Name</th>
                                    <th>Father</th>
                                    <th>Mother</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($staffs as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data->metric_id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->father }}</td>
                                        <td>{{ $data->mother }}</td>
                                        <td>{{ $data->address}}</td>
                                        <td>{{ $data->mobile_no}}</td>
                                        <td>{{ $data->position}}</td>
                                        <td>
                                            <div class="flex">
                                                <a class="btn btn-warning btn-xs" href="{{ url('/staffs/'.$data->id.'/edit') }}">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </a>
                                                <form action="{{ url('/staffs/'.$data->id) }}" method="post">
                                                    @method('DELETE') {{ csrf_field() }}
                                                    <button class="btn btn-danger btn-xs"  onclick="return confirm('Are you sure you want to delete this item?');"  >
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
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