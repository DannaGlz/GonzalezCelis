<?php
include('./conexion.php');

$numero_control = $_POST['buscarNumeroControl'];

$consulta = "SELECT * FROM alumno WHERE numero_control = $numero_control";
$registro = mysqli_query($con, $consulta) or die("No se puede hacer un SELECT");

$result = mysqli_fetch_array($registro, MYSQLI_ASSOC);

mysqli_close($con);

echo json_encode($result);