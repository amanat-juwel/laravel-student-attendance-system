@extends('layouts.template')

@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>MEMBER - SMS</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Member</li>
        <li class="active">Sms</li>
    </ol>
</section>
<!-- End Content Header -->
<!-- Main content -->
<form action="{{url('send/sms/members')}}" method="post" id="smsForm">
{{csrf_field()}}
<div class="row">
    <div class="col-sm-4">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="radio">
                      <label><input type="radio" id="" value="to_all" name="optradio" checked>To All Members</label>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-sm-8">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="">SMS Template</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i style="color: black !important;" class="fa fa-comments-o"></i></span>
                            <select id="sms_template" name="sms_template" class="form-control select2" >
                                <option value="">None</option>
                                @foreach($sms_templates as $data)
                                <option value="{{$data->message}}">{{$data->subject}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="">Text </label>
                        <textarea rows="5" name="text" class="form-control" id="text" placeholder="" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" id="" value="Send"/>
                    </div>
                    <div id="success"></div>
                       
                </div>
            </div>
        </section>
    </div>
</div>
</form>
<style type="text/css">
.cls_sec{
    display: none;
}
.van{
    display: none;
}
label{
    font-size: 20px;
    color: green;
}
.sub_label{
    font-size: 14px !important;
    color: red !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice{
    color: black;
}

</style>
<script>
$(document).ready(function () {    
    
    // var fruits = 'apple,orange,pear,banana,raspberry,peach';
    // var ar = fruits.split(','); // split string on comma space
    // console.log( ar );

    $("#submit").click(function() {  
        var mobile_no = ""+$('#mobile_no').val()+""; 
        var text = $('#text').val(); 
        var re = /\s*,\s*/;
        var numberList = mobile_no.split(re);
        //console.log( numberList );

        var data = JSON.stringify({  "from": "InfoSMS",  "to": numberList,  "text": text });
        var xhr = new XMLHttpRequest();
        // xhr.withCredentials = true;
        xhr.addEventListener("readystatechange", function () {  
            if (this.readyState === this.DONE) {    
                console.log(this.responseText);  
            } 
        });

        xhr.open("POST", "http://107.20.199.106/restapi/sms/1/text/single"); 
        xhr.setRequestHeader("authorization", "Basic c29oYWlsQHYtbGlua25ldHdvcmsuY29tOnBhc3N3b3JkMjAxOA=="); 
        xhr.setRequestHeader("content-type", "application/json"); 
        xhr.setRequestHeader("accept", "application/json");
        xhr.send(data);

        $('#mobile_no').val('');
        $('#text').val('');
        alert('SMS Sent Successfully');


    });

//$(".cls_sec").hide();

$('input[type=radio][name=optradio]').on('change', function() {
    if (this.value == 'to_all') {
        
        $(".cls_sec").hide();
        $(".van").hide();
    }
    else if (this.value == 'class_section') {
     
        $(".cls_sec").show();
        $(".van").hide();
    }
    else if (this.value == 'van_student') {
        
        $(".cls_sec").hide();
        $(".van").show();
    }
});

$('#sms_template').on('change', function() {
    $('#text').val(this.value);
});



    $("#submitForm").click(function() {  
        



    });
});
</script>

@endsection