<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorBiblioteca;


Route::get('/', [ControladorBiblioteca::class, 'index'])->name('principal');


Route::get('/registro', [ControladorBiblioteca::class, 'crearRegistro'])->name('registro');  


Route::post('/libros', [ControladorBiblioteca::class, 'guardarLibro'])->name('libros.guardar');


Route::post('/procesar-libro', [ControladorBiblioteca::class, 'procesarLibro'])->name('libros.procesar');
