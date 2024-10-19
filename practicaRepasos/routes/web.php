<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorconvertidor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portada', function () {
    return view('portada');
});

Route::get('/repaso1', [controladorconvertidor::class, 'index']);

Route::post('/convertir', [controladorconvertidor::class, 'convertir'])->name('convertir');