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


/*Route::get('/frutas', 'FrutasController@getIndex');
Route::get('/naranjas/{admin?}', ['middleware' => 'EsAdmin',
                         'uses' => 'FrutasController@getNaranjas'
                        ]);
Route::get('/peras', 'FrutasController@anyPeras');*/

//Route::controller('frutas','FrutasController');

Route::group( ['prefix' => 'fruteria'] , function(){

    Route::get('/frutas', 'FrutasController@getIndex');
    Route::get('/naranjas/{admin?}', ['middleware' => 'EsAdmin',
                                      'uses' => 'FrutasController@getNaranjas',
                                      'as' => 'naranjitas'   //alias de la ruta
    ]);
    Route::get('/peras', 'FrutasController@anyPeras');

});

Route::post('/recibir', 'FrutasController@recibirFormulario');

Route::get('notas', 'NotesController@getIndex');
