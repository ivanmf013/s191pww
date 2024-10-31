<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorBiblioteca;

// Ruta para la vista principal
Route::get('/', [ControladorBiblioteca::class, 'index'])->name('principal');

// Ruta para el formulario de registro de libros (GET)
Route::get('/registro', [ControladorBiblioteca::class, 'crearRegistro'])->name('registro');  

// Ruta para registrar un libro (POST)
Route::post('/libros', [ControladorBiblioteca::class, 'guardarLibro'])->name('libros.guardar');

// Ruta para procesar peticiones POST en procesarLibro
Route::post('/procesar-libro', [ControladorBiblioteca::class, 'procesarLibro'])->name('libros.procesar');
