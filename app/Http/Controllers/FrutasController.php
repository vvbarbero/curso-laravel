<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller
{
    // Accion que devuelve una vista
    public function index(){
        return view('frutas.index')->with('frutas', array('naranja','pera','sandia','fresa','melon','piña'));
    }

    public function naranjas(){
        return 'Accion de NARANJAS';
    }

    public function peras(){
        return 'Accion de PERAS';
    }
}
