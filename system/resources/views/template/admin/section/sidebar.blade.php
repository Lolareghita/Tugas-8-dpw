

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->


  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">
          @if (Auth::check())
              {{ request()->user()->username }}
              @else
              silakan login
          @endif
        </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
      
            <li class="nav-item">
              <a href="{{ url('admin/dashboard') }}" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Dashboard </p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <p>
                  Menu
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href=" {{ url('admin/article') }} " class="nav-link">
                    <i class="fas fa-book-open nav-icon"></i>
                    <p>Article</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href=" {{ url('admin/user') }} " class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href=" {{ url('admin/coment') }} " class="nav-link">
                    <i class="fas fa-comments nav-icon"></i>
                    <p>Comment</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="{{ url('home') }}" class="nav-link ">
                <p>Go to Blog</p>
              </a>
            </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>