<?php



?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

	</head>

	<body>
		<h2>Ingresa los datos del grupo</h2>
		<form name="alta" method="post" action="alta_grupo.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre">
			<br/>
			<label for="pais">Pais de origen:</label>
			<input type="text" name="pais">
			<br/>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
