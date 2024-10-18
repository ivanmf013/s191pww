<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada - Practica Repasos</title>
    <!-- Incluir Vite para cargar CSS y JS compilados -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background: linear-gradient(to bottom, #e3f2fd, #bbdefb);
            font-family: Arial, sans-serif;
            color: #333;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        header {
            text-align: center;
            margin-bottom: 2rem;
        }
        header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <header class="my-4">
        <img src="/img/OIP.jpg" alt="Logo de la institución" class="mb-3">
        <h1 class="display-4">Programación Web</h1>
        <p class="lead">Repaso 1 Laravel</p>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">Información del Alumno</h5>
                        <p class="card-text"><strong>Nombre:</strong> Alan Ivan Morales Flores</p>
                        <p class="card-text"><strong>Matrícula:</strong> 122042147</p>
                        <p class="card-text"><strong>Semestre:</strong> 7to</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">Detalles de la materia</h5>
                        <p class="card-text"><strong>Materia:</strong> Programación Web</p>
                        <p class="card-text"><strong>Profesor:</strong> Ivan Isay Guerra Lopez</p>
                        <p class="card-text"><strong>Horario:</strong> Lunes y viernes, 7:00 - 8:40</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>