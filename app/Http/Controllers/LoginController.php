<?php

namespace Aprendizajes\Http\Controllers;
use Aprendizajes\Usuario;
use Aprendizajes\Materia;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Método que realiza el login de un usuario del sistema
    public function log(Request $request){
        $usuario = $request->input('nombre');
        $contraseña = $request->input('pass');

        $request->session()->put('nombreUsuario',$usuario);
        $request->session()->put('pass',$contraseña);

        $response = Usuario::select('nombreUsuario','pass','rol','nombre','apellido','avatar')->where('nombreUsuario', $usuario)->where('pass', $contraseña)->get();
        if($response->count() === 1){
            $rol = $response[0]['rol'];

            $materias = Materia::select('nombre','año')->where('profesor_usuario', $usuario)->get();

            //Cargo en la sesión datos del usuario que acaba de ingresar en el sistema
            $request->session()->put('nombreUsuario',$usuario);
            $request->session()->put('pass',$contraseña);
            $request->session()->put('nombre',$response[0]['nombre']);
            $request->session()->put('apellido',$response[0]['apellido']);
            $request->session()->put('rol',$response[0]['rol']);
            $request->session()->put('avatar',$response[0]['avatar']);
            $request->session()->put('espacios',$materias);

            //carga de views correspondientes al rol del usuario ingresante
            if($rol === "profesor"){
                return view('profesor/panelProfesor',$materias);
            }
            else if($rol === "preceptor"){
                return view('panelPreceptor', array('rol' => $rol,'nombre' => $nombre,'apellido' => $apellido));
            }
            else if($rol === "administrador"){
                return view('administrador/panelAdministrador');
            }
        }
        else{
            return redirect('/');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}