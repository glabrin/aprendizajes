<?php

namespace Aprendizajes\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Aprendizajes\Usuario;
use Aprendizajes\Materia;
use Aprendizajes\Estudiante;
use Session;
use Image;

class usuarioController extends Controller
{
    public function editarPerfil(){
        return view('editarPerfil');
    }

    public function accesoDenegado(){
        return view('accesoDenegado');
    }
    
    public function cambiosUsuario(Request $request){
        $flag = false;
        if($request->hasFile('avatar')){
            $flag = true;
            $image = $request->file('avatar');
            $filename = time(). '.' . $image->getClientOriginalExtension()  ;
            //$request->avatar->storeAs('public/upload',$filename);
            $location = public_path('images/avatars/' . $filename );
            $avatarPath = "images/avatars/" . $filename;
            Image::make($image)->resize(200,250)->save($location);
        }

        //alojo en variables lo valores enviados por el usuario via formulario
        $Usuario = Session::get('nombreUsuario');
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $pass = $request->input('pass');

        if($flag){
            $request->session()->put('avatar',$avatarPath);
            // ejecuto una consulta de inserción en la tabla persona con los valores ingresados en el formulario
            Usuario::where('nombreUsuario', $Usuario)->update(['nombre' => $nombre,'apellido' => $apellido,'pass' => $pass,'avatar' => $avatarPath]);
        }
        else{
            Usuario::where('nombreUsuario', $Usuario)->update(['nombre' => $nombre,'apellido' => $apellido,'pass' => $pass]);
        }
         

        $request->session()->put('pass',$pass);
        $request->session()->put('nombre',$nombre);
        $request->session()->put('apellido',$apellido);
        return view('/profesor/panelProfesor');
    }
}
