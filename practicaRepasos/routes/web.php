<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/portada', function () {
    return view('portada');
});
Route::get('/repaso1', function () {
    return view('repaso1');
});
