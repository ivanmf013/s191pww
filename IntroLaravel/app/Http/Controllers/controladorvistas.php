<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function procesarCliente(Request $peticion ) {
        
        //redireccion usando la ruta
        //return redirect('/'); 

        //redirección usando el nombre de ruta
        //return redirect()->route('consulta');

        
        //redirección al origen de la peticion 
        //return back();

        //redireccion con valores adjunto (variables, arreglos etc..)
        //$id=[['usuario'=>'1'],['usuario'=>'2']];
        //return view('formulario', compact('id'));
        
        $validacion = $peticion->validate([
            'txtnombre'=> 'required|min:3|max:20',
            'txtapellido'=> 'required',
            'txtcorreo'=> 'required|email:rfc,dns',
            'txttelefono'=> 'required|numeric',
        ]);
        
        //redireccion enviando msj en session 
        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','se guardo el usuario: '.$usuario);
        return to_route('formu');
    }
}
