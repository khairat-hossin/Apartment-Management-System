@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div style="height: 38px;">
    <ol class="breadcrumb">    
        <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Expendetures</a></li>
    </ol>
  </div>

   <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
      <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('expences.create') }}">Add Expence</a>
        </div>
        <div class="col-sm-4" style="text-align: center;">
          <h3 class="box-title">List of Expences</h3>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-md-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead style="background-color:#3C8DBC">
              <tr role="row">
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Date</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Amount</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Details</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Expenced By</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Authorized By</p></th>
                <th width="10%" tabindex="0" aria-controls="example2" rowspan="1" colspan="2"><p align="center">Action</p></th>
              </tr>
            </thead>
            <tbody>
             @foreach ($exp_list as $expence)
                <tr role="row" class="odd" >
                  <td class="hidden-xs">{{$expence->exp_date }}</td>
                  <td class="hidden-xs">{{ $expence->exp_amount }} </td>
                  <td class="hidden-xs">{{ $expence->exp_details }}</td>
                  <td class="hidden-xs">{{ $expence->exp_by }}</td>
                  <td class="hidden-xs">{{ $expence->exp_auth_by }}</td>
                  
                  <td>
                    <form method="post" action="{{ route('expences.destroy', ['id' => $expence->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if( Auth::user()->role == 'admin' )
                        <button type="submit"  class="btn btn-danger btn-xs">
                          Delete
                        </button>
                        @endif
                        <a href="{{ route('expences.pdf', ['id' => $expence->id]) }}" class="btn btn-success btn-xs">Print</a>
                    </form>
                  </td>
                  
              </tr>
            @endforeach
            </tbody>
            <tfoot style="background-color:#3C8DBC">              
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
  <div class="row">
          <div class="col-sm-5">
            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($exp_list)}} of {{count($exp_list)}} entries</div>
          </div>
          <div class="col-sm-7">
            <div class="dataTables_paginate paging_simple_numbers text-right" id="example2_paginate">
              {{ $exp_list->links("pagination::bootstrap-4") }}
            </div>
          </div>
  </div>


</div>
    </section>
    <!-- /.content -->
  </div>
@endsection