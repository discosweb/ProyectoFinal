<?php
	include 'conexion.php';
	$cancion_id = $_GET['cancion_id'];
	$query = "select * from canciones where cancion_id='$cancion_id';";
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
		<th>Titulo</th>
	</tr>
	<tr>
	<td><?php echo $resultado['cancion_id'];?></td>
	<td><?php echo $resultado['titulo'];?></td>
	
	</tr>
		</table>
	<form name="delete" action="eliminar_canciones.php" method="post">
		<input type="hidden" name="id" value="<?php echo $cancion_id;?>">
		<input type="submit" value="Eliminar">
		<a href="catalogo_canciones.php"><input type="button" value="Cancelar"></a>
	</form>
	</body>

</html>
