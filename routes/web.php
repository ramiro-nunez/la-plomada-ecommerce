<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/contactanos', function () {
    return view('contactanos');
});

Route::post('/contactanos', [ContactoController::class, 'procesar']);

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
Route::get('/', function () {
    return view('iniciar-sesion');
});
Route::get('/registrarse', function () {
    return view('registro-usuario');
});