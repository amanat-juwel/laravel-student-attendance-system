
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendance Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style type="text/css" media="print">
    @page { 
    size: auto;
    margin: 6mm 0 10mm 0;
    }
</style>

<style type="text/css">
  h2,p{
    margin-bottom: 0px;
  }
  .border-top{
    border-top: 1px solid black;
  }
  table.table-bordered{
    border:1px solid black;
    margin-top:20px;
  }
  table.table-bordered > thead > tr > th{
    border:1px solid black;
    padding: 2px;
  }
  table.table-bordered > tbody > tr > td{
    border:1px solid black;
    padding: 2px;
  }

</style>
<body onload="window.print();">

<!-- Main content -->
<section class="content" >
    <div class="">
        <div class="">
            <div class="row" style="margin-right: 3%; margin-left: 3%;margin-top: 3%">
                <center>
                    <h2>Attendance Report</h2>
                    <p>{{$staff->name}}</p>
                    <p><b>From: </b>{{date('M j,Y', strtotime($start_date))}}, <b>To: </b>{{date('M j,Y', strtotime($end_date))}}</p>
                </center>

                @if(isset($start_date))
                <div class="col-md-12">
                    <div class=""> 
                       <div class=""> 
                            <table class="table-bordered" width="100%">
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
                                        <td>{{date('h:i a', strtotime($data->in_time))}}</td>
                                        <td>{{date('h:i a', strtotime($data->out_time))}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>    
                </div>
                @endif
            </div>
        </div>
    </div>

</section>
<!-- End Main Content -->
</body>
</html>