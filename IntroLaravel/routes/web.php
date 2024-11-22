
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;



Route::get('/formulario', [clienteController::class, 'create'])->name('formu');
Route::get('/', [clienteController::class, 'home'])->name('inicio');
Route::get('/clientes', [clienteController::class, 'index'])->name('consulta');
Route::POST('/Cliente', [clienteController::class, 'store'])->name('rutaenviar');

Route::get('/formularioedit/{id}', [clienteController::class, 'edit'])->name('formularioEditar');
Route::put('/actualizar/{id}', [clienteController::class, 'update'])->name('actualizar');
Route::delete('/eliminar/{id}', [clienteController::class, 'destroy'])->name('eliminarCliente');