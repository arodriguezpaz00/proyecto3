<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asociar Estudiantes a Asignaturas</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'logs/header.php' ?>

<div class="container" style="margin-top: 30px; padding: 20px; background: #fff; border-radius: 8px;">
    <h2 class="mb-4">Asociar Estudiante a Asignatura</h2>
    <form method="POST" action="./operacionesPHP/asignatura/asociar_asignatura.php">
        <div class="form-group mb-3">
            <label for="estudiante_id">Seleccionar Estudiante</label>
            <select name="estudiante_id" id="estudiante_id" class="form-control" required>
                <!-- Opciones de estudiantes se generan dinámicamente desde la base de datos -->
                <?php
                // Conexión a la base de datos
                $conexion = mysqli_connect("localhost", "root", "", "academia");
                $query = "SELECT id, nombre FROM estudiantes";
                $result = mysqli_query($conexion, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="asignatura_id">Seleccionar Asignatura</label>
            <select name="asignatura_id" id="asignatura_id" class="form-control" required>
                <!-- Opciones de asignaturas se generan dinámicamente desde la base de datos -->
                <?php
                $query = "SELECT id, nombre FROM asignaturas";
                $result = mysqli_query($conexion, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
                }
                mysqli_close($conexion);
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Asociar</button>
    </form>
</div>

<?php include 'logs/footer.php' ?>
<!-- Bootstrap Bundle JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
