<?php
/*
CRUD con PostgreSQL y PHP

*/
?>

<?php

if (
    !isset($_POST["nombre"]) ||
    !isset($_POST["apellido"]) ||
    !isset($_POST["cedula"]) ||
    !isset($_POST["edad"]) ||
    !isset($_POST["id"])
) {
    exit();
}


include_once "conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$edad = $_POST["edad"];

$sentencia = $conexion->prepare("UPDATE clinica SET nombre = ?, apellido = ?, cedula = ?, edad = ? WHERE id = ?;");
$resultado = $sentencia->execute([$nombre, $apellido, $cedula, $edad, $id]); 
if ($resultado === true) {
    header("Location: mostrar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}
