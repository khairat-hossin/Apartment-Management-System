@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div style="height: 38px;">
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        @if(\Request::path()== 'user-management')
       <li class="active">User Information</li>
       @elseif(\Request::path()== 'user-management/create')
       <li><a href="/user-management">User Information</a></li>
        <li class="active">Add</li>
        @elseif(\Request::route()->getName()== 'user-management.edit')
        <li><a href="/user-management">User Information</a></li>
        <li class="active">Update</li>
        @endif
      </ol>
    </div>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection