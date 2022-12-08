<?php
include('conexion.php');
$numero_control = $_REQUEST['numero_control'];
$nombre = $_REQUEST['nombre'];
$apellido_paterno = $_REQUEST['apellidoPaterno'];
$apellido_materno = $_REQUEST['apellidoMaterno'];
$semestre = $_REQUEST['semestre'];
$turno = $_REQUEST['turno'];
$carrera = $_REQUEST['carrera'];

$consulta = "UPDATE alumno SET
    nombre = '$nombre',
    apellido_paterno = '$apellido_materno',
    apellido_materno = '$apellido_materno',
    semestre = $semestre,
    turno = '$turno',
    carrera = '$carrera'
    WHERE numero_control = $numero_control
";

$registro = mysqli_query($con, $consulta);
header('Location: index.php');