<?php

use Illuminate\Support\Facades\Route;

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