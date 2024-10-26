<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ControladorVistas extends Controller
{
    public function home() {
        return view('inicio');
    }

    public function insert() {
        return view('formulario');
    }

    public function select() {
        return view('clientes');
    }

    public function procesarCliente(validadorCliente $peticion ) {
        
        //redireccion usando la ruta
        //return redirect('/'); 

        //redirección usando el nombre de ruta
        //return redirect()->route('consulta');

        
        //redirección al origen de la peticion 
        //return back();

        //redireccion con valores adjunto (variables, arreglos etc..)
        //$id=[['usuario'=>'1'],['usuario'=>'2']];
        //return view('formulario', compact('id'));
        
       
        //redireccion enviando msj en session 
        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','se guardo el usuario: '.$usuario);
        return to_route('formu');
    }
}
