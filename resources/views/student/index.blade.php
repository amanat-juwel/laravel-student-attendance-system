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
                    <a class="btn btn-default btn-sm" href="{{url('/students/create')}}"><i class="fa fa-plus"></i> Enroll New</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <!--<input class="form-control" id="myInput" type="text" placeholder="Search..">-->
                        <!--<br>-->
                        <table class="table-bordered DataTable" id="" width="100%">
                            <thead>
                                <tr>
                                    <th height="25">Srl</th>
                                    <th>Metric Id.</th>
                                    <th>Name</th>
                                    <th class="text-center">Parent</th>
                                    <th>DOB (Y-m-d)</th>
                                    <th>Image</th>
                                    <th>Academic</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="">
                                @foreach($students as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data->metric_id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>
                                            <span>Father : {{ $data->father}} </span><br>
                                            <span>Mother : {{ $data->mother}} </span><br>
                                            <span>Mobile no : {{ $data->mobile_no}} </span>
                                        </td>
                                        <td>{{ $data->dob}}</td>
                                        <td>
                                            <img src="{{ asset($data->image) }}" height="50px" width="50px"/>
                                        </td>
                                        <td>
                                            <span class="text-red">Class: {{ $data->class }}</span><br>
                                            <span class="text-blue">Section: {{ $data->section }}</span><br>
                                            <span class="text-red">Roll: {{ $data->roll }}</span><br>
                                            <span class="text-blue">Van: @if(isset($data->van)){{ $data->van }} @else --- @endif</span>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <a class="btn btn-warning btn-xs" href="{{ url('/students/'.$data->id.'/edit') }}">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </a>
                                                <form action="{{ url('/students/'.$data->id) }}" method="post">
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