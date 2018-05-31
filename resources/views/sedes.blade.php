@extends('layout') 
@section('avatar') {{ Session::get('avatar')}} 
@stop 
@section('userName') {{ ucfirst(Session::get('nombre'))}}
{{ ucfirst(Session::get('apellido'))}} 
@stop 
@section('userRole') {{ ucfirst(Session::get('rol'))}} 
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
@section('slider') 
@stop 
@section('mainContent')
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Sedes proA</h5>
        <div class="row">
          <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Sede</th>
                </tr>
              </thead>
              <tbody>
                @foreach (Session::get('infoSedes') as $info)
                <tr>
                  <td>
                    <div class="flag">
                      <img src="../images/flags/US.png">
                    </div>
                  </td>
                  <td>{{$info["nombre"]}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div class="rounded" id="map" style="min-height:300px;"></div>
          </div>
          <br>

        </div>
      </div>
    </div>
  </div>
</div>


@stop