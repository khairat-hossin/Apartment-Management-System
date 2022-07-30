@extends('layouts.ap-template')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div style="height: 38px;">
      <ol class="breadcrumb">
       <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
       @if(\Request::path()== 'owner-information')
       <li class="active">Owner Information</li>
       @elseif(\Request::path()== 'owner-information/create')
       <li><a href="/owner-information">Owner Information</a></li>
        <li class="active">Add</li>
        @elseif(\Request::route()->getName()== 'owner-information.edit')
        <li><a href="/owner-information">Owner Information</a></li>
        <li class="active">Update</li>
        @elseif(\Request::route()->getName()== 'owner-information.show')
        <li><a href="/owner-information">Owner Information</a></li>
        <li class="active">View</li>
        @endif
      </ol>
    </div>

<section class="content">
<div class="box">
  <div class="box-header">
    <div class="row">
      <div class="col-sm-4">
          @if(Auth::user()->role == 'admin' || Auth::user()->role == 'employee')
          <a class="btn btn-primary" href="{{ route('owner-information.create') }}">Add new Owner</a>
          @endif
      </div>
      <div class="col-sm-4" style="text-align: center;">
        <h3 class="box-title">List of Owners</h3>
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
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Picture</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Name</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Flat</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Parking</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Mobile</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Email</p></th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Emergency Conact</p></th>
                <th width="16%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Action</p></th>
              </tr>
            </thead>
            <tbody>
             @foreach ($owner_info as $owner)
                <tr role="row" class="odd" >
                  <td><img src="../{{$owner->picture }}" width="50px" height="50px"/></td>
                  <td class="sorting_1">{{$owner->first_name }} {{$owner->mid_name }} {{$owner->last_name }}</td>
                  <td class="hidden-xs">{{$owner->flat_no }}</td>
                  <td class="hidden-xs">{{ $owner->car_park }} </td>
                  <td class="hidden-xs">{{ $owner->mobile_no }} </td>
                  <td class="hidden-xs">{{ $owner->email_id }}</td>
                  <td class="hidden-xs">{{ $owner->emergency_contact }}</td>
                  <td>
                    <form  method="POST" action="{{ route('owner-information.destroy', ['id' => $owner->id]) }}" onsubmit = "return confirm('Are you sure?') ">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('owner-information.show', ['id' => $owner->id]) }}" class="btn btn-success btn-xs">
                        View
                        </a>
                        @if( Auth::user()->role == 'admin' || Auth::user()->role == 'employee')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('owner-information.edit', ['id' => $owner->id]) }}" class="btn btn-warning btn-xs" id="updatebutton" >
                        Update
                        </a>
                        <!-- {{ route('owner-information.edit', ['id' => $owner->id]) }} -->
                        @endif
                        @if( Auth::user()->role == 'admin')
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
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($owner_info)}} of {{count($owner_info)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate">
            {{ $owner_info->links("pagination::bootstrap-4") }}
          </div>
        </div>
</div>
</div>
</section>
    <!-- /.content -->

</div>
@endsection
