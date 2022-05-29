<?php
	include 'conexion.php';
	$disco_id = $_GET['disco_id'];
	$query = "select * from discos where disco_id='$disco_id';";
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
			<th>Año</th>
			<th>Genero</th>
			<th>Costo</th>
		</tr>
		<tr>
			<td><?php echo $resultado['disco_id'];?></td>
			<td><?php echo $resultado['titulo'];?></td>
			<td><?php echo $resultado['año'];?></td>
			<td><?php echo $resultado['genero'];?></td>
			<td><?php echo $resultado['costo'];?></td>
		</tr>
	</table>
	<form name="delete" action="eliminar_discos.php" method="post">
		<input type="hidden" name="id" value="<?php echo $disco_id;?>">
		<input type="submit" value="Eliminar">
		<a href="catalogo_discos.php"><input type="button" value="Cancelar"></a>
	</form>
	</body>

</html>
