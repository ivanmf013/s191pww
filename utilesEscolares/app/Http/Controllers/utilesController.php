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
        
        $utiles= $peticion->input('nombre');
        session()->flash('exito','se guardo: : '.$utiles);
        return to_route('formulario');
    }

}

