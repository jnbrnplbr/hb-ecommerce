<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      {{-- <img src="/dist/img/AdminLTELogo.png" alt="Marikina Hotel Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light" style="margin-left:40px;">Glam Watch</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       
          @if((!Auth::check()) || (Auth::user()->getCurrentRole() != 'administrator' && Auth::user()->getCurrentRole() != 'employee'))
              <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    All Watches
                  </p>
                </a>
              </li>

              @foreach($brands as $brand)
                  <li class="nav-item">
                    <a href="/products/{{$brand->id}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        {{$brand->name}}
                      </p>
                    </a>
                  </li>
              @endforeach

          @endif

          
        
        
@if(Auth::check())
        @if(Auth::user()->getCurrentRole() != 'customer')
            <li class="nav-item">
                <a href="/customers" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Customers
                  </p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Orders
                  </p>
                </a>
              </li>
        @endif

        @if(Auth::user()->getCurrentRole() != 'employee' && Auth::user()->getCurrentRole() != 'customer')
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Employees
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/brands" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Brands
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/models" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Models
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Reports
                  </p>
                </a>
              </li>
          @endif
@endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
