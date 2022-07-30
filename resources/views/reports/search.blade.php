@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div style="height: 38px;">
      <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="/reports"><i class="fa fa-pie-chart"></i> Report</a></li>
          <li class="active">Search</li> 
      </ol>
    </div>
    <section class="content">
        <div class="box">
          <div class="box-header">
            <div class="col-md-12" style="text-align:center;">
              <h3>Search Result</h3>
              <p>{{ !empty($successTxt)?$successTxt:null }}</p>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example2_wrapper" class="form-inline dt-bootstrap">
              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-primary" onclick="printMe('printArea')">Print</button>
                </div>
                <div class="col-md-12" id="printArea">
                  @if( $type==1)
                  <table width="100%" border="1" class="table dataTable table-bordered table-hover">
                    <thead style="background-color: #3C8DBC">
                      <tr role="row">
                        <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Flat No</p></th>
                        <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Pay Date</p></th>
                        <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Paid By</p></th>
                        <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Bill of</p></th>
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Total Bill</p></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($bills as $bill)
                        <tr role="row" class="odd" >
                          <td class="sorting_1">{{ $bill->flat_no }}</td>
                          <td class="hidden-xs">{{ $bill->billing_year }}</td>
                          <td class="hidden-xs">{{ $bill->paid_by }} </td>
                          <td class="hidden-xs">{{ $bill->billing_month }} {{ $bill->billing_year }}</td>
                          <td class="hidden-xs">{{ $bill->total_amount }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @else  
                  <table width="100%" border="1" class="table dataTable table-bordered table-hover">
                    <thead style="background-color:#3C8DBC">
                      <tr role="row">
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Date</p></th>
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Amount</p></th>
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Details</p></th>
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Expenced By</p></th>
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Authorized By</p></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($expences as $expence)
                        <tr role="row" class="odd" >
                          <td class="hidden-xs">{{$expence->exp_date }}</td>
                          <td class="hidden-xs">{{ $expence->exp_amount }} </td>
                          <td class="hidden-xs">{{ $expence->exp_details }}</td>
                          <td class="hidden-xs">{{ $expence->exp_by }}</td>
                          <td class="hidden-xs">{{ $expence->exp_auth_by }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @endif 
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body --> 
        </div>
    </section>
  </div>
<!-- /.content -->
{!! HTML::script('js/datatable/dataTables.min.js') !!}
<script type="text/javascript"> 
  function printMe(divName)
  { 
    var title = "<center class=\"text-center\">"+
        "<h3 style='margin:0;padding:5px 0'>Green Peace Apartment Owners Association</h3>"+
        "<small>41, Chamelibagh, Shantinagr, Dhaka-1227</small></center>";

    var myWindow=window.open('','','width=800,height=800');
    myWindow.document.write("<h1 style='text-align:center'>"+title+"</h1>" + document.getElementById(divName).innerHTML); 
    myWindow.document.close();
    myWindow.focus();
    myWindow.print();
    myWindow.close();
  }
</script> 


@endsection

