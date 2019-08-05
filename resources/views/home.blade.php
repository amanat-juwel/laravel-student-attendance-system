@extends('layouts.template')

@section('template')

<section class="content">
    <div class="row">
    	<a href="{{url('students')}}">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-mortar-board"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Student</span>
              <span class="info-box-number">{{$count_student}}</span>
            </div>
          </div>
        </div>
        </a>
        
        <a href="{{url('teachers')}}">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-blue"><i class="fa fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Teacher</span>
                <span class="info-box-number">{{$count_teacher}}</span></span>
              </div>
            </div>
          </div>
        </a>
        <a href="{{url('staffs')}}">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-blue"><i class="fa fa-male"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Staff</span>
                <span class="info-box-number">{{$count_staff}}</span></span>
              </div>
            </div>
          </div>
        </a>
    		<a href="{{url('report/student/present')}}">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-mortar-board"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Present Student </span>
                  <span class="info-box-number">{{$todays_student_att}}</span></span>
                </div>
              </div>
            </div>
        	</a>
        <a href="{{url('report/teacher/present')}}">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Present Teacher</span>
              <span class="info-box-number">{{$todays_teacher_att}}</span></span>
            </div>
          </div>
        </div>
        </a>
        <a href="{{url('report/staff/attendance/present')}}">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-male"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Present Staff</span>
              <span class="info-box-number">{{$todays_staff_att}}</span></span>
            </div>
          </div>
        </div>
        </a>
        <a href="{{url('report/student/absent')}}">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-mortar-board"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Absent Student </span>
                  <span class="info-box-number">{{$count_student-$todays_student_att}}</span></span>
                </div>
              </div>
            </div>
          </a>
        <a href="{{url('report/teacher/absent')}}">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Absent Teacher </span>
                  <span class="info-box-number">{{$count_teacher-$todays_teacher_att}}</span></span>
                </div>
              </div>
            </div>
          </a>

          <a href="{{url('report/staff/attendance/absent')}}">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-male"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Absent Staff </span>
                  <span class="info-box-number">{{$count_staff-$todays_staff_att}}</span></span>
                </div>
              </div>
            </div>
          </a>

          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-orange"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">SMS Balance</span>
                  <span class="info-box-number">৳ {{number_format($balance,2)}}</span></span>
                </div>
              </div>
            </div>
      
    
    </div>





</section>

@endsection