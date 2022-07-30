@extends('voter-information.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<h3 align="center">Voter Details</h3>
                </div>
                <div class="panel-body" id="printAble">
                    <div class="row" style="padding-left: 10px;">
                       <!--  <center> -->
                            <img class="img-thumbnail" style="width:150px;height:150px;" src="../../{{$voters->picture }}">
                        <!-- </center> -->
                    </div>
                    <div class="row">
                        <br>
                        <!-- <div class="col-md-3"></div> -->
                        <div class="col-md-12">
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Voter ID</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->voter_id }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Flat No</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->flat_no }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">First Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->first_name }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Middle Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->mid_name }}</td>
                                </tr>
                                 <tr>
                                    <th style="width: 30%; text-align: left;">Last Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->last_name }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Mobile No</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->mobile_no }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Relationship</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->relationship }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">National ID</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->n_id }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Date of Birth</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->dob }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Address</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->address }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Mobile No</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->phone }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Email Address</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $voters->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    
                </div>
                <div class="panel-footer text-left">
                           <button type="submit" class="btn btn-primary" onclick="printMe('printAble')">
                                    Print
                                </button>
                               <a href="{{ URL::previous() }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Back</a>    
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
