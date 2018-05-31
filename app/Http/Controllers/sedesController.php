<?php

namespace Aprendizajes\Http\Controllers;

use Illuminate\Http\Request;
use Aprendizajes\sedes;
use Session;

class sedesController extends Controller
{
    public function sedes(Request $request){
        $response = sedes::select('nombre','direccion','codPostal','coordinador','fechaCreacion','localidad','departamento')->get();
        $response->toArray();
        
        if($response->count() != 0){
            $request->session()->put('infoSedes',$response);
        } 
        return view('sedes');
    }

}
