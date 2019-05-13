@extends('layouts.template')
       
@section('template')

<section class="content-header">
    <h1>
        Student's Attendance Report
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Attendance Report</li>
        <li class="active">Student's</li>
    </ol>
</section>

<section class="content">
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form" action="{{ url('report/class-section') }}" name="myForm" id="date_form" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">Class</label>
                        <div class="col-sm-12">
                        <select name="class_id" class="form-control select2" required>
                            <option value="">--- Choose ---</option>
                                @foreach($class_all as $data)
                                <option value="{{ $data->id }}" @if(isset($class_id)) @if($class_id == $data->id) selected @endif @endif >{{ $data->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>    
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">Section</label>
                        <div class="col-sm-12">
                        <select name="section_id" class="form-control select2" required>
                            <option value="">--- Choose ---</option>
                                @foreach($section_all as $data)
                                <option value="{{ $data->id }}" @if(isset($section_id)) @if($section_id == $data->id) selected @endif @endif >{{ $data->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>    
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="text" id="datepicker" autocomplete="off" name="date" id="date" class="form-control input-sm" @if(isset($date)) value="{{ $date }}"@endif  required onchange='if(this.value != "") { this.form.submit(); }'/>
                    </div>
                </div>    
                <div class="col-md-2">
                    <div class="form-group">
                         <br>
                         <input type="submit"  class="btn btn-success btn-sm" value="Submit" />
                    </div>
                </div>
            </form>    
                 <div class="col-md-2">
                    <div class="form-group">
                    <br>
                    @if(isset($date))
                    <br>
                    <a class="btn btn-warning btn-xs pull-right" href="{{ url('/report/class-section/print/'.$class_id.'/'.$section_id.'/'.$date) }}" target="_blank">Print/Download as PDF</a>     
                    @endif
                    </div>
                </div> 
      
        </div>
    </div>
    
    @if(isset($date))
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped" width="100%">
                <thead>
                    <tr>
                        <th colspan="3" class="text-center">DATE: [{{date('M j,Y', strtotime($date))}}]</th>
                    </tr>
                    <tr>
                        <th>Student</th>
                        <th>In</th>
                        <th>Out</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($attendances as $data)
                    <tr>
                        <td>{{$data->student_name}}</td>
                        <td>{{$data->in_time}}</td>
                        <td>{{$data->out_time}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
</section>

<script type="text/javascript">

$(document).ready(function () {
    $("#start_date").change(function () {
       $('#end_date').val('');
    });
});  
  
</script>  
@endsection

