@extends('layouts.template')
       
@section('template')

<section class="content-header">
    <h1>
        Staff's Attendance Report
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Attendance Report</li>
        <li class="active">Staff's</li>
    </ol>
</section>



<section class="content">
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form" action="{{ url('report/staff/single') }}" name="myForm" id="date_form" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">Staff</label>
                        <div class="col-sm-12">
                        <select name="staff_id" class="form-control select2" required>
                            <option value="">--- Choose ---</option>
                                @foreach($staffs as $data)
                                <option value="{{ $data->id }}" @if(isset($staff)) @if($staff->id == $data->id) selected @endif @endif >{{ $data->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>    
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">From</label>
                        <input type="text" id="datepicker" autocomplete="off" name="start_date" id="start_date" class="form-control input-sm" @if(isset($start_date)) value="{{ $start_date }}"@endif  required/>
                    </div>
                </div>    
                <div class="col-md-2">
                    <div class="form-group">
                         <label for="">To</label>
                         <input type="text" id="datepicker2" autocomplete="off" name="end_date" id="end_date" class="form-control input-sm" @if(isset($end_date)) value="{{ $end_date }}"@endif required onchange='if(this.value != "") { this.form.submit(); }'/>
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
                    @if(isset($start_date))
                    <br>
                    <a class="btn btn-warning btn-xs pull-right" href="{{ url('/report/staff/single/print/'.$staff->id.'/'.$start_date.'/'.$end_date) }}" target="_blank">Print/Download as PDF</a>     
                    @endif
                    </div>
                </div> 
      
        </div>
    </div>
    
    @if(isset($start_date))
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>In</th>
                        <th>Out</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($attendances as $data)
                    <tr>
                        <td>{{date('M j,Y', strtotime($data->date))}}</td>
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

