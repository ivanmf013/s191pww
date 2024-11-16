<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  //importacion QueryBuilder
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{

    public function home() {
        return view('inicio');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $consultaClientes= DB::table('cliente')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * sirve para abrir el formulario.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Aqui preparo el insert 
     */
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        $usuario= $request->input('txtnombre');
        session()->flash('exito','se guardo el usuario: '.$usuario);
        return to_route('formu');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}