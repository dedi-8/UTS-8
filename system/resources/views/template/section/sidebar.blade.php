@php
  function checkRouteActive($route){
  if(Route:: current() == $route) return 'active';
}
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="" class="d-block">
        <h2>ADMIN BLOG</h2>
        </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                BERANDA
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/blog')}}" class="nav-link">
              <i class="nav-icon fas fas fa-blog"></i>
              <p>
                ARTIKEL
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('artikel')}}" class="nav-link">
              <i class="nav-icon fas fas fa-blog"></i>
              <p>
                BLOG
              </p>
            </a>
          </li>
              <li class="nav-item">
                <a href="{{url('admin/user')}}" class="nav-link">
                  <i class="nav-icon fas fas fa-user"></i>
                  <p>
                    USER
                  </p>
                </a>
              </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>