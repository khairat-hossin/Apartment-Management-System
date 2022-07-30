  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel" >
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          @if(Auth::user())
          <p>{{ Auth::user()->name}}</p>
          @endif
          <!-- Status
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- Sidebar Menu -->
      @if(Auth::user())
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li class="treeview"><a href="{{ url('apartment-mgmt')}}"><i class="fa fa-home"></i> <span>Apartment Information</span></a>
        </li>
        <!--Rentals information here-->
        <li class="treeview"><a href="{{ url('owner-information')}}"><i class="fa fa-users"></i><span>Owner Information</span></a></li>

        <li><a href="{{ url('voter-information') }}"><i class="fa fa-users"></i> <span>Voter Information</span></a></li>

        <li><a href="{{ url('employee-management') }}"><i class="fa fa-users"></i> <span>Employee Information</span></a></li>

        <li class="treeview"><a href="{{ url('billmanagement') }}"><i class="fa fa-cc-mastercard"></i> <span>Bill</span></a></li>

        <li class="treeview"><a href="{{ url('expences') }}"><i class="fa fa-credit-card"></i> <span>Expendetures</span></a></li>

        <li><a href="{{ url('managingcommittee') }}"><i class="fa fa-users"></i> <span>Managing Committee</span></a></li>

        <li><a href="{{ url('notice') }}"><i class="fa fa-bell"></i> <span>Notice</span></a></li>

        <li><a href="{{ url('reports') }}"><i class="fa fa-file"></i> <span>Report</span></a></li>
        @if(Auth::user())
          @if(Auth::user()->role == 'admin')
          <li>
            <a href="{{ url('user-management') }}"><i class="fa fa-user"></i> <span>User Management</span></a>
          </li>
          @endif
        @endif
      <li style="background-color: #1E282C;"><a class="btn btn-primary btn-lg" href="{{ route('logout') }}"> <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      @endif
      </ul>
      <!-- /.sidebar-menu<i class="fa fa-sign-out" aria-hidden="true" style="color: #FF0000;"></i> -->
    </section>
    <!-- /.sidebar -->
  </aside>