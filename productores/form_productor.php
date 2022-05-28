<?php



?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

	</head>

	<body>
		<h2>Ingresa los datos del productor</h2>
		<form name="alta" method="post" action="alta_productor.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre">
			<br/>
			<label for="apellido">Apellido:</label>
			<input type="text" name="apellido">
			<br/>
			<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
			<input type="text" name="fecha_nacimiento">
			<br/>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
