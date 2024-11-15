
@extends('layouts.plantilla1')

@section('titulo', 'componetes Blade')

@section('contenidoo')

    <x-Card encabezado="componente 1" titulo="titulo 1" textoBoton="Guardar"> contenido de tarjeta 1</x-Card>

    <x-Card encabezado="componente 2" titulo="titulo 2" textoBoton=" No Guardar">contenido tarjeta 2</x-Card>

    <x-Alert tipo="danger"> rojo </x-Alert>
    <x-Alert tipo="warning"> amarillo </x-Alert>

@endsection 

