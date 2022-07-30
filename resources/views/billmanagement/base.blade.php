@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div style="height: 38px;">
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        @if(\Request::path() == 'billmanagement')
        <li class="active">Bill Management</li>
        @elseif(\Request::path() == 'billmanagement/monthlybill')
        <li><a href="/billmanagement">Bill Management</a></li>
        <li class="active">Pay Bill</li>
        @endif
      </ol>
    </div>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection