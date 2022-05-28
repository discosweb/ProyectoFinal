<?php
	include 'conexion.php';
	$artista_id = $_GET['artista_id'];
	$query = "select * from artistas where artista_id='$artista_id';";
	$ejecucion = pg_query($con, $query);
	$resultado = pg_fetch_assoc($ejecucion);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8">
	</head>
	<body>
	<p>¿Estás seguro de que quieres eliminar este registro?</p>
	<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>País</th>
	</tr>
	<tr>
	<td><?php echo $resultado['artista_id'];?></td>
	<td><?php echo $resultado['nombre'];?></td>
	<td><?php echo $resultado['apellido'];?></td>
	<td><?php echo $resultado['pais_nacimiento'];?></td>
	<td><?php echo $resultado['fecha_nacimiento'];?></td>
	<td><?php echo $resultado['nombre_artistico'];?></td>

	</tr>
		</table>
	<form name="delete" action="eliminar_artistass.php" method="post">
		<input type="hidden" name="id" value="<?php echo $artista_id;?>">
		<input type="submit" value="Eliminar">
		<a href="catalogo_artistas.php"><input type="button" value="Cancelar"></a>
	</form>
	</body>

</html>
