@extends('layout')

@section('avatar')
    {{ Session::get('avatar')}}
@stop

@section('userName')
    {{ ucfirst(Session::get('nombre'))}} {{ ucfirst(Session::get('apellido'))}}
@stop

@section('userRole')
    {{ ucfirst(Session::get('rol'))}}
@stop

@section('sidebar')
    <li class="nav-item"><a class="nav-link" href="{{ route('importarAprendizajes') }}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Importar aprendizajes</span></a></li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Espacios curriculares</span><i class="menu-arrow"></i></a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
              @foreach (Session::get('espacios') as $espacio)
                <li class="nav-item"> <a class="nav-link" href="{{ route('espacio') }}">{{ str_replace('_', " ", ucfirst($espacio->nombre)) }}</a></li>
            @endforeach
          </ul>
        </div>
    </li>
@stop

@section('mainContent')
<h1>Hola administradorrrrrrrrrrrr</h1>
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="card-text text-right">Total Revenue</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0">$65,650</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-receipt text-warning icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="card-text text-right">Orders</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0">3455</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-poll-box text-teal icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="card-text text-right">Sales</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0">5693</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-account-location text-info icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="card-text text-right">Employees</p>
              <div class="fluid-container">
                <h3 class="card-title font-weight-bold text-right mb-0">246</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3">
            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
          </p>
        </div>
      </div>
    </div>
</div>



<div class="card-columns">
    @for ($i = 0; $i < 9; $i++)
    <div class="card text-white bg-dark">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Entornos digitales</h5>
            <p class="card-text"><small class="text-muted">1er año - Ciclo básico</small></p>
        </div>
      </div>
    @endfor
</div>


@stop

@section('javascriptCode')
    var msg = '<?php  echo ucfirst(Session::get('nombre')) . " has ingresado al sistema correctamente" ?>';
    toastr.options.showMethod = 'slideDown';
    toastr.options.hideMethod = 'slideUp';
    toastr.options.closeMethod = 'slideUp';
    toastr.options.progressBar = true;
    toastr.success(msg);
@stop
