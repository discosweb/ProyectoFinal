<?php



?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

	</head>

	<body>
		<h2>Ingresa los datos del Artísta</h2>
		<form name="alta" method="post" action="alta_artistas.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre">
			<br/>
			<label for="apellido">Apellido:</label>
			<input type="text" name="apellido">
			<br/>
			<label for="pais_nacimiento">Pais de Nacimiento:</label>
			<input type="text" name="pais_nacimiento">
			<br/>
			<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
			<input type="date" name="fecha_nacimiento">
			<br/>
			<label for="nombre_artistico">Nombre Artístico:</label>
			<input type="text" name="nombre_artistico">
			<br/>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
