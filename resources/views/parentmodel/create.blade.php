@extends('layouts.template')

@section('template')
<!-- Content Header -->
<section class="content-header">
    <div class="row">
        <div class="col-md-6">
        <h2> <i class="fa fa-users"></i>  PARENT</h2>
        </div>
        <div class="col-md-6">
        <a href="{{route('parentmodel.index')}}" class="btn btn-success-outline btn-success pull-right"> <i class="fa fa-user"></i> All Parent</a>
        </div>
    </div>
   
   
</section>
<!-- End Content Header -->
<!-- Main content -->
<div class="row">
    <div class="col-md-6">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form" action="{{ route('parentmodel.store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Father name *</label>
                                    <input autocomplete="OFF" type="text" name="father" placeholder="Father name" required="" class="form-control input-sm" value="{{ old('father') }}"/>
                                    @if($errors->has('father'))
                                        <span class="text-danger">{{ $errors->first('father')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Mother name *</label>
                                    <input autocomplete="OFF" type="text" name="mother" placeholder="Mother name" required="" class="form-control input-sm" value="{{ old('mother') }}"/>
                                    @if($errors->has('mother'))
                                        <span class="text-danger">{{ $errors->first('mother')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Address *</label>
                                    <textarea name="address" placeholder="Enter address" id="input" class="form-control" rows="3" required="required" value="{{ old('address') }}">{{ old('address') }}</textarea>
                                    @if($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile * [<span class="text-danger">Number must start with 88; Total 13 Digits; Ex: 8801716998877</span>]</label>
                                    <input autocomplete="OFF" type="text" name="mobile_no" placeholder="" required="" class="form-control input-sm" pattern="^(?:\+?88)?01[15-9]\d{8}$" title="Number must start with 88; Total 13 Digits; Ex: 8801716998877" value="{{ old('mobile_no') }}"/>
                                    @if($errors->has('mobile_no'))
                                        <span class="text-danger">{{ $errors->first('mobile_no')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input autocomplete="OFF" type="email" name="email" placeholder="Email" class="form-control input-sm" value="{{ old('email') }}"/>
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Occupation *</label>
                                    <input autocomplete="OFF" type="occupation" name="occupation" placeholder="occupation" required="" class="form-control input-sm" value="{{ old('occupation') }}"/>
                                    @if($errors->has('occupation'))
                                        <span class="text-danger">{{ $errors->first('occupation')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Save"/>
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