@extends('layouts.template')
       
@section('template')

<section class="content-header">
    <h1>
        Metric Id Report
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Report</li>
        <li class="active">Metric Id</li>
    </ol>
</section>



<section class="content">

    @if(isset($metricIdLists))
    <div class="panel panel-default">
        <div class="panel-body">
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
                        <br>
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th>Metric ID</th>
                        <th>Type</th>
                    </tr>
                </thead>

                <tbody id="myTable">
                    @foreach($metricIdLists as $data)
                    <tr>
                        <td>{{$data->metric_id}}</td>
                        <td>{{$data->type}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

</section>

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

