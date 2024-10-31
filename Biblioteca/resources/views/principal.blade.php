@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Noticia Literaria del Día</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">Isabel Allende presenta su nueva novela</h5>
                <p class="card-text">
                    La reconocida autora chilena continúa cautivando a lectores de todo el mundo
                    con sus historias que mezclan realidad y ficción, presentando su más reciente
                    obra que promete mantener a los lectores pegados a sus páginas desde el primer
                    capítulo hasta el final.
                </p>
                <p class="card-text">
                    La presentación del libro se llevará a cabo en la Biblioteca Toncha
                    el próximo mes, donde los lectores podrán conocer a la autora y obtener
                    una copia firmada de su nuevo libro.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection