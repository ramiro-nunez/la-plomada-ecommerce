<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comercio', function () {
    return view('comercio');
});

Route::get('/terms', function () {
    return view('terminos');
});