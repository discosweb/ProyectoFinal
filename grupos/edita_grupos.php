<?php
	include 'conexion.php';
	$grupo_id= $_GET['grupo_id'];
	$query= "select nombre, pais_origen from grupos where grupo_id='$grupo_id';";
	$ejecucion = pg_query($con, $query);
	$resultado = pg_fetch_assoc($ejecucion);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

	</head>

	<body>
		<h2>Actualiza los datos del grupo</h2>
		<form name="update" method="post" action="edicion_grupo.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $resultado['nombre']; ?>">
			<br/>
			<label for="pais">Pais:</label>
			<input type="text" name="pais" value="<?php echo $resultado['pais_origen']; ?>">
			<br/>
			<input type="hidden" name="id" value="<?php echo $grupo_id; ?>">
			<input type="submit" value="Enviar">
		</form>
<?php
		echo "<a href='artistasGrupo.php?grupo_id=".$grupo_id."'>Editar integrantes</a>";
		echo "<a href='catalogo_grupos.php'>Volver a catalogo</a>";
	?>
	
	</body>

</html>
