<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function getIndex(){
        //como conseguir todas las notas

        $notes = DB::table('notes')->get();

        return view('notes.index', array(
            "notes" => $notes
        ));
    }
}
