<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin_lte/img/blog.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin BLog </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
          {{-- <a href="#" class="d-block">{{Auth::user()->name}}</a> --}}
        </div>
      </div>
    </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Admin Panel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" >
                <a href="{{route('admin.dashboard')}}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
            </li>

              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link {{ (request()->is('admin/users')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('articles.index')}}" class="nav-link {{ (request()->is('admin/articles')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Articles</p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link {{ (request()->is('admin/categories')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
            </li>

              <li class="nav-item">
                <a href="{{route('comment.index')}}" class="nav-link {{ (request()->is('admin/comments')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comments</p>
                </a>
            </li>
             <li class="nav-item">
                <a href="{{route('project.index')}}" class="nav-link {{ (request()->is('admin/projects')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
            </li>
            </ul>
             </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
