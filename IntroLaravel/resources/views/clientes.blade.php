@extends('layouts.plantilla1')

@section('titulo', 'Clientes')

@section('contenidoo')

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container mt-5 col-md-8">
        @foreach ($consultaClientes as $cliente)
            <div class="card text-justify font-monospace mt-3">
                <div class="card-header fs-5 text-primary">
                    {{$cliente->nombre}} {{$cliente->apellido}}
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">{{$cliente->correo}}</h5>
                    <h5 class="fw-medium">{{$cliente->telefono}}</h5>
                    <p class="card-text fw-lighter"></p>
                </div>
                <div class="d-flex justify-content-between p-3">
                    <a href="{{ route('formularioEditar', $cliente->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('eliminarCliente', $cliente->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
