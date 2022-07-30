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
 <!-- 
                    <div class="col-md-12">
                    	<table width="100%">
                    		<tr>
                    			<th width="40%">Expence Date</th>
                    			<td style="text-align: right; width: 60%;">{{ $expence->exp_date  }}</td> 
                    		</tr> 
                            <tr>
                                <th width="40%">Expenced Amount</th>
                                <td style="text-align: right; right; width: 60%;">{{ $expence->exp_amount  }}</td>
                            </tr>
                            <tr>
                                <th width="40%">Expence Details</th>
                                <td style="text-align:right; width: 60%;">{{ $expence->exp_details  }}</td>
                            </tr> 
                    		<tr>
                    			<th width="40%">Expenced By</th>
                    			<td style="text-align: right; right; width: 60%;">{{ $expence->exp_by  }}</td>
                    		</tr>
                    		<tr> 
                    			<th width="40%">Authorized By</th>
                    			<td style="text-align: right; right; width: 60%;">{{ $expence->exp_auth_by  }}</td>
                    		</tr> 
                    	</table> 
                    </div>  -->
                    <div class="col-md-12" style="margin-top:10px">
                        <table class="data table table-bordered table-hover" width="100%" border="1">
                            <thead style="background-color: #3C8DBC">
                                <tr>
                                    <th width="10%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">
                                        <p align="center">Sl. No</p>
                                    </th>
                                    <th width="20%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">
                                        <p align="center">Name</p>
                                    </th>
                                    <th width="50%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">
                                        <p align="center">Description</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td>1</td>
                                    <td>Expence Date</td>
                                    <td style="text-align: right;">{{ $expence->exp_date  }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>2</td>
                                    <td>Expenced Amount</td>
                                    <td style="text-align: right;">{{ $expence->exp_amount  }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>3</td>
                                    <td>Expence Details</td>
                                    <td style="text-align: right;">{{ $expence->exp_details  }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>4</td>
                                    <td>Expenced By</td>
                                    <td style="text-align: right;">{{ $expence->exp_by  }}</td>
                                </tr>
                                <tr class="odd">
                                    <td>5</td>
                                    <td>Authorized By</td>
                                    <td style="text-align: right;">{{ $expence->exp_auth_by }}</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <table width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                       <br>
                                        <p>__________________________</p>
                                        <p>Receiver Singature</p> 
                                    </td>
                                    <td style="float: right;">
                                        <br>
                                        <p>_____________________________</p>
                                        <p>Authorized Singature</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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