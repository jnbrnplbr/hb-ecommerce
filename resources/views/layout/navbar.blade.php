<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>

    
    


    @if(Auth::check())
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Dashboard</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">History</a>
      </li>
    @else
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/about" class="nav-link">About</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Products</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/login" class="nav-link">Login</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/register" class="nav-link">Register</a>
      </li>
      
    @endif

      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    @if(Auth::check())
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="../../dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline">{{ Auth::user()->currentUser() }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

            <p>
            {{ Auth::user()->currentUser() }} - {{ Auth::user()->role->name }}
              <small>Member since {{ Auth::user()->created_at }}</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <form method="POST">
          @csrf 
          @method('delete')
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <button formaction="/logout" class="btn btn-default btn-flat float-right">Sign out</button>
          </li>
          </form>
        </ul>
      </li>
    @endif
    {{-- <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li> --}}
  </ul>
</nav>