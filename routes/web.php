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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function (){
    return view('holamundo');
});

Route::post('/hola-mundo', function (){
    return 'Hola Mundo por POST!!';
});

Route::get('/contacto/{nombre?}/{edad?}', function ($nombre='LOLO', $edad=null) {

    /*return view('contacto', array (
        "nombre" => $nombre,
        "edad"   => $edad
    ));*/

    return view('contacto.contacto')->with('nombre', $nombre)
                                        ->with('edad', $edad)
                                        ->with('frutas', array('naranja','pera','sandia','fresa','melon','piña'));
})->where([
        "nombre" => '[A-Za-z]+',
        "edad" => '[0-9]+'
    ]);


Route::get('/frutas', 'FrutasController@index');
Route::get('/naranjas', 'FrutasController@naranjas');
Route::get('/peras', 'FrutasController@peras');
