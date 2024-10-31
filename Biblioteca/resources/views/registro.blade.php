@extends('layouts.plantilla')

@section('titulo', 'Registro de Libro')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Registro de Nuevo Libro</h4>
            </div>
            <div class="card-body">
                <!-- Formulario de registro de libro -->
                <form action="{{ route('libros.guardar') }}" method="POST">
                    @csrf  <!-- Token de seguridad -->

                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}" required>
                        @error('isbn')
                            <small class="text-danger fst-italic">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}" required>
                        @error('titulo')
                            <small class="text-danger fst-italic">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" value="{{ old('autor') }}" required>
                        @error('autor')
                            <small class="text-danger fst-italic">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="paginas" class="form-label">Páginas</label>
                        <input type="number" class="form-control" id="paginas" name="paginas" value="{{ old('paginas') }}" required>
                        @error('paginas')
                            <small class="text-danger fst-italic">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="anio" class="form-label">Año</label>
                        <input type="number" class="form-control" id="anio" name="anio" value="{{ old('anio') }}" required>
                        @error('anio')
                            <small class="text-danger fst-italic">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="editorial" class="form-label">Editorial</label>
                        <input type="text" class="form-control" id="editorial" name="editorial" value="{{ old('editorial') }}" required>
                        @error('editorial')
                            <small class="text-danger fst-italic">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email_editorial" class="form-label">Email de Editorial</label>
                        <input type="email" class="form-control" id="email_editorial" name="email_editorial" value="{{ old('email_editorial') }}" required>
                        @error('email_editorial')
                            <small class="text-danger fst-italic">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar Libro</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
