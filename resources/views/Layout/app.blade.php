<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title','Dental Spa') </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ URL('assets/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/font-icons/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/styles.css') }}">
    @livewireStyles

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    {{-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{ URL('assets/img/loading.svg') }}" alt="AdminLTELogo" height="60" width="60">
    </div> --}}

    @include('Layout.navbar')
    @include('Layout.menu')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>@yield('title2','')</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>

    <section class="content">
        <div class="container-fluid">
            @yield('container')
        </div>
    </section>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0
        </div>
        <strong>Hecho con amor por <a href="#">Saeta sistema</a></strong>
    </footer>

    <script src="{{ URL('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('assets/js/adminlte.js') }}"></script>
    @livewireScripts

    @yield('scripts')
</body>
</html>
