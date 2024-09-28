@extends('layouts.plantilla1')

@section('titulo','Clientes')

@section('contenidoo')

<div class="container mt-5 col-md-8">

<div class="card text-justify font-monospace">
    <div class="card-header fs-5 text-primary">
        Morales Flores Alan Ivan 
    </div>

    <div class="card-body">
        <h5 class="fw-bold"> ivan.morales@outlook.com</h5>
        <h5 class="fw-medium"> 4461365534 </h5>
        <p class="card-text fw-lihgter"></p>
    </div>

    <div class="card-footer text-muted">
        <button type="submit" class="btn btn-warning btn-sm"> Actualizar </button>
        <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
    </div>

</div>


@endsection 