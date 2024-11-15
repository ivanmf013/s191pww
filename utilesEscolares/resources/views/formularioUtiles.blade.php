<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">
    <title>UTILES ESCOLARES</title>
</head>
<body>
<div class="container mt-5 col-md-6">
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            UTILES ESCOLARES
        </div>
        <div class="card-body text-justify">
            @if(session('exito'))
                <h5 class="text-success">{{ session('exito') }}</h5>
            @endif

            <form method="POST" action="{{ route('guardar.utiles') }}">
                @csrf
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                    <small class="text-danger fts-italic">{{$errors->first('nombre')}}</small>
                </div>
                <div class="mb-3">
                    <label for="Marca" class="form-label">Marca: </label>
                    <input type="text" class="form-control" name="Marca" value="{{old('Marca')}}">
                    <small class="text-danger fts-italic">{{$errors->first('Marca')}}</small>
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad: </label>
                    <input type="text" class="form-control" name="Cantidad" value="{{old('Cantidad')}}">
                    <small class="text-danger fts-italic">{{$errors->first('Cantidad')}}</small>
                </div>
                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm">Guardar Utiles</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>