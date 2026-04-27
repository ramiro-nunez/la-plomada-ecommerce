<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterLoginController extends Controller
{
    public function registrar(Request $request) { 
        $nombre = $request->input('nombre'); 
        $email = $request->input('email'); 
        $contrasena = $request->input('contrasena');
        $mensaje= "Gracias por registrarte, ". $nombre . "! Prepará las cañas.";
        return redirect('/')->with('status', $mensaje);
    }
    public function loguear(Request $request) { 
        $email = $request->input('email');
        session(['user_email'=> $request->input('email')]);
        $mensaje = 'Bienvenido de nuevo! '. $email . ", Preparamos las mejores ofertas para vos!";
        return redirect('/')->with('status', $mensaje);
    }
    public function salir() { 
        session()->forget(['user_email']);
        
        return redirect('/')->with('status', 'Sesión cerrada!');
    }
}
