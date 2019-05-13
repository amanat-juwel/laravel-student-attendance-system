@extends('layouts.template')

@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>MEMBER</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-dashboard"></i>Dashboard</a>
        </li>
        <li class="active">Member</li>
        <li class="active">Edit</li>
    </ol>
</section>
<!-- End Content Header -->
<!-- Main content -->
<div class="row">
    <div class="col-md-8">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form" action="{{ url('/members/'.$member->id) }}" method="post">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input autocomplete="OFF" type="text" name="name" placeholder="Name" required="" class="form-control input-sm" value="{{ $member->name }}"/>
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Father</label>
                                    <input autocomplete="OFF" type="text" name="father" placeholder=""  class="form-control input-sm" value="{{ $member->father }}"/>
                                    @if($errors->has('father'))
                                        <span class="text-danger">{{ $errors->first('father')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Mother</label>
                                    <input autocomplete="OFF" type="text" name="mother" placeholder=""  class="form-control input-sm" value="{{ $member->mother }}"/>
                                    @if($errors->has('mother'))
                                        <span class="text-danger">{{ $errors->first('mother')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input autocomplete="OFF" type="text" name="address" placeholder=""  class="form-control input-sm" value="{{ $member->address }}"/>
                                    @if($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input autocomplete="OFF" type="text" name="mobile_no" placeholder="" required="" class="form-control input-sm" value="{{ $member->mobile_no }}"/>
                                    @if($errors->has('mobile_no'))
                                        <span class="text-danger">{{ $errors->first('mobile_no')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Position</label>
                                    <input autocomplete="OFF" type="text" name="position" placeholder=""  class="form-control input-sm" value="{{ $member->position }}"/>
                                    @if($errors->has('position'))
                                        <span class="text-danger">{{ $errors->first('position')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-warning" value="Update"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Content -->
    </div>
</div>
@endsection
