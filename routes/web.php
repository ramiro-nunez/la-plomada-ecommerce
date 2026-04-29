<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\RegisterLoginController;
use App\Http\Controllers\ProductoController;

/* Rutas que solo renderizan vistas */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contactanos', function () {
    return view('contactanos');
});
Route::get('/quienes-somos', function () {
    return view('quienes-somos');});
Route::get('/comercio', function () {
    return view('comercio');
});
Route::get('/terms', function () {
    return view('terminos');
});
Route::get('/productos', function () {
    return view('productos');
});
Route::get('/iniciar-sesion', function () {
    return view('iniciar-sesion');
});
Route::get('/registrarse', function () {
    return view('registro-usuario');
});
/* Rutas que utilizan controlador */
Route::post('/contactanos', [ContactoController::class, 'procesar']);
Route::post('/registrarse', [RegisterLoginController::class, 'registrar']);
Route::post('/iniciar-sesion', [RegisterLoginController::class, 'loguear']);
Route::get('/salir', [RegisterLoginController::class, 'salir']);