@extends('notice.base')
@section('action-content')

<section class="content">
    <div class="box">
    	<div class="box-header">
        <div class="row">
    		<div class="col-sm-4">
          @if( Auth::user()->role == 'admin' || Auth::user()->role == 'employee')
      			<a class="btn btn-primary" href="{{ route('notice.addnotice') }}">Add Notice</a>
          @endif
    		</div>
        <div class="col-sm-4" style="text-align: center;">
         <h3 class="box-title">Notice Board</h3>
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
            		<thead style="background-color: #3C8DBC">
              			<tr role="row">
                			<th width="8%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">SL No.</p> </th>
                			<th width="8%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Date</p></th>
                			<th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Description</p></th>
                			<th width="10%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"><p align="center">Download</p></th>
              			</tr>
            		</thead>
            		<tbody>
               			@foreach($notices as $notice)
                			<tr class="odd">
                  				<td class="hidden-xs">{{ $notice->id }}</td>
                  				<td class="hidden-xs">{{ $notice->date }}</td>
                  				<td class="hidden-xs" align="center">{{ $notice->title }}</td>
                  				<td class="hidden-xs"><a href="{{ route('notice.download', ['id' => $notice->id]) }}"><i class="fa fa-download"></i>Download</a></td>
                  				
                			</tr>
            			@endforeach
            		</tbody>
          		</table>
        		</div>
      		</div>
  		</div>

    	<div class="row">
        	<div class="col-sm-5">
          		<div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($notices)}} of {{count($notices)}} entries</div>
        	</div>
        	<div class="col-sm-7">
          		<div class="dataTables_paginate paging_simple_numbers text-right" id="example2_paginate">
            	{{ $notices->links("pagination::bootstrap-4") }}
          		</div>
        	</div>
      	</div>
    </div>
  <!-- /.box-body -->
</div>



</section>




@endsection