@extends('profesor/panelProfesor') 
@section('mainContent')
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">


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
        <form class="forms-sample" action="{{ action('profesorController@cargarArchivo') }}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Espacio curricular</label>
            <div class="col-lg-9">
              <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                    @foreach (Session::get('espacios') as $espacio)
                      <option class="nav-item"> <a class="nav-link" href="{{ route('espacio') }}">{{ str_replace('_', " ", ucfirst($espacio->nombre)) }}</a></option>
                    @endforeach
                    </select>
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Archivo de texto</label>
            <div class="col-lg-9">
              <input type="file" name="cargar_archivo" class="form-control">
            </div>
          </div>
          <button type="submit" class="btn btn-success mr-2">Guardar cambios</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>
</div>
</div>

@stop