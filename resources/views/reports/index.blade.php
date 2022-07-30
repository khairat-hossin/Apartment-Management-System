@extends('reports.base')
@section('action-content')
    <!-- Main content -->
<section class="content">
    <div class="box" >
        <div class="box-header">
            <div class="row">
                <div class="col-xs-12">
                    <form role="form" method="POST"  action="{{ route('reports.search') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-xs-2">
                            <select class="form-control" name="report_type" id="report_type" required>
                                <option value="">Report Type</option>
                                <option value="1">Bills</option>
                                <option value="2">Expences</option>
                            </select>
                        </div>
                        <div class="col-xs-1" style="padding-left: 0px; width: 20px;">
                            <p><b>From</b></p>
                        </div>
                        <div class="col-xs-2">
                            <select class="form-control" name="from_month" id="from_month" required>
                                <option value="">Select Month</option>
                                <?php $months1=$months; $months2= $months ?>
                                @foreach ($months1 as $months)
                                <option value="{{$months['id']}}">{{$months['month_name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-xs-2">
                            <input type="text" class="yearList form-control" name="from_year" required placeholder="Selcet Year"> 
                        </div>
                        <div class="col-xs-1" style="padding-left: 0px; width: 20px;">
                            <p><b>To</b></p>
                        </div>
                        <div class="col-xs-2">
                            <select class="form-control" name="to_month" id="to_month" required>
                                <option value="">Select Month</option>
                                @foreach ($months2 as $month)
                                <option value="{{ $month['id'] }}">{{$month['month_name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="yearList form-control" name="to_year" required placeholder="Selcet Year"> 
                        </div>
                        <div class="col-xs-1">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" value="submit">Generate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="box-body" >
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
          <div class="row">
            <div class="col-md-12">
                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info" >
                    <thead style="background-color: #3C8DBC">
                      <tr role="row">
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Flat No</p></th>
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Pay Date</p></th>
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Paid By</p></th>
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Bill of</p></th>
                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Total Bill</p></th>
                      </tr>
                    </thead>
                    <tbody> 
                        @foreach ( $bills as $bill)
                            <tr role="row" class="odd">
                              <td class="sorting_1">{{ $bill->flat_no }}</td>
                              <td class="sorting_1">{{ $bill->pay_date }}</td>
                              <td class="hidden-xs">{{ $bill->paid_by }}</td>
                              <td class="hidden-xs">{{ $bill->billing_month }} {{ $bill->billing_year }}</td>
                              <td class="hidden-xs" style="text-align: right;">{{ $bill->total_amount }}</td>
                          </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
          </div>
        </div>
    </div>
  <!-- /.box-body -->
</section>

<script type="text/javascript">
$(document).ready(function(){
    $(".yearList").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    }).on('changeDate', function(e){
        $(this).datepicker('hide');
    }); 
});
</script>


@endsection
