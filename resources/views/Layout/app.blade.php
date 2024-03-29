<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ URL('assets/images/favicon.ico') }}">
    <title>
        @yield('title','Admin')
    </title>
    <link href="{{ URL('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL('assets/icons/all.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;600&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="{{ URL('assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ URL('assets/css/sweetalert2.min.css') }}" rel="stylesheet">
    @yield('styles')

    @livewireStyles

</head>
<body>

    <div class='dashboard'>
        @include('Layout.menu')

        <div class='dashboard-app'>
            <header class='dashboard-toolbar'>
                <span class="menu-toggle cursor-pointer"><i class="fas fa-bars"></i></span>
                <div class="d-flex flex-row-reverse w-100">

                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <i class="fa fa-user"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="{{ route('users.profile') }}"> <i class="fa fa-user"></i> Perfil</a>
                          <a class="dropdown-item log_out" href="{{ route('logout') }}"> <i class="fas fa-sign-out-alt"></i> Cerrar</a>
                        </div>
                      </div>

                </div>
            </header>


            <div class='dashboard-content'>
                <div class="container">
                    @yield('container')
                </div>
            </div>
        </div>


    </div>


    <script src='{{ URL('assets/js/jquery.min.js') }}'></script>
    <script src='{{ URL('assets/js/bootstrap.bundle.min.js') }}'></script>
    <script src="{{ URL('assets/js/script.js') }}"></script>
    <script src="{{ URL('assets/js/sweetalert2.min.js') }}"></script>
    @yield('scripts')
    @livewireScripts

    <script>
        $('.log_out').click(function(e){
            e.preventDefault();
            Swal.fire({
            title: 'Salir',
            text:'Desea cerrar sesion?',
            showCancelButton: true,
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('logout') }}"
            }
            })
        });
    </script>
</body>
</html>
