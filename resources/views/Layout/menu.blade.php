

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <i class="fas fa-tooth"></i>
      <span class="brand-text font-weight-light"> {{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image ml-2">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">
            Nombre
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
              <i class="nav-icon fa fa-home-alt"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('pacientes') }}" class="nav-link {{ request()->routeIs('pacientes*') ? 'active' : '' }}">
                <i class="fas fa-hospital-user nav-icon"></i>
                <p>Pacientes</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('tratamientos') }}" class="nav-link {{ request()->routeIs('tratamientos*') ? 'active' : '' }}">
              <i class="fa fa-kit-medical nav-icon"></i>
                <p>Tratamientos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('servicios') }}" class="nav-link {{ request()->routeIs('servicios*') ? 'active' : '' }}">
                <i class="fa fa-id-badge nav-icon"></i>
                <p>Servicios</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('empleados') }}" class="nav-link {{ request()->routeIs('empleados*') ? 'active' : '' }}">
                <i class="fa fa-users nav-icon"></i>
                <p>Empleados</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('insumos') }}" class="nav-link {{ request()->routeIs('insumos*') ? 'active' : '' }}">
                <i class="fas fa-th nav-icon"></i>
                <p>Insumos</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('usuarios') }}" class="nav-link {{ request()->routeIs('usuarios*') ? 'active' : '' }}">
                <i class="fas fa-user nav-icon"></i>
                <p>Usuarios</p>
            </a>
          </li>

          <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link">
                <i class="nav-icon fa fa-running"></i>
              <p>
                Salir
              </p>
            </a>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
