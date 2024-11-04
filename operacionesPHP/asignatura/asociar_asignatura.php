<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "academia");

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Obtener datos del formulario
$estudiante_id = mysqli_real_escape_string($conexion, $_POST['estudiante_id']);
$asignatura_id = mysqli_real_escape_string($conexion, $_POST['asignatura_id']);

// Insertar la asociación en la tabla intermedia
$query = "INSERT INTO estudiante_asignatura (estudiante_id, asignatura_id) VALUES ('$estudiante_id', '$asignatura_id')";
if (mysqli_query($conexion, $query)) {
    echo "<script>alert('Asociación guardada correctamente'); window.location.href='asociar_asignatura.php';</script>";
} else {
    echo "<script>alert('Error al asociar: " . mysqli_error($conexion) . "'); window.history.back();</script>";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
