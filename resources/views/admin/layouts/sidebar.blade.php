<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Mahir Blog</span>
  </a>
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Mahir Shahriar</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item has-treeview ">
          <a href="{{ route('post.index') }}" class="nav-link {{ Request::is('admin/post*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-blog"></i>
            <p>Posts</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="{{ route('category.index') }}" class="nav-link {{ Request::is('admin/category*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="{{ route('tag.index') }}" class="nav-link {{ Request::is('admin/tag*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tags"></i>
            <p>Tags</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>Users</p>
          </a>
        </li>
        
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>
              More
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/forgot-password.html" class="nav-link">
                <i class="nav-icon fas fa-unlock-alt"></i>
                <p>Forgot Password</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>