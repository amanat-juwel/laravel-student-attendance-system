<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <link rel="shortcut icon" type="image/png" href='{{ url("") }}' />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/components-rounded.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/AdminLTE.min.css') }}">
    <script src="{{ asset('public/js/jquery.js') }}"></script>
    @yield('style')

</head>

<body class="hold-transition skin-blue sidebar-mini ">
    <div class="wrapper">
        <!-- Header -->
        <header class="main-header">
            <!-- Logo -->            
            <a href="{{ url('/') }}" class="logo hidden-xs">
            <!-- mini logo for sidebar mini 50x50 pixels -->
           <!--  <span class="logo-mini"><img src='' height="25" width="25"></span>
            -->
            <span class="logo-lg">SCS</span>
            </a>
            <nav class="navbar">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        
                        @if (Auth::guest())
                            <li class="dropdown user user-menu">
                                <a href="{{ url('/login') }}">Login</a>
                            </li>
                        @else
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span class="hidden-xs">Hello, {{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('public/image/boss.png')}}" class="img-circle" alt="User Image">
                                    <p>
                                        You are logged in as                                        
                                        <small>Administrator</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="pull-right">
                                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER -->
        <!-- SIDEBAR -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Student Setup</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right text-green"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('/students') }}"><i class="fa fa-users"></i> <span>Student</span></a></li> 
                            <li><a href="{{ url('/parentmodel') }}"><i class="fa fa-user-o"></i> <span>Parent</span></a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>HR Setup</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right text-green"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('/teachers') }}"><i class="fa fa-users"></i> <span>Teacher</span></a></li> 
                            <li><a href="{{ url('/members') }}"><i class="fa fa-users"></i> <span>Member</span></a></li>  
                            <li><a href="{{ url('/staffs') }}"><i class="fa fa-users"></i> <span>Staff</span></a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-building"></i>
                            <span>Class-Section Setup</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right text-green"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('/classmodel') }}"><i class="fa fa-building-o"></i> <span>Class</span></a></li>
                            <li><a href="{{ url('/section') }}"><i class="fa fa-clone"></i> <span>Section</span></a></li> 
                        </ul>
                    </li>
                    <li><a href="{{ url('/van') }}"><i class="fa fa-bus"></i> <span>Van</span></a></li> 
                           
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-comments"></i>
                            <span>SMS</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right text-green"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('/send/sms/selected') }}"><i class="fa fa-location-arrow"></i> Selected</a></li>
                            <li><a href="{{ url('/send/sms/students') }}"><i class="fa fa-location-arrow"></i> Student</a></li>
                            <li><a href="{{ url('/send/sms/teachers') }}"><i class="fa fa-location-arrow"></i> Teacher</a></li>
                            <li><a href="{{ url('/send/sms/members') }}"><i class="fa fa-location-arrow"></i> Member</a></li>
                            <li><a href="{{ url('/send/sms/staffs') }}"><i class="fa fa-location-arrow"></i> Staff</a></li>
                            <li><a href="{{ url('/send/sms/general') }}"><i class="fa fa-location-arrow"></i> General</a></li>
                            <li><a href="{{ url('/sms_templates') }}"><i class="fa fa-envelope"></i> <span>Sms Template</span></a></li>
                        </ul>
                    </li>
                    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>Report</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right text-green"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-file"></i>
                                    <span>Attendance Single</span>
                                    <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right text-green"></i>
                                </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('/report/student/single') }}"><i class="fa fa-location-arrow"></i> Student</a></li>
                                    <li><a href="{{ url('/report/student/absent') }}"><i class="fa fa-location-arrow"></i> Student Absent Today</a></li>
                                    <li><a href="{{ url('/report/class-section') }}"><i class="fa fa-location-arrow"></i> Class-Section</a></li>
                                    <li><a href="{{ url('/report/teacher/single') }}"><i class="fa fa-location-arrow"></i> Teacher</a></li>
                                    <li><a href="{{ url('/report/staff/single') }}"><i class="fa fa-location-arrow"></i> Staff</a></li>

                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-file"></i>
                                    <span>Attendance Datewise</span>
                                    <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right text-green"></i>
                                </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('/report/student/single/datewise') }}"><i class="fa fa-location-arrow"></i> Student</a></li>
                                    <li><a href="{{ url('/report/teacher/single/datewise') }}"><i class="fa fa-location-arrow"></i> Teacher</a></li>
                                    <li><a href="{{ url('/report/staff/single/datewise') }}"><i class="fa fa-location-arrow"></i> Staff</a></li>

                                </ul>
                            </li>
                            <li><a target="_blank" href="http://app.mimsms.com/sent"><i class="fa fa-clock-o"></i> SMS Logs</a></li>
                            <li><a href="{{ url('/report/metric_id/list') }}"><i class="fa fa-list"></i> Metric ID List</a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="{{ url('/users/manage-users') }}">
                            <i class="fa fa-users"></i> <span>Manage Users</span>
                        </a>
                    </li>  
              </ul>
            </section>
        </aside>
        <!-- END SIDEBAR -->
        <!-- CONTENT SECTION -->
        <div class="content-wrapper">
            <!-- Start Main Content -->
                @yield('template')
            <!-- End Main Content -->
        </div>
        <!-- / END CONTENT -->
        <!-- START FOOTER -->
        <footer class="main-footer hidden-xs" id="noPrint">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        © Copright {{date('Y')}} | 
                    </div>
                    <div class="col-md-4">
                        School Management System <small>version 1.0</small>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        
        
        <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/js/style.js') }}"></script>
        <script src="{{ asset('public/js/custom.js') }}"></script>
        <script src="{{ asset('public/js/select2.full.min.js') }}"></script>
        <!-- <script src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script> -->
        
        <script>
        function Initialize() {
            $('.select2').select2()
            } 
        </script>
        
        <script>
          $(function () {
            $('.select2').select2()
          })

          //Date picker
            $('#datepicker').datepicker({
              
              format: 'yyyy-mm-dd',
              autoclose: 'true',
            })
            $('#datepicker2').datepicker({
              
              format: 'yyyy-mm-dd',
              autoclose: 'true',
            })
            $(".date-picker").change(function() { 
                setTimeout(function() {
                    $(".date-picker").datepicker('hide'); 
                    $(".date-picker").blur();
                }, 50);
            });  
            $(document).ready( function () {
                $('.DataTable').DataTable();
            } );
            $(document).ready( function () {
                $('.datatable').DataTable();
            } );
        </script>

        @yield('script')

</body>

</html>