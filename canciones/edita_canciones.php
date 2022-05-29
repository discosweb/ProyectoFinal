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
