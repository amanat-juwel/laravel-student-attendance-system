@extends('layouts.template')

@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>USER</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">User</li>
    </ol>
</section>
<!-- End Content Header -->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Add new user</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="box-body">
                    <form class="form" action="{{ url('users/store') }}" method="post" onsubmit="return myFunction()">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                            <input type="text" autocomplete="OFF"  name="name" class="form-control" value="" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" autocomplete="OFF"  name="email" class="form-control" value="" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="password" autocomplete="OFF" name="password" id="password" class="form-control"  required />
                            </div>
                            @if($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <!-- <input type="password" name="confirm_password" id="confirm_password" class="form-control" autocomplete="OFF" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/> -->
                            <input type="password" autocomplete="OFF"  name="confirm_password" id="confirm_password" class="form-control" required />
                            @if($errors->has('confirm_password'))
                                <span class="text-danger">{{ $errors->first('confirm_password')}}</span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Create"/>
                        </div>
                    </form>
                     
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-primary">
              <div class="panel-heading">List Users</div>
              <div class="panel-body">
                  <div class="table-responsive">
                        <table class="table-bordered" id="" width="100%">
                            <thead>
                                <tr>
                                    <th height="25">Srl</th>
                                    <th style="text-align:left">Name</th>
                                    <th style="text-align:left">Email</th>
                                    <th style="text-align:left">Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($users))
                                    @foreach($users as $key => $user)
                                    <tr>
                                        <td height="25">{{ ++$key }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <div style="display:flex;">
                                                
                                                <form action="{{ url('/users/edit') }}" method="post">
                                                    {{ method_field('post') }}
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{$user->id}}">
                                                    <button title="Edit Profile" class="btn btn-warning btn-xs">
                                                    <i class="fa fa-edit" aria-hidden="true"></i></button>
                                                </form>
                                                &nbsp;&nbsp;&nbsp;
                                                @if($user->id != '1')
                                                <form action="{{ url('/users/'.$user->id) }}" method="post">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button class="delete btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are you sure you want to delete this user?');">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>

                        </table>
                        @if(Session::has('success'))
                        <div class="alert alert-success" id="success">
                            {{Session::get('success')}}
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                        @endif
                        @if(Session::has('update'))
                        <div class="alert alert-warning" id="update">
                            {{Session::get('update')}}
                            @php
                            Session::forget('update');
                            @endphp
                        </div>
                        @endif
                        @if(Session::has('delete'))
                        <div class="alert alert-danger" id="delete">
                            {{Session::get('delete')}}
                            @php
                            Session::forget('delete');
                            @endphp
                        </div>
                        @endif
                    </div>
              </div>
            </div>  
        </div>
    </div>
</section>
<!-- End Main Content -->
<script type="text/javascript">
function myFunction() {
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

        if(password!=confirm_password){
            $('#password').val('');
            $('#confirm_password').val('');
            alert("Password does not match");
            event.preventDefault();
        }
}
</script>
@endsection