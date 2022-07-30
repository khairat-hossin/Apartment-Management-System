@extends('managingcommittee.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
  <div class="box">
  <div class="box-header">
    <div class="row">
    <div class="col-md-4">
      @if( Auth::user()->role == 'admin' || Auth::user()->role == 'employee')
      <a class="btn btn-primary" href="{{ route('managingcommittee.create') }}">Add new Member</a>
      @endif
    </div>
    <div class="col-sm-4" style="text-align: center;">
      <h3 class="box-title">Committee Details</h3>
    </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-12"></div>
        <div class="col-sm-12"></div>
      </div>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row" style="background-color: #3C8DBC">
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Picture</p> </th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Name</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Designation</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Flat No</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Voter No</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Mobile No</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Email</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Address</p></th>
                <th width="5%" tabindex="0" aria-controls="example2" rowspan="1" colspan="2"><p align="center">Action</p></th>
              </tr>
            </thead>
            <tbody>
               @foreach($com as $coms)
                <tr role="row" class="odd">
                  <td><img src="../{{$coms->picture }}" width="50px" height="50px"/></td>
                  <td class="sorting_1">{{ $coms->name }}</td>
                  <td class="hidden-xs">
                    <?php if($coms->id==1){ print "Chairman";} else{ print "Member";} ?>
                  </td>
                  <td class="hidden-xs">{{ $coms->flat_no }}</td>
                  <td class="hidden-xs">{{ $coms->flat_no }}</td>
                  <td class="hidden-xs">{{ $coms->mobile_no }}</td>
                  <td class="hidden-xs">{{ $coms->email_id }}</td>
                  <td class="hidden-xs">{{ $coms->present_add }}</td>
                  @if( Auth::user()->role == 'admin' )
                  <td>
                    <form method="post" action="{{ route('managingcommittee.destroy', ['id' => $coms->id]) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit"  class="btn btn-danger btn-xs">
                          Delete
                        </button>
                    </form>
                  </td>
                  @endif
                </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>
   
     <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($com)}} of {{count($com)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $com->links("pagination::bootstrap-4") }}
          </div>
        </div>
      </div>
    </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
@endsection