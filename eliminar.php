<?php
/*
CRUD con PostgreSQL y PHP

*/
if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $conexion->prepare("DELETE FROM clinica WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if ($resultado === true) {
    header("Location: mostrar.php");
} else {
    echo "Algo salió mal";
}
