@section('slider')
              <ul id="portfolio-demo">
                <li title="This is caption 1 <a href='#link'>Even with links!</a>">
                  <a href="#slide1"><img src="{{ asset('images/header.jpg') }}" alt="demo1_1"></a>
                </li>
                <li title="This is caption 2">
                  <a href="#slide2"><img src="{{ asset('images/header.jpg') }}"  alt="demo1_2"></a>
                </li>
                <li title="And this is some very long caption for slide 3. Yes, really long.">
                  <a href="#slide3"><img src="{{ asset('images/header.jpg') }}" alt="demo1_3"></a>
                </li>
                <li title="And this is some very long caption for slide 4.">
                  <a href="#slide4"><img src="{{ asset('images/header.jpg') }}" alt="demo1_4"></a>
                </li>
              </ul>
@stop
<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema de aprendizajes - Escuela experimental ProA</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('node_modules/simple-line-icons/css/simple-line-icons.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/slippry.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
  <!-- endinject -->
  <!-- Toastr para la notificaciones -->
  <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <!--<a class="navbar-brand brand-logo" href="index.html"><img src="images/logo2.png" alt="logo"/></a>-->
        <!--<a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo2.png" alt="logo"/></a>-->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="{{ url('/logout')}}" class="nav-link"><i class="mdi mdi-calendar"></i>Salir del sistema</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" href="{{url('/sedes')}}">
              <i class="mdi mdi-email-variant"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-variant"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">Hay 3 mails sin responder
                </p>
                <span class="badge badge-info badge-pill float-right">Ver todos</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Paula gonzalez
                    <span class="float-right font-weight-light small-text">Hace 2 horas</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Cierre de planificaciones
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Lucas Mazzola
                    <span class="float-right font-weight-light small-text">Hace 15 minutos</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Carga de aprendizajes de Entornos Digitales
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Mariela Mendizabal
                    <span class="float-right font-weight-light small-text">Hace 3 horas</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Entrega de papeles
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="#">
              <img class="img-xs rounded-circle" src="@yield('avatar')" alt="">
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="@yield('avatar')" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">@yield('userName')</p>
                <p class="designation">@yield('userRole')</p>
                <button class="badge badge-teal mx-auto mt-3" onclick="window.location='{{ route('editarPerfil') }}'">Editar perfil</button>
              </div>
            </div>
          </li>
          @yield('sidebar')
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-flex alifn-items-center">
                <p>Acá va info de la página actual bla bla.</p>
                <a href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Opciones</a>
                <i class="mdi mdi-close popup-dismiss"></i>
              </span>
              @yield('slider')

            </div>
          </div>
            @yield('mainContent')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Sistema creado por 4to año de ProA sede capital © 2017</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('js/fontawesome-all.js') }}"></script>
  <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/misc.js') }}"></script>
  <script src="{{ asset('js/slippry.min.js') }}"></script>
  
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="{{ asset('js/maps.js') }}"></script>
  <!-- End custom js for this page-->
  <!-- Toastr para la notificaciones -->
  <script src="{{ asset('js/toastr.min.js') }}"></script>
</body>
<script>
  @yield('javascriptCode')
  jQuery('#portfolio-demo').slippry({
    slippryWrapper: '<div class="sy-box pictures-slider" />', // wrapper to wrap everything, including pager
    // options
    adaptiveHeight: false, // height of the sliders adapts to current slide
    captions: false, // Position: overlay, below, custom, false
    // pager
    pager: false,
    // controls
    controls: false,
    autoHover: false,
    // transitions
    transition: 'kenburns', // fade, horizontal, kenburns, false
    kenZoom: 140,
    speed: 6000 // time the transition takes (ms)
});
</script>
</html>