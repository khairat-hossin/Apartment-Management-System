@extends('apartment-mgmt.base')
@section('action-content')
    <!-- Main content -->
<section class="content">
  <div class="box">
    <div class="box-header">
      <div class="row">
        <div class="col-sm-4">
           <a class="btn btn-primary" href="{{ route('apartment-mgmt.create') }}">Add new Flat</a>
        </div>
        <div class="col-sm-4" style="text-align: center;">
          <h3 class="box-title">List of Flats</h3>
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
                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Flat No</p></th>
                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Flat Size</p></th>
                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Parking</p></th>
                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Notes</p></th>
                <th width="10%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Action</p></th>
              </tr>
            </thead>
            <tbody>
            @foreach ($apartments as $apartment)
              <tr role="row" class="odd">
                <td class="hidden-xs">{{ $apartment->flat_no }}</td>
                <td class="hidden-xs">{{ $apartment->flat_size }}</td>
                <td class="hidden-xs">{{ $apartment->car_park }}</td>
                <td class="hidden-xs">{{ $apartment->note }}</td>
                <td class="hidden-xs">
                    
                    <form method="POST" action="{{ route('apartment-mgmt.destroy', ['id' => $apartment->id]) }}" onsubmit="return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('apartment-mgmt.show', ['id' => $apartment->id]) }}" class="btn btn-success btn-xs">View</a>

                        @if( Auth::user()->role == 'admin')
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
      
    </div>
  </div>
  <!-- /.box-body -->
<!--   <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($apartments)}} of {{count($apartments)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $apartments->links("pagination::bootstrap-4") }}
          </div>
        </div>
</div> -->
<div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($apartments)}} of {{count($apartments)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate">
            {{ $apartments->links("pagination::bootstrap-4") }}
          </div>
        </div>
</div>
</div>
</section>
    <!-- /.content -->
@endsection