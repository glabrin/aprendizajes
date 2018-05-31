<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//--------- Begin Gets ----------

Route::get('/', function () {
    return view('login');
});



Route::get('/profesor/panelProfesor', function () {
    return view('profesor/panelProfesor');
});

Route::get('/logout', [
    'uses' => 'LoginController@logout',
    'as' => 'logout'
]);

Route::get('/editarPerfil', [
    'uses' => 'usuarioController@editarPerfil',
    'as' => 'editarPerfil'
]);

Route::get('espacio/{nombre}', [
    'uses' => 'ProfesorController@espacio',
    'as' => 'espacio'
]);

Route::get('/importarAprendizajes', [
    'uses' => 'ProfesorController@importarAprendizajes',
    'as' => 'importarAprendizajes'
]);
Route::get('/sedes', [
    'uses' => 'sedesController@Sedes',
    'as' => 'sedes'
]);

Route::get('/accesoDenegado', [
    'uses' => 'usuarioController@accesoDenegado',
    'as' => 'accesoDenegado'
]);

Route::get('/formdeprueba', [
    'uses' => 'pruebaController@escribirPrueba',
    'as' => 'escribirPrueba'
]);


//--------- End Gets ----------

//--------- Begin Posts ----------

// LLamado al controlador login del sistema
Route::post('/panel', [
    'uses' => 'LoginController@log',
    'as' => 'panel'
]);

Route::post('/editarUsuario', [
    'uses' => 'usuarioController@cambiosUsuario',
    'as' => 'cambiosUsuario'
]);

Route::post('/cargarArchivo', [
    'uses' => 'profesorController@cargarArchivo',
    'as' => 'cargarArchivo'
]);
//--------- End Posts ----------