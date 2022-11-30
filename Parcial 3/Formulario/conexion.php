<?php

session_start();

$servidor = "localhost";
$basedatos = "baseavion";
$usuario = "root";
$password = "root";

$con = mysqli_connect($servidor, $usuario, $password, $basedatos) or die("No se pudo conectar a la base de datos");