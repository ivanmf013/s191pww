<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\utilesController;

Route::get('/formularioUtiles', [utilesController::class, 'insert'])->name('formulario');

Route::POST('/enviarUtiles', [utilesController::class, 'guardarUtiles'])->name('');Route::get('/formularioUtiles', [utilesController::class, 'insert'])->name('formulario');
Route::post('/enviarUtiles', [utilesController::class, 'guardarUtiles'])->name('guardar.utiles');
