<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    function insertarUsuarios(Request $request){
        $request->validate([
            'nombre' => 'required|min:4|max:64|regex:/[a-zA-Z]+[a-zA-Z0-9_]*/',
            'edad' => 'integer',

        ]
            );
        Usuarios::create($request ->all());
        return view('formu');
    }
}
