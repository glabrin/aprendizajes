<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema de aprendizajes - Escuela experimental ProA</title>
  <!-- plugins:css -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('node_modules/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('node_modules/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- endinject -->
  <link href="{{ asset('images/favicon.png') }}" rel="stylesheet">
  <!-- Toastr para la notificaciones -->
  <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-dark text-left p-5">
              <h2>Login</h2>
              <h4 class="font-weight-light">Ingrese al sistema</h4>
              <form class="pt-5" action="{{ action('LoginController@log') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Usuario</label>
                  <input class="form-control" id="usuario" placeholder="" name="nombre">
                  <i class="mdi mdi-account"></i>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" class="form-control" id="pass" placeholder="" name="pass">
                  <i class="mdi mdi-eye"></i>
                </div>
                <div-form-group class="mt-5">
                  <button class="btn btn-block btn-warning btn-lg font-weight-medium" type="submit">Ingresar</button>
                </div-form-group>
                <div class="mt-3 text-center">
                  <a href="#" class="auth-link text-white">Olvidó su contraseña?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Toastr para la notificaciones -->
  <script src="{{ asset('js/toastr.min.js') }}"></script>
</body>

</html>