<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dental Spa</title>
    <link rel="stylesheet" href="{{ URL('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form method="post" action="{{ route('login.post') }}">
                @csrf

                <div class="mb-3">
                    @if($errors->any())
                    <div class="alert alert-warning text-dark">{{$errors->first()}}</div>
                    @endif
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input name="email" id="email" value="{{ old('email') }}" autofocus  class="form-control" />
                  <label class="form-label" for="email">User o email </label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="pass" name="password" class="form-control" />
                  <label class="form-label" for="pass">Contraseña</label>
                </div>

                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <div class="form-check" >
                    <input class="form-check-input" id="remember" type="checkbox" name="remember" />
                    <label class="form-check-label" role="button" for="remember"> Recordar </label>
                  </div>

                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>



              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
