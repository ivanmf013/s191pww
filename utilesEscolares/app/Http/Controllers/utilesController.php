<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorUtiles;

use Illuminate\Http\Request;

class utilesController extends Controller
{
    public function insert() {
        return view('formularioUtiles');
    }

    public function guardarUtiles(validadorUtiles $peticion){
        $nombre = $peticion->input('nombre');
        $marca = $peticion->input('Marca');
        
        session()->flash('exito', "<h5>Se guardó el útil: $nombre, Marca: $marca</h5>");
        return to_route('formulario');
    }
}

