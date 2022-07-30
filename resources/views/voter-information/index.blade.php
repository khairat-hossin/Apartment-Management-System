@extends('voter-information.base')
@section('action-content')
<section class="content">
  <div class="box">
  <div class="box-header">
    <div class="row">
      @if( Auth::user()->role == 'admin' || Auth::user()->role == 'employee')
      <div class="col-sm-4">
        <a class="btn btn-primary" href="{{ route('voter-information.create') }}">Add new Voter</a>
      </div>
      @endif
      <div class="col-sm-4" style="text-align: center;">
        <h3 class="box-title">List of Voters</h3>
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
                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Picture</p></th>
                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Name</p></th>
                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Voter ID</p></th>
                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Flat No</p></th>
                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Relationship</p></th>
                <th width="15%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Action</p></th>
              </tr>
            </thead>
            <tbody>
             @foreach ($voters as $voter)
                <tr role="row" class="odd" >
                  <td><img src="../{{$voter->picture }}" width="50px" height="50px"/></td>
                  <td class="sorting_1">{{$voter->first_name }} {{$voter->mid_name }} {{$voter->last_name }}</td>
                  <td class="hidden-xs">{{$voter->voter_id }}</td>
                  <td class="hidden-xs">{{ $voter->flat_no }} </td>
                  <td class="hidden-xs">{{ $voter->relationship }}</td>
                  <td>
                    <form method="POST" action="{{ route('voter-information.destroy', ['id' => $voter->id]) }}" onsubmit = "return confirm('Are you sure?') ">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('voter-information.show', ['id' => $voter->id]) }}" class="btn btn-success btn-xs">
                        View
                        </a>
                        @if( Auth::user()->role == 'admin')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('voter-information.edit', ['id' => $voter->id]) }}" class="btn btn-warning btn-xs">
                        Update
                        </a>
                         <button type="submit" class="btn btn-danger btn-xs">
                          <a href=""></a>Delete
                        </button>
                        @endif
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
  <!-- /.box-body -->
    <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($voters)}} of {{count($voters)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $voters->links("pagination::bootstrap-4") }}
          </div>
        </div>
    </div>
</div>
</section>
    <!-- /.content -->
@endsection