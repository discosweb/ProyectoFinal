<?php
	include 'conexion.php';
	$artista_id= $_GET['artista_id'];
	$query= "select Nombre, Apellido, Pais_Nacimiento, Fecha_Nacimiento, Nombre_Artístico
					from artistas where artista_id='$artista_id';";
	$ejecucion = pg_query($con, $query);
	$resultado = pg_fetch_assoc($ejecucion);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

	</head>

	<body>
		<h2>Actualiza los datos de la disquera</h2>
		<form name="update" method="post" action="edicion_artista.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $resultado['nombre']; ?>">
			<br/>
			<label for="apellido">Apellido:</label>
			<input type="text" name="apellido" value="<?php echo $resultado['apellido']; ?>">
			<br/>
			<label for="pais_nacimiento">Pais de Nacimiento:</label>
			<input type="text" name="pais_nacimiento" value="<?php echo $resultado['pais_nacimiento']; ?>">
			<br/>
			<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
			<input type="date" name="fecha_nacimiento" value="<?php echo $resultado['fecha_nacimiento']; ?>">
			<br/>
			<label for="nombre_artistico">Nombre Artístico:</label>
			<input type="text" name="nombre_artistico" value="<?php echo $resultado['nombre_artistico']; ?>">
			<br/>
			<input type="hidden" name="id" value="<?php echo $artista_id; ?>">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
