@extends('owner-information.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<h3 align="center">Employee Details</h3>
                </div>
                <div class="panel-body" id="printAble">
                    <div class="row" style="padding-left: 10px;">
                       <!--  <center> -->
                            <img class="img-thumbnail" style="width:150px;height:150px;" src="../../{{$employee->picture }}">
                        <!-- </center> -->
                    </div>
                    <div class="row">
                        <br>
                        <!-- <div class="col-md-3"></div> -->
                        <div class="col-md-12">
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <th style="width: 30%; text-align: left;">First Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->firstname }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Mid Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->middlename }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Last Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->lastname }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Nick Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->nickname }}</td>
                                </tr>
                                 <tr>
                                    <th style="width: 30%; text-align: left;">Father Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->fathername }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Mother Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->mothername }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Address</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->address }}</td>
                                </tr>
                               <!-- some codes are removed from here to show_old.blade.php please dont delete that.. it is very important -->
                                <tr>
                                    <th style="width: 30%; text-align: left;">Zip</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->zip }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Age</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->age }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Birthday</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->birthdate }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Hired Date</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->date_hired }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Reference Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->refname }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Reference Contact</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->refcontact }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Verification</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->verification }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">National ID</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->nid }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Emergency Contact Name</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->emergencyname }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30%; text-align: left;">Emergency Contact Numebr</th>
                                    <td style="width: 10%;"></td>
                                    <td>{{ $employee->emergencycontact }}</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- <div class="col-md-2"></div> -->
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
