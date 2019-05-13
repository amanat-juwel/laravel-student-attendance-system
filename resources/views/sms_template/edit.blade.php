@extends('layouts.template')

@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>SMS TEMPLATE</h1>
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
        <li class="active">Sms Template</li>
        <li class="active">Edit</li>
    </ol>
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
                            <form class="form" action="{{ url('/sms_templates/'.$sms_template->id) }}" method="post">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Subject</label>
                                    <input autocomplete="OFF" type="text" name="subject" placeholder="Subject" required="" class="form-control input-sm" value="{{ $sms_template->subject }}"/>
                                    @if($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <input autocomplete="OFF" type="text" name="message" placeholder="Message" required="" class="form-control input-sm" value="{{ $sms_template->message }}"/>
                                    @if($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message')}}</span>
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
