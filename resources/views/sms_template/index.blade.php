@extends('layouts.template') 
@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>SMS TEMPLATE</h1>
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
        <li class="active">Sms Template</li>
    </ol>
</section>
<!-- End Content Header -->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            @include('partials.message')
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a class="btn btn-default btn-sm" href="{{url('/sms_templates/create')}}"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table-bordered datatable" id="" width="100%">
                            <thead>
                                <tr>
                                    <th height="25">Srl</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sms_templates as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data->subject }}</td>
                                        <td>{{ $data->message }}</td>
                                        <td>
                                            <div class="flex">
                                                <a class="btn btn-warning btn-xs" href="{{ url('/sms_templates/'.$data->id.'/edit') }}">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </a>
                                                <form action="{{ url('/sms_templates/'.$data->id) }}" method="post">
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