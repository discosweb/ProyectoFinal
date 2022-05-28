<?php
	include 'conexion.php';
	$disquera_id= $_GET['disquera_id'];
	$query= "select Nombre,Pais from disqueras where disquera_id='$disquera_id';";
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
		<form name="update" method="post" action="edicion_disquera.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $resultado['nombre']; ?>">
			<br/>
			<label for="pais">Pais:</label>
			<input type="text" name="pais" value="<?php echo $resultado['pais']; ?>">
			<br/>
			<input type="hidden" name="id" value="<?php echo $disquera_id; ?>">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
