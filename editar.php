<?php
/*
CRUD con PostgreSQL y PHP
 */

if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "conexion.php";
$sentencia = $conexion->prepare("SELECT id, nombre, apellido, cedula, edad FROM clinica WHERE id = ?;");
$sentencia->execute([$id]);
$clinica = $sentencia->fetchObject();
if (!$clinica) {

    echo "¡No existe usuario con ese ID!";
    exit();
}


?>
<?php include_once "encabezado.php"?>
<div class="row">
	<<div class="col s12 m8 offset-m2">
		<h1>Editar</h1>
		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $clinica->id; ?>">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input value="<?php echo $clinica->nombre; ?>" required name="nombre" type="text" id="nombre" placeholder="Nombre" class="form-control">
			</div>

			<div class="form-group">
				<label for="apellido">Apellido</label>
				<input value="<?php echo $clinica->apellido; ?>" required name="apellido" type="text" id="apellido" placeholder="Apellidos" class="form-control">
			</div>

			<div class="form-group">
				<label for="cedula">Cedula</label>
				<input value="<?php echo $clinica->cedula; ?>" required name="cedula" type="number" id="cedula" placeholder="Cedula" class="form-control">
			</div>

			<div class="form-group">
				<label for="edad">Edad</label>
				<input value="<?php echo $clinica->edad; ?>" required name="edad" type="number" id="edad" placeholder="Edad" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./mostrar.php" class="btn btn-warning">Volver</a>
		</form>
		
	</div>
</div>
<?php include_once "pie.php"?>