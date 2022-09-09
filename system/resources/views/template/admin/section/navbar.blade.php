<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{url('admin/dashboard')}}" class="nav-link">Dashboard</a>
        </li>
      </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->


        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item ">
            <a class="nav-link"  href="{{ url('logout') }}">
                <i class="far fa-user"></i> Log out
            </a>   
        </li>

    </ul>
</nav>
