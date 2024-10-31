<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="min-vh-100 d-flex flex-column justify-content-center align-items-center bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Registro de Nuevo Libro</h4>
                    </div>
                    <div class="card-body">
                        <!-- Formulario de registro de libro -->
                        <form action="/libros" method="POST">
                            @csrf  <!-- Token de seguridad -->

                            <div class="mb-3">
                                <label for="isbn" class="form-label">ISBN</label>
                                <input type="text" class="form-control" id="isbn" name="isbn" required>
                            </div>

                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>

                            <div class="mb-3">
                                <label for="autor" class="form-label">Autor</label>
                                <input type="text" class="form-control" id="autor" name="autor" required>
                            </div>

                            <div class="mb-3">
                                <label for="paginas" class="form-label">Páginas</label>
                                <input type="number" class="form-control" id="paginas" name="paginas" required>
                            </div>

                            <div class="mb-3">
                                <label for="anio" class="form-label">Año</label>
                                <input type="number" class="form-control" id="anio" name="anio" required>
                            </div>

                            <div class="mb-3">
                                <label for="editorial" class="form-label">Editorial</label>
                                <input type="text" class="form-control" id="editorial" name="editorial" required>
                            </div>

                            <div class="mb-3">
                                <label for="email_editorial" class="form-label">Email de Editorial</label>
                                <input type="email" class="form-control" id="email_editorial" name="email_editorial" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Registrar Libro</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
