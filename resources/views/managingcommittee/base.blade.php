@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div style="height: 38px;">
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         @if(\Request::path()== 'managingcommittee')
       <li class="active">Managing Committee</li>
       @elseif(\Request::path()== 'managingcommittee/create')
       <li><a href="/managingcommittee">Managing Committee</a></li>
        <li class="active">Add</li>
        @endif
    </ol>
   </div>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection