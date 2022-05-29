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
			<a href="../compositores/catalogo_compositores.php">Compositores</a>
			<a href="catalogo_canciones.php">Canciones</a>
			<a href="../discos/catalogo_discos.php">Discos</a>
			<a href="../creditos.php">Creditos</a>
			<a href="../cerrar_sesion.php">Cerrar sesión</a>
		</nav>
	</header>
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
