<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>No Encontrados</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/faviconcounter.png" />
</head>
<style>

  .button {
    padding: 25px 80px;
    font-size: 20px;
  }

  h1 {
    font-family:Arial, Helvetica, sans-serif;
    color: white;
    text-shadow: 2px 4px 4px #e6e600;
    }
  
  h3 {
  font-family: Arial, Helvetica, sans-serif;
  color: white;
  text-shadow: 1px 2px 3px #e6e600;
  }
  p {
    font-family:Arial, Helvetica, sans-serif;
    color: white;
    text-shadow: 1px 2px 2px #e6e600;
    }
</style>
<body style="background:#000;">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center text-center error-page bg-info">
        <div class="row flex-grow">
          <div class="col-lg-7 mx-auto text-white">
            <img class="animated infinite pulse" src="{{ asset('images/warning.png')}}"height="200" width="200">
            <div class="row align-items-center d-flex flex-row">
              <div class="col-lg-6 text-lg-right pr-lg-4">
                <h1>Error</h1>
              </div>
              <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                <h3 class="display-1 mb-0">Lo sentimos</h3>
                <h3 class="font-weight-light">Usted no esta logeado</h4>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-center mt-xl-2">
              <button type="button" class="button btn btn-warning text-white font-weight-medium">
                <a href="{{ url('/logout')}}" class="nav-link text-white font-weight-medium"><i class="-barcode text-black font-weight-medium"></i>Logearse</a>
                </button>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 mt-xl-2">
                <p class="text-white font-weight-medium text-center">Copyright&copy; El Proa 2018.</p>
              </div>
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
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
