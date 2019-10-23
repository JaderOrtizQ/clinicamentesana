<?php
/*
CRUD con PostgreSQL y PHP

================================
conexion a la base de datos  y traer un objeto PDO 
================================
 */
$contraseña = "system";
$usuario = "postgres";
$nombreBaseDeDatos = "clinica";
$rutaServidor = "127.0.0.1";
$puerto = "5433";
try {
    $conexion = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
