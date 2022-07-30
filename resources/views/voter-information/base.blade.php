@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <div style="height: 38px;">
      <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
       @if(\Request::path()== 'voter-information')
       <li class="active">Voter Information</li>
       @elseif(\Request::path()== 'voter-information/create')
       <li><a href="/voter-information">voter Information</a></li>
        <li class="active">Add</li>
        @elseif(\Request::route()->getName()== 'voter-information.edit')
        <li><a href="/voter-information">voter Information</a></li>
        <li class="active">Update</li>
        @elseif(\Request::route()->getName()== 'voter-information.show')
        <li><a href="/voter-information">voter Information</a></li>
        <li class="active">View</li>
        @endif
      </ol>
    </div>
    <!-- Content Header (Page header) -->
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection