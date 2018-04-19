<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller
{
    // Accion que devuelve una vista
    public function getIndex(){
        return view('frutas.index')->with('frutas', array('naranja','pera','sandia','fresa','melon','piña'));
    }

    public function getNaranjas(){
        return 'Accion de NARANJAS';
    }

    public function anyPeras(){
        return 'Accion de PERAS';
    }
}
