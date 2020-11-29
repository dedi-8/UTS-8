<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
     <form class="form-inline ml-auto">
      <div class="input-group input-group-sm" style="width: 800px">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" style="height: 50px">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">0</span>
        </a>
       
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">0</span>
        </a>
      </li>

      <!-- user Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         @if(Auth::check())
          {{request()->user()->nama}}
              
          @else
          <i class="fas fa-user"></i>Silahkan Login
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{url('login')}}" class="dropdown-item">
            <i class="fas fa-login"></i> Login
          </a>
           <a href="{{url('register')}}" class="dropdown-item">
            <i class="fas fa-login"></i> Daftar
          </a>
          <a href="#" class="dropdown-item">
            <i class="fa fa-cog"></i> Setting
          </a>
          <a href="{{url('logout')}}" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i>Logout
          </a>
           
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </nav>