@extends('layout') 
@section('avatar') {{ Session::get('avatar')}} 
@stop 
@section('userName') {{ ucfirst(Session::get('nombre'))}}
{{ ucfirst(Session::get('apellido'))}} 
@stop 
@section('userRole') {{ ucfirst(Session::get('rol'))}} 
@stop 
@section('sidebar')
<li class="nav-item"><a class="nav-link" href="index.html"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Importar aprendizajes</span></a></li>
<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Espacios curriculares</span><i class="menu-arrow"></i></a>
  <div class="collapse" id="general-pages">
    <ul class="nav flex-column sub-menu">
      @foreach (Session::get('espacios') as $espacio)
      <li class="nav-item"> <a class="nav-link" href="{{ route('espacio',['nombre'=>$espacio->nombre]) }}">{{ str_replace('_', " ", ucfirst($espacio->nombre)) }}</a></li>
      @endforeach
    </ul>
  </div>
</li>


@stop 
@section('slider')
@stop
@section('mainContent')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Listado de estudiantes</h4>
      <p class="card-description">
        Acá algún subtítulo que sea de utilidad
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                Sexo
              </th>
              <th>
                Nombre
              </th>
              <th>
                Apellido
              </th>
              <th>
                Estado
              </th>
              <th>
                Acciones
              </th>
            </tr>
          </thead>
          <tbody>

            @foreach (Session::get('estudiantes') as $estudiantes)
              <tr>
                <td class="py-1">
                  <img src="images/faces-clipart/pic-1.png" alt="image">
                </td>
                <td>
                    {{$estudiantes["nombre"]}}
                </td>
                <td>
                    {{$estudiantes["apellido"]}}
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  <button type="button" class="btn btn-primary" data-nombre="{{$estudiantes["nombre"]}}" data-apellido="{{$estudiantes["apellido"]}}" data-toggle="modal" data-target="#exampleModal" >
                    Cargar aprendizajes
                  </button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="title" class="modal-title">Modal header</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body">
        <p>some content</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@stop
@section('javascriptCode')
$('#exampleModal').on('show.bs.modal', function(e) {
  var nombreEst = $(e.relatedTarget).data('nombre');
  var apellidoEst = $(e.relatedTarget).data('apellido');
  var title = "Carga de aprendizajes de " + nombreEst + " " + apellidoEst;
  $('#title').html(title);
});
@stop