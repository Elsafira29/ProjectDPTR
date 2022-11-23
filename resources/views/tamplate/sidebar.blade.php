<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: 	#A0522D">
    <!-- Brand Logo -->
    <style>
        .sidebar{
            background-color: 	#A0522D;
        }
    </style>
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo Dinas" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-dark" style="color: white">DISPERTARU DIY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color:#A0522D">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="{{ asset('assets/img/') }}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        {{-- <div class="info">
          <a href="#" class="d-block">mas/mba</a>
        </div> --}}
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    {{-- <i class="fa fa-sign-out" aria-hidden="true"></i> --}}
                  <i class="nav-icon fas fa-h"></i>
                  <p>
                    Dashboard
                    {{-- <i class="fa fa-sign-out" aria-hidden="true"></i> --}}
                  </p>
                </a>
              </li>
          <li class="nav-item menu-open">
            <a href="{{ route('home') }}" class="nav-link focus">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Input Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tabel') }}" class="nav-link focus">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pemanfaatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Data-Pengawasan') }}" class="nav-link focus">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengawasan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                {{-- <i class="fa fa-sign-out" aria-hidden="true"></i> --}}
              <i class="nav-icon fas fa-h"></i>
              <p>
                Tanggal
                {{-- <i class="fa fa-sign-out" aria-hidden="true"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('masteradmin') }}" class="nav-link">
                {{-- <i class="fa fa-sign-out" aria-hidden="true"></i> --}}
              <i class="nav-icon fas fa-h"></i>
              <p>
                Admin
                {{-- <i class="fa fa-sign-out" aria-hidden="true"></i> --}}
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
