@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div style="height: 38px;">
    <ol class="breadcrumb">    
        <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
        @if(\Request::path() == 'expences')
        <li class="active">Expendetures</li>
        @elseif(\Request::path() == 'expences/create')
        <li><a href="/expences">Expendetures</a></li>
        <li class="active">Add Expense</li>
        @endif
    </ol>
  </div>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection