<?php

namespace Aprendizajes\Http\Controllers;

use Illuminate\Http\Request;
use Aprendizajes\Materia;
use Aprendizajes\Estudiante;

class ProfesorController extends Controller
{
    public function espacio($nombre){
        $idMateria = Materia::select('id')->where('nombre', $nombre)->get();
        $idMateria = $idMateria[0]['id'];
        $estudiantes = Materia::find($idMateria)->estudiantes()->get();
        $estudiantesInfo = session()->put('estudiantes',$estudiantes);
        return view('profesor/espacioProfesor');
    }

    public function importarAprendizajes(){
        return view('profesor/importarAprendizajes');
    }

    public function cargarArchivo(Request $request){
        if($request->hasFile('cargar_archivo')){
            $archivo = $request->file('cargar_archivo');
            $filename = time(). '.' . $archivo->getClientOriginalExtension();
            $location = public_path('archivosTxt/' . $filename );
            $archivo->move($location, $filename); 
            $archivo = fopen($location. '/' . $filename, "r") or die("Error en la carga del archivo de texto de aprendizajes");
            while(!feof($archivo)){
                $contents = fgets($archivo);
                echo($contents);
                echo "<br>";
                
            }
        }
        else{
            print("NO viene");
        }
    }
    
}
