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

    public function getNote($id){
        //conseguir una nota concreta
        $note = DB::table('notes')->select('id','title','description')->where('id', $id)->first();

        var_dump($note);
        die();

        /*if(empty($note)){
            return redirect()->action('NotesController@getIndex');
        }*/

        return view('notes.note', array(
            "note" => $note
        ));
    }
}
