@extends('employees-mgmt.base')
@section('action-content')
    <!-- Main content -->
  <section class="content">
  <div class="box">
  <div class="box-header">
    <div class="row">
      @if( Auth::user()->role == 'admin' || Auth::user()->role == 'employee')
      <div class="col-sm-4">
        <a class="btn btn-primary" href="{{ route('employee-management.create') }}">Add new employee</a>
      </div> 
      @endif
      <div class="col-sm-4" style="text-align: center;">
         <h3 class="box-title">List of employees</h3>
      </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body"">
      <div class="row">
        <div class="col-sm-12"></div>
        <div class="col-sm-12"></div>
      </div>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row" class="bg-primary">
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Picture</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending"><p align="center">Employee Name</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Address</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Birthdate</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Hired Date</p></th>
                <th width="15%" tabindex="0" aria-controls="example2" rowspan="1" colspan="2"><p align="center">Action</p></th>
              </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr role="row" class="odd">
                  <td><img src="../{{$employee->picture }}" width="50px" height="50px"/></td>
                  <td class="sorting_1">{{ $employee->firstname }} {{$employee->middlename}} {{$employee->lastname}}</td>
                  <td class="hidden-xs">{{ $employee->address }}</td>
                  <td class="hidden-xs">{{ $employee->birthdate }}</td>
                  <td class="hidden-xs">{{ $employee->date_hired }}</td>
                  <td>
                    <form method="POST" action="{{ route('employee-management.destroy', ['id' => $employee->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('employee-management.show', ['id' => $employee->id]) }}" class="btn btn-success btn-xs">
                        View
                        </a>
                        @if( Auth::user()->role == 'admin' || Auth::user()->role == 'employee')
                        <a href="{{ route('employee-management.edit', ['id' => $employee->id]) }}" class="btn btn-warning btn-xs">
                        Update
                        </a>
                        @endif
                        @if( Auth::user()->role == 'admin' )
                        <button type="submit" class="btn btn-danger btn-xs">
                          Delete
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
     <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($employees)}} of {{count($employees)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $employees->links("pagination::bootstrap-4") }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
</section>

@endsection