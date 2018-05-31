<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
                        <form class="form" role="form"  action= method= enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Usuario</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" value= id="exampleInputName1" placeholder="Nombre Usuario"
                                        disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                                <div class="col-lg-9">
                                    <input type="text" name="nombre" class="form-control" value= id="exampleInputName1"
                                        placeholder="{{Session::get('sistemas')}}">
                                </div>
                                <button class="button" href="{{ route('escribirPrueba')}}"></button>
                            </div>
                        </form>
        </div>
</div>