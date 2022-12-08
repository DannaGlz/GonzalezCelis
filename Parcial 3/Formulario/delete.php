<?php
include 'conexion.php';

if (isset($_GET['numero_control'])) {
    $numero_control = $_GET['numero_control'];
    $consulta = "DELETE FROM alumno WHERE numero_control = $numero_control";
    $resultado = mysqli_query($con, $consulta);

    header("Location: index.php");
}