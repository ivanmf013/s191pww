
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;



Route::resource('cliente',clienteController::class);
Route:get('/'[ClienteController::class,'home'])->name('rutainicio');