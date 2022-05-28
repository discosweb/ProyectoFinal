<?php
	include 'conexion.php';
	$productor_id= $_GET['productor_id'];
	$query= "select Nombre, Apellido, Fecha_nacimiento from productores
					where productor_id='$productor_id';";
	$ejecucion = pg_query($con, $query);
	$resultado = pg_fetch_assoc($ejecucion);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

	</head>

	<body>
		<h2>Actualiza los datos del productor</h2>
		<form name="update" method="post" action="edicion_productor.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $resultado['nombre']; ?>">
			<br/>
			<label for="apellido">Apellido:</label>
			<input type="text" name="apellido" value="<?php echo $resultado['apellido']; ?>">
			<br/>
			<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
			<input type="date" name="fecha_nacimiento" value="<?php echo $resultado['fecha_nacimiento']; ?>">
			<br/>
			<input type="hidden" name="id" value="<?php echo $productor_id; ?>">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
