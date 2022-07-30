@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div style="height: 38px;">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         @if(\Request::path()== 'notice')
       <li class="active">Notice</li>
       @elseif(\Request::path()== 'notice/addnotice')
       <li><a href="/notice">Notice</a></li>
        <li class="active">Add</li>
        @endif
      </ol>
    </div>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection