<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function getIndex(){
        //como conseguir todas las notas

        $notes = DB::table('notes')->orderBy('id', 'desc')->get();

        return view('notes.index', array(
            "notes" => $notes
        ));
    }

    public function getNote($id){       //obtener informacion de la base de datos
        //conseguir una nota concreta
        $note = DB::table('notes')->select('id','title','description')->where('id', $id)->first();

        if(empty($note)){
            return redirect()->action('NotesController@getIndex');
        }

        return view('notes.note', array(
            "note" => $note
        ));
    }
    
    public function postNote(Request $request){     //insertar registros en la base de datos
        $note = DB::table('notes')->insert(array(
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ));

        return redirect()->action('NotesController@getIndex');
    }

    public function getSaveNote(){
        return view('notes.saveNote');
    }

    public function getDeleteNote($id){
        //Eliminar una nota concreta
        $note = DB::table('notes')->where('id',$id)->delete();

        return redirect()->action('NotesController@getIndex')->with('status','Nota borrada correctamente');

    }

    public function postUpdateNote($id, Request $request){
        $note = DB::table('notes')->where('id',$id)->update(array(
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ));

        return redirect()->action('NotesController@getIndex')->with('status', 'Nota actualizada correctamente');
    }

    public function getUpdateNote($id){
        $note = DB::table('notes')->where('id',$id)->first();

        return view('notes.saveNote',array(
                'note' => $note
        ));
    }
}
