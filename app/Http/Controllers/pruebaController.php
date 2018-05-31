<?php

namespace Aprendizajes\Http\Controllers;

use Illuminate\Http\Request;
use Aprendizajes\prueba;
use aprendizajes\prueba2;

class pruebaController extends Controller
{
    function escribirPrueba()
    {
        $sistema = prueba::Select('sistema')->where('sistema' == 'java')->get();
        $controller = prueba2::Select('controlador')->where('leonel' == 'gay')->get();
        
        session()->put('sistemas',$sistema);
        return view('/formdeprueba');
    }
}
