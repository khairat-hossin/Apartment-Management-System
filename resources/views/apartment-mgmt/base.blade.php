@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <div style="height: 38px;">
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
        @if(\Request::path() == 'apartment-mgmt')
        <li class="active">Apartment Information</li>
        @elseif(\Request::path() == 'apartment-mgmt/create')
        <li><a href="/apartment-mgmt">Apartment Information</a></li>
        <li class="active">Add</li>
        @else
        <li><a href="/apartment-mgmt">Apartment Information</a></li>
        <li class="active">View</li>
        @endif
    </ol>
    </div>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection