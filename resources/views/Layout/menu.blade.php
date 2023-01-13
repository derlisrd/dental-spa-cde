@yield('menu-nav')
<div class="dashboard-nav">
    <header>
        <a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a>
        <a href="#" class="brand-logo">
            <i class="fa fa-rocket"></i> <small class="text-muted"> Dental Spa</small>
        </a>
    </header>



    <nav class="dashboard-nav-list">

        <a href="{{ route('home') }}" class="dashboard-nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
            <i class="fas fa-home"></i>
            Inicio
        </a>

        <a href="{{ route('pacientes') }}" class="dashboard-nav-item {{ request()->routeIs('pacientes*') ? 'active' : '' }}">
            <i class="fas fa-hospital-user"></i>
            Pacientes
        </a>

        <a href="{{ route('tratamientos') }}" class="dashboard-nav-item {{ request()->routeIs('tratamientos*') ? 'active' : '' }}">
            <i class="fas fa-book-medical"></i>
            Tratamientos
        </a>

        <a href="{{ route('servicios') }}" class="dashboard-nav-item {{ request()->routeIs('servicios*') ? 'active' : '' }}">
            <i class="fas fa-briefcase-medical"></i>
            Servicios
        </a>
        <a href="{{ route('empleados') }}" class="dashboard-nav-item {{ request()->routeIs('empleados*') ? 'active' : '' }}">
            <i class="fas fa-users"></i>
            Empleados
        </a>



        <a href="{{ route('insumos') }}" class="dashboard-nav-item {{ request()->routeIs('insumos*') ? 'active' : '' }}">
            <i class="fas fa-th"></i>
            Insumos
        </a>

        <div class='dashboard-nav-dropdown {{ request()->routeIs('usuarios*') ? 'show' : '' }}'>
            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-users"></i> Usuarios </a>
            <div class='dashboard-nav-dropdown-menu'>
                <a href="{{ route('usuarios') }}" class="dashboard-nav-dropdown-item {{ request()->routeIs('users') ? 'active' : '' }}">Todos</a>
            </div>
        </div>



        <div class="nav-item-divider"></div>
        <a href="{{ route('logout') }}" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Salir </a>
    </nav>
</div>
