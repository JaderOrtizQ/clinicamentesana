<?php
/*
CRUD con PostgreSQL y PHP

================================
se envía a insertar.php
================================
*/
?>
<?php include_once "encabezado.php" ?>
<div class="conteiner">
	<div class="row">
	<div class="col s12 m8 offset-m2">
		<h1>Agregar</h1>
		<form action="insertar.php" method="POST">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input required name="nombre" type="text" id="nombre" placeholder="Nombre" class="form-control">
			</div>

			<div class="form-group">
				<label for="apellido">Apellido</label>
				<input required name="apellido" type="text" id="apellido" placeholder="Apellido" class="form-control">
			</div>

			<div class="form-group">
				<label for="cedula">Cedula</label>
				<input required name="cedula" type="text" id="cedula" placeholder="Cedula" class="form-control">
			</div>

			<div class="form-group">
				<label for="edad">Edad</label>
				<input required name="edad" type="text" id="edad" placeholder="Edad" class="form-control">
			</div>
			<button type="submit" class="btn btn-success cyan">Guardar</button>
			<a href="./mostrar.php" class="btn btn-warning green accent-3">Ver todas</a>
		</form>
	</div>
</div>
	
</div>
<?php include_once "pie.php" ?>