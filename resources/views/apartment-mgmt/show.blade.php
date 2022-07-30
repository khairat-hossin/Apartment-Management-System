@extends('apartment-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<h3 align="center">Apartment Details</h3>
                </div>
                <div class="panel-body" id="printAble">
                    <div class="row">
                        <!-- <div class="col-md-3"></div> -->
                        <div class="col-md-12">
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Flat No</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $apartments->flat_no }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Flat Size</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $apartments->flat_size }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Car Parking</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $apartments->car_park }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Note</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $apartments->note }}</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- <div class="col-md-2"></div> -->
                    </div>
                    
                </div>
                <div class="panel-footer text-left">
                    <!-- <center> -->
                           <button type="submit" class="btn btn-primary" onclick="printMe('printAble')">
                                    Print
                                </button>
                            <a href="{{ URL::previous() }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Back</a>
                    <!-- </center>  -->     
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css"> 

            table.data {width:100% !important;border:1px solid #000 !important;}
            table.data td{border:1px solid #000 !important;}
            @media  print 
            {
                table.data {width:100% !important;border:1px solid #000 !important;}
                table.data td{border:1px solid #000 !important;}
            }
    </style>

<script> 
  function printMe(divName)
  { 
    var title = "<center class=\"text-center\">"+
        "<h3 style='margin:0;padding:5px 0'>Green Peace Apartment Owners Association</h3>"+
        "<small>41, Chamelibagh, Shantinagr, Dhaka-1227</small></center>";

    var myWindow=window.open('','','width=800,height=800');
    myWindow.document.write(document.getElementById(divName).innerHTML); 
    myWindow.document.close();
    myWindow.focus();
    myWindow.print();
    myWindow.close();
  }

</script>
@endsection
