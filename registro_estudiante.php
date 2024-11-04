<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'logs/header.php'; ?>

<div class="container mt-5" style="background: #f8f9fa; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
    <h2 class="text-center mb-4">Registrar Nuevo Estudiante</h2>

    <form method="POST" action="./operacionesPHP/alumno/guardar_estudiante.php">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="text" class="form-control" name="dni" id="dni" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono" required>
        </div>
        <div class="d-flex justify-content-end gap-3">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <button type="reset" class="btn btn-danger">Borrar</button>
        </div>
    </form>
</div>

<?php include 'logs/footer.php'; ?>

<!-- Enlace a Bootstrap Bundle JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
