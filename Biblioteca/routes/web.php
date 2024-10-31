<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('principal'); 
});

Route::view('/registro', 'registro');  

Route::post('/libros', function() {
    return "Libro registrado";
});
