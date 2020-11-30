<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personaModel;
class personaController extends Controller
{
    
    public function crearPersona(Request $request){
        $p = new PersonaModel;

        $p -> nombre = $request->input('nombre');
        $p -> apellido = $request->input('apellido');
        $p -> mail = $request->input('email');
        $p -> save();

        $n = $request->input('nombre');

      
        return view('altaPersona', ['personaCreadaNombre' => $n]);

    }

    public function listarTodasLasPersonas(){
        $personas = personaModel::all();

        return view('personas', ['personas' => $personas]);

    }
}
