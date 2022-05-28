<?php
	include 'conexion.php';
	$disquera_id = $_GET['disquera_id'];
	$query = "select * from disqueras where disquera_id='$disquera_id';";
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
	<td><?php echo $resultado['disquera_id'];?></td>
	<td><?php echo $resultado['nombre'];?></td>
	<td><?php echo $resultado['pais'];?></td>
	
	</tr>
		</table>
	<form name="delete" action="eliminar_disqueras.php" method="post">
		<input type="hidden" name="id" value="<?php echo $disquera_id;?>">
		<input type="submit" value="Eliminar">
		<a href="catalogo_disqueras.php"><input type="button" value="Cancelar"></a>
	</form>
	</body>

</html>
