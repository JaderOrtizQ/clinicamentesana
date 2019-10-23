<?php
/*
CRUD con PostgreSQL y PHP

*/
?>
<?php

if (!isset($_POST["nombre"]) || !isset($_POST["apellido"]) || !isset($_POST["cedula"]) || !isset($_POST["edad"])) {
    exit();
}



include_once "conexion.php";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$edad = $_POST["edad"];


$sentencia = $conexion->prepare("INSERT INTO clinica(nombre, apellido, cedula, edad) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $apellido, $cedula, $edad]); 



if ($resultado === true) {

	header("Location: mostrar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
