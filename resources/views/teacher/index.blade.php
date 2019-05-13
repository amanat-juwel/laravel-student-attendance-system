@extends('layouts.template') 
@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>Teacher</h1>
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
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
                    <a class="btn btn-default btn-sm" href="{{url('/teachers/create')}}"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <!--<input class="form-control" id="myInput" type="text" placeholder="Search..">-->
                        <!--<br>-->
                        <table class="table-bordered DataTable" id="" width="100%">
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach($teachers as $key => $data)
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
                                        <td>
                                            <div class="flex">
                                                <a class="btn btn-warning btn-xs" href="{{ url('/teachers/'.$data->id.'/edit') }}">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </a>
                                                <form action="{{ url('/teachers/'.$data->id) }}" method="post">
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

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection