<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Biblioteca Toncha - Sistema de Gestión">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/js/app.js'])

    <title>Biblioteca Toncha</title>
</head>
<body class="min-h-screen bg-light">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('principal') }}">{{__('Biblioteca Toncha')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('principal') }}">{{__('Principal')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('registro') }}">{{__('Registro libro')}}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Contenido Principal -->
    <main class="py-4">
        <div class="container">
           

            @yield('contenido')
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="bg-dark text-white py-3 mt-auto">
        <div class="container text-center">
            <p class="mb-0">
                Biblioteca Toncha &copy; {{ date('Y') }} - 
                {{ date('d') }} de {{ strftime('%B') }} del {{ date('Y') }}
            </p>
        </div>
    </footer>
</body>
</html>
