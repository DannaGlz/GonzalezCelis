<?php
include('./conexion.php');

if (isset($_POST['agregarAlumno'])) {
    $numero_control = $_POST['numero_control'];
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $semestre = $_POST['semestre'];
    $turno = $_POST['turno'];
    $carrera = $_POST['carrera'];

    $consulta = "INSERT INTO alumno (numero_control, nombre, apellido_paterno, apellido_materno, semestre, turno, carrera) VALUES ($numero_control, '$nombre', '$apellidoPaterno', '$apellidoMaterno', $semestre, '$turno', '$carrera')";

    $registro = mysqli_query($con, $consulta);

    $_SESSION['mensaje'] = "Alumno agregado correctamente";
    $_SESSION['tipo'] = "success";

    header("Location: index.php");
}

?>
