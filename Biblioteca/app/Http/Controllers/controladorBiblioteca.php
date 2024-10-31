<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    // Por ahora, mantendremos este método como placeholder
    public function guardarLibro(Request $request)
    {
        // Aquí irán las validaciones y lógica de guardado posteriormente
        return "Libro registrado";
    }
}