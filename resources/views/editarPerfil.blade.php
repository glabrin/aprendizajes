@if(null !== Session::get('nombreUsuario')) 
@extends('layout') 
@section('avatar') {{ Session::get('avatar')}} 
@stop 
@section('userName')
{{ ucfirst(Session::get('nombre'))}} {{ ucfirst(Session::get('apellido'))}} 
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
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex align-items-center justify-items-center flex-column">
                        <div class="text-center">
                            <img src="{{Session::get('avatar')}}" class="rounded-circle" width="100" height="100" />
                        </div>
                        <div class="text-center mt-3">
                            <i class="fa fa-quote-right icon-grey-big"></i>
                        </div>
                        <h5 class="text-center bolder">{{ucfirst(Session::get('nombre')) . " " . ucfirst(Session::get('apellido'))}}</h5>
                        <h6 class="text-center text-muted">{{ucfirst(Session::get('rol'))}}</h6>
                    </div>
                    <form class="form" role="form" autocomplete="off" action="{{ route('cambiosUsuario')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Usuario</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" value="{{Session::get('nombreUsuario')}}" id="exampleInputName1" placeholder="Nombre Usuario"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                            <div class="col-lg-9">
                                <input type="text" name="nombre" class="form-control" value="{{ucfirst(Session::get('nombre'))}}" id="exampleInputName1"
                                    placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Apellido</label>
                            <div class="col-lg-9">
                                <input type="text" name="apellido" class="form-control" value="{{ucfirst(Session::get('apellido'))}}" id="exampleInputEmail3"
                                    placeholder="apellido">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Contraseña</label>
                            <div class="col-lg-9">
                                <input type="password" name="pass" class="form-control" value="{{Session::get('pass')}}" id="exampleInputPassword4" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Avatar</label>
                            <div class="col-lg-9">
                                <input type="file" name="avatar" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

@stop @else
<script>
    window.location = "/accesoDenegado";
</script>
@endif