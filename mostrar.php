<?php
/*
CRUD con PostgreSQL y PHP

*/
?>
<?php
include_once "conexion.php";
$sentencia = $conexion->query("select id, nombre, apellido, cedula, edad from clinica");
$clinica = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php include_once "encabezado.php" ?>
<div class="row">

	<div class="col-12">
		<h1>Listado Existente</h1>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered bordered">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cedula</th>
						<th>Edad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach($clinica as $clinica){ ?>
						<tr>
							<td><?php echo $clinica->id ?></td>
							<td><?php echo $clinica->nombre ?></td>
							<td><?php echo $clinica->apellido ?></td>
							<td><?php echo $clinica->cedula ?></td>
							<td><?php echo $clinica->edad ?></td>

							<td><a class="btn btn-warning orange darken-1" href="<?php echo "editar.php?id=" . $clinica->id?>">Editar</a></td>
							<td><a class="btn btn-danger red accent-4" href="<?php echo "eliminar.php?id=" . $clinica->id?>">Eliminar</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include_once "pie.php" ?>