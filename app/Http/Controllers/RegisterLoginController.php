<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterLoginController extends Controller
{
    /**
     * Procesa el registro de un nuevo usuario.
     * Genera un mensaje de bienvenida personalizado y redirige a la home.
     *
     * @param  Request  $request
     * @return RedirectResponse '/'
     */
    public function registrar(Request $request) { 
        $nombre = $request->input('nombre'); 
        $email = $request->input('email'); 
        $contrasena = $request->input('contrasena');
        $mensaje= "Gracias por registrarte, ". $nombre . "! Prepará las cañas.";
        return redirect('/')->with('status', $mensaje);
    }
    /**
     * Gestiona el inicio de sesión del usuario.
     * Almacena el email en la sesión activa y redirige a la home con un saludo.
     *
     * @param  Request  $request
     * @return RedirectResponse '/'
     */
    public function loguear(Request $request) { 
        $email = $request->input('email');
        session(['user_email'=> $request->input('email')]);
        $mensaje = 'Bienvenido de nuevo! '. $email . ", Preparamos las mejores ofertas para vos!";
        return redirect('/')->with('status', $mensaje);
    }
    /**
     * Cierra la sesión del usuario actual.
     * Elimina las credenciales de la sesión y redirige a la home.
     *
     * @return RedirectResponse '/'
     */
    public function salir() { 
        session()->forget(['user_email']);
        
        return redirect('/')->with('status', 'Sesión cerrada!');
    }
}
