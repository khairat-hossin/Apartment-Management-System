@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div style="height: 38px;">
      <ol class="breadcrumb" >
        <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
        @if(\Request::path()== 'employee-management')
       <li class="active">Employee Information</li>
       @elseif(\Request::path()== 'employee-management/create')
       <li><a href="/employee-management">Employee Information</a></li>
        <li class="active">Add</li>
        @elseif(\Request::route()->getName()== 'employee-management.edit')
        <li><a href="/employee-management">Employee Information</a></li>
        <li class="active">Update</li>
        @elseif(\Request::route()->getName()== 'employee-management.show')
        <li><a href="/employee-management">Employee Information</a></li>
        <li class="active">View</li>
        @endif
       
      </ol>
    </div>
    
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection