@extends('layouts.app-template')
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
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection