<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Print Bill</title>
        <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>
        <style type="text/css"> 

    		table.data {width:100% !important;border:1px solid #000 !important;}
    		table.data td{border:1px solid #000 !important;}
        	@media print 
        	{
        		table.data {width:100% !important;border:1px solid #000 !important;}
        		table.data td{border:1px solid #000 !important;}
			}
        </style>
    </head>
    <body> 
        <div class="container">
	        <div class="row">  
	        	<center><button class="btn btn-primary"onclick="printMe('printAble')">Print</button></center>
            	<div class="col-md-6" id="printAble"> 
            		<div class="col-md-12">
		                <center class="text-center">
	                        <h2>Green Peace Apartment Owners Association</h2>
		                    <p>41, Chamelibagh, Shantinagr, Dhaka-1227
		                    <p>
		                </center>
		            	<hr>
                	</div>
 
                    <div class="col-md-12">
                    	<table width="100%">
                    		<tr>
                    			<th>Flat No</th>
                    			<td>{{ $bills->flat_no  }}</td> 
                    			<th>Pay Date</th>
                    			<td>{{ $bills->pay_date  }}</td> 
                    		</tr> 
                    		<tr> 
                    			<th>Paying Month</th>
                    			<td>{{ $bills->billing_month  }}</td>
                    			<th>Paid By</th>
                    			<td>{{ $bills->paid_by  }}</td>
                    		</tr> 
                    		<tr> 
                    			<th>Paying Year</th>
                    			<td>{{ $bills->billing_year  }}</td>
                    			<th>Received By</th>
                    			<td>{{ $bills->receiver_name  }}</td>
                    		</tr> 
                    	</table> 
                    </div> 

                    <div class="col-md-12" style="margin-top:10px">
                        <table class="data table table-bordered table-hover" width="100%" border="1">
                            <thead style="background-color: #3C8DBC">
                                <tr>
                                    <th width="5%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">
                                        <p align="center">Sl. No</p>
                                    </th>
                                    <th width="30%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">
                                        <p align="center">Description</p>
                                    </th>
                                    <th width="10%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">
                                        <p align="center">Amount</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td>1</td>
                                    <td>Service Charge</td>
                                    <td style="text-align: right;">{{ $bills->service_charge }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>2</td>
                                    <td>Mosque Purpose</td>
                                    <td style="text-align: right;">{{ $bills->mosjid_bill }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>3</td>
                                    <td>Commercial Space Service Charge</td>
                                    <td style="text-align: right;">{{ $bills->com_space_service_charge }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>4</td>
                                    <td>Community Center Charge</td>
                                    <td style="text-align: right;">{{ $bills->community_charge }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>5</td>
                                    <td>Emergency Fund</td>
                                    <td style="text-align: right;">{{ $bills->emergency_fund }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>6</td>
                                    <td>Development</td>
                                    <td style="text-align: right;">{{ $bills->developmet_fund }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>7</td>
                                    <td>Lift Charge</td>
                                    <td style="text-align: right;">{{ $bills->lift_charge }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>8</td>
                                    <td>Others</td>
                                    <td style="text-align: right;">{{ $bills->others }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="text-align: right;">
                            <label for="">Total Amount:  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label>{{ $bills->total_amount  }}
                        </div>
                    </div>
                </div>
	        </div>
        </div>
    </body>
</html>
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