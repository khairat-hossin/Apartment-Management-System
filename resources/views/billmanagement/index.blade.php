@extends('billmanagement.base')
@section('action-content')
    <!-- Main content -->
<section class="content">
  <div class="box">
    <div class="box-header">
      <div class="row">
      <div class="col-sm-4">
        @if( Auth::user()->role == 'admin' || Auth::user()->role == 'employee')
        <a class="btn btn-primary" href="{{ route('billmanagement.monthlybill') }}">Pay Bill</a>
        @endif
      </div>
      <div class="col-sm-4" style="text-align: center;">
        <h3 class="box-title">Bill Details</h3>
      </div> 
      </div> 
    </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead style="background-color: #3C8DBC">
              <tr role="row">
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Bill No</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Flat No</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Payment Date</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Billing Month</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Total Bill</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Paid By</p></th>
                <th width="10%" tabindex="0" aria-controls="example2" rowspan="1" colspan="2"><p align="center">Action</p></th>
              </tr>
            </thead>
            <tbody>
            @foreach ($bills as $bill)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{ $bill->id }}</td>
                  <td class="sorting_1">{{ $bill->flat_no }}</td>
                  <td class="sorting_1">{{ $bill->pay_date }}</td>
                  <td class="hidden-xs">{{ $bill->billing_month }} / {{ $bill->billing_year }}</td>
                  <td class="hidden-xs">{{ $bill->total_amount }}</td>
                  <td class="hidden-xs">{{ $bill->paid_by }}</td>
                  <td>
                    <form method="POST" action="{{ route('billmanagement.destroy', ['id' => $bill->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @if( Auth::user()->role == 'admin')
                        <button type="submit" class="btn btn-danger btn-xs">
                          Delete
                        </button>
                        @endif
                        <a href="{{ route('billmanagement.pdf', ['id' => $bill->id]) }}" class="btn btn-success btn-xs">Print</a>
                    </form>
                  </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      
    </div>
  </div>
  <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($bills)}} of {{count($bills)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $bills->links("pagination::bootstrap-4") }}
          </div>
        </div>
</div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
@endsection