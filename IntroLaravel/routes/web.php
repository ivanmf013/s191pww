
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/', [ControladorVistas::class, 'home'])->name('inicio');
Route::get('/formulario', [ControladorVistas::class, 'insert'])->name('formu');
Route::get('/clientes', [ControladorVistas::class, 'select'])->name('consulta');

Route::POST('/enviarCliente', [ControladorVistas::class, 'procesarCliente'])->name('');

/*Route::view('/','inicio')->name('inicio');

Route::view('/formulario','formulario')->name('formu');

Route::view('/consultar','clientes')->name('consulta');
*/
Route::view('/component','componentes')->name('rutacompenent');

