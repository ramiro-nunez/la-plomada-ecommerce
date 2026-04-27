<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterLoginController extends Controller
{
    public function registrar(Request $request) { 
        $nombre = $request->input('nombre'); 
        $email = $request->input('email'); 
        $contrasena = $request->input('contrasena');
        
        return view('exito-registro', [ 'nombre' => $nombre, 'email' => $email, 'contrasena' => $contrasena ]);
    }
    public function loguear(Request $request) { 
        $contrasena = $request->input('contrasena'); 
        $email = $request->input('email'); 
        
        return view('exito-login', ['email' => $email, 'contrasena' => $contrasena ]);
    }
}
