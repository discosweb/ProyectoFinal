<?php
	include 'conexion.php';
	$compositor_id = $_GET['compositor_id'];
	$query = "select * from compositores where compositor_id='$compositor_id';";
	$ejecucion = pg_query($con, $query);
	$resultado = pg_fetch_assoc($ejecucion);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8">
	</head>
	<body>
		<header>
		<div>
			<h1>DISK0S</h1>
		</div>
		<nav>
			<a href="../discos/catalogo_discos.php">Inicio</a>
			<a href="../artistas/catalogo_artistas.php">Artistas</a>
			<a href="../grupos/catalogo_grupos.php">Grupos</a>
			<a href="../disqueras/catalogo_disqueras.php">Disqueras</a>
			<a href="../productores/catalogo_productores.php">Productores</a>
			<a href="catalogo_compositores.php">Compositores</a>
			<a href="../canciones/catalogo_canciones.php">Canciones</a>
			<a href="../discos/catalogo_discos.php">Discos</a>
			<a href="../creditos.php">Creditos</a>
			<a href="../cerrar_sesion.php">Cerrar sesión</a>
		</nav>
	</header>
	<p>¿Estás seguro de que quieres eliminar este registro?</p>
	<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Pais Nacimiento</th>
		<th>Fecha Nacimiento</th>
	</tr>
	<tr>
	<td><?php echo $resultado['compositor_id'];?></td>
	<td><?php echo $resultado['nombre'];?></td>
	<td><?php echo $resultado['apellido'];?></td>
	<td><?php echo $resultado['pais_nacimiento'];?></td>
	<td><?php echo $resultado['fecha_nacimiento'];?></td>

	</tr>
		</table>
	<form name="delete" action="eliminar_compositores.php" method="post">
		<input type="hidden" name="id" value="<?php echo $compositor_id;?>">
		<input type="submit" value="Eliminar">
		<a href="catalogo_compositores.php"><input type="button" value="Cancelar"></a>
	</form>
	</body>

</html>
