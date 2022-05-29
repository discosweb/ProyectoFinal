<?php
	include 'conexion.php';
	$cancion_id= $_GET['cancion_id'];
	$query= "select titulo from canciones where cancion_id='$cancion_id';";
	$ejecucion = pg_query($con, $query);
	$resultado = pg_fetch_assoc($ejecucion);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

	</head>

	<body>
		<h2>Actualiza los datos de la canción</h2>
		<form name="update" method="post" action="edicion_cancion.php">
			<label for="titulo">Titulo:</label>
			<input type="text" name="titulo" value="<?php echo $resultado['titulo']; ?>">
			<br/>
			<input type="hidden" name="id" value="<?php echo $cancion_id; ?>">
			<input type="submit" value="Enviar">
		</form>
<?php
		echo "<a href='compositorCancion.php?cancion_id=".$cancion_id."'>Editar compositores</a>";
		echo "<a href='catalogo_canciones.php'>Volver a catalogo</a>";
	?>
	
	</body>

</html>
