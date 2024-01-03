<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$mensaje_form = $_POST['mensaje'];

// Conexion a base de datos

// $conexion = mysqli_connect('localhost', 'root', '', 'php_inicial_999191534') or exit ('No se pudo conectar a la base de datos');

$conexion = mysqli_connect('localhost', 'id21615479_rodrigo', 'php_mysql_Basico1', 'id21615479_php_inicial_999191534') or exit ('No se pudo conectar a la base de datos');

mysqli_query($conexion, "INSERT INTO consultas VALUE(DEFAULT, '$nombre_form', '$apellido_form', '$edad_form', '$mensaje_form') ");

mysqli_close($conexion);

header("Location: contacto.php?ok");