<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ControladorBiblioteca extends Controller
{
    public function index()
    {
        return view('principal'); // Cargar la vista principal
    }

    public function crearRegistro()
    {
        return view('registro'); // Cargar la vista de registro de libros
    }

    public function guardarLibro(Request $request)
    {
        $validated = $request->validate([
            'isbn' => 'required|numeric|digits:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string|max:100',
            'paginas' => 'required|integer|min:1',
            'anio' => 'required|integer|digits:4|min:1000|max:' . date('Y'),
            'editorial' => 'required|string|max:100',
            'email_editorial' => 'required|email',
        ]);

        // Aquí podrías guardar el libro en la base de datos...

        return redirect()->route('registro')->with('exito', '¡Libro registrado exitosamente!');
    }

    public function procesarLibro(Request $peticion)
    {
        return $peticion->all();
    }
}
