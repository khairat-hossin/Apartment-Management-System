<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Green Peace</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/_all-skins.css")}}" rel="stylesheet" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script type="text/javascript">

$(document).ready(function(){
  $('.sidebar-toggle').click(function(e){
    e.preventDefault();
    $('.main-sidebar').toggleClass('sidebar-mini');
  });
});
 
    </script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini" style="overflow: hidden;">
  <div class="wrapper" style="overflow: hidden;">

    <!-- Main Header -->
    @include('layouts.header')
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #DAE4C9;">
    <!-- Content Header (Page header) -->
      <section class="content-header" style="height: 46px;">
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
        <br>
      </section>
<br>
      <section class="content" style="background-color: #C0C0C0; padding-bottom: 26px;">
        <div class="row" >
          @if(Auth::user())
          <div class="col-md-12"> 
            <div class="col-md-2"></div>
            <div class="col-md-10">
              <div class="col-md-3" ">
                <figure >
              <a href="{{ url('billmanagement') }}"><img class="img-circle" src="{{asset('images/final_bill.png')}}" alt="Bill Management" ></a>
                <figcaption style="padding-left:5px;">
                    <h2 >Billing Information</h2>
                    <p >
                        Here you Can see the Billing Inforamtion and can pay all bills including utility bills. You should pay regular attention here in case you miss any important bills.
                    </p>
                    <a href="{{ url('billmanagement') }}" class="btn btn-success">See Bills</a>
                </figcaption>
                </figure>
              </div>
              @if(Auth::user()->role == 'owner')
              <div class="col-md-3" style="padding-right: 60px;">
                <figure>
                <a href="{{ url('employee-management') }}"><img class="img-circle" src="{{asset('images/owner_final.png')}}" style="" alt="Employees Information" ></a>
                <figcaption style=" padding-left:5px;">
                    <h2 >Employees Information</h2>
                    <p >
                        Here you Can see the information of Employees. You should pay regular attention here in case you miss any important information.
                    </p>
                    <a href="{{ url('employee-management') }}" class="btn btn-success">See employees</a>
                </figcaption>
                </figure>
              </div>
              @else
              <div class="col-md-3" style="padding-right: 60px;">
                <figure>
                <a href="{{ url('owner-information') }}"><img class="img-circle" src="{{asset('images/owner_final.png')}}" style="" alt="Owner Information" ></a>
                <figcaption style=" padding-left:5px;">
                    <h2 >Owner Information</h2>
                    <p>
                        Here you Can see the information of honourable flat owners. You should pay regular attention here in case you miss any important information.
                    </p>
              <a href="{{ url('owner-information') }}" class="btn btn-success">See Owners</a>
                </figcaption>
                </figure>
              </div>
              @endif
              
              <div class="col-md-3">
              <figure>
                <a href="{{ url('notice') }}"><img class="img-circle" src="{{asset('images/notice_final.jpg')}}"  alt="Notice Board" ></a>
                <figcaption style=" padding-left:5px;">
                    <h2>Important Notice</h2>
                    <p>
                        Here you Can see the notice published for the Owners, Employees. You should pay regular attention here in case you miss any important information.
                    </p>
                    <a href="{{ url('notice') }}" class="btn btn-success">See Notices</a>
                </figcaption>
                </figure>
              </div>
            </div>
          </div>
          @else
          {{ route('login') }}
          @endif
        </div>
      </section>
    <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('layouts.footer')
  
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

 <!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.js") }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script type="text/javascript">

  </script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

</body>
</html>
