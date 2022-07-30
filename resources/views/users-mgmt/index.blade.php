@extends('users-mgmt.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-4">
          @if( Auth::user()->role == 'admin' || Auth::user()->role == 'employee')
          <a class="btn btn-primary" href="{{ route('user-management.create') }}">Add new user</a>
          @endif
        </div>
        <div class="col-sm-4" style="text-align: center;">
          <h3 class="box-title">List of users</h3>
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
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead style="background-color: #3C8DBC">
              <tr role="row">
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">User Name</th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">First Name</th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Last Name</th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">User Role</th>
                <th width="12%" tabindex="0" aria-controls="example2" rowspan="1" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{ $user->username }}</td>
                  <td class="hidden-xs">{{ $user->firstname }}</td>
                  <td class="hidden-xs">{{ $user->lastname }}</td>
                  <td class="hidden-xs">{{ $user->role }}</td>
                  <td>
                    <form method="POST" action="{{ route('user-management.destroy', ['id' => $user->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if (Auth::user()->role == 'admin' || Auth::user()->role == 'employee')
                          <a href="{{ route('user-management.edit', ['id' => $user->id]) }}" class="btn btn-warning btn-xs">Update</a>
                        @endif
                        @if (Auth::user()->role == 'admin')
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
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($users)}} of {{count($users)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $users->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
@endsection