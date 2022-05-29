<?php
	include 'conexion.php';
	$artista_id= $_GET['artista_id'];
	$query= "select Nombre, Apellido, Pais_Nacimiento, Fecha_Nacimiento, Nombre_Artistico from artistas where artista_id='$artista_id';";
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
			<a href="catalogo_artistas.php">Artistas</a>
			<a href="../grupos/catalogo_grupos.php">Grupos</a>
			<a href="../disqueras/catalogo_disqueras.php">Disqueras</a>
			<a href="../productores/catalogo_productores.php">Productores</a>
			<a href="../compositores/catalogo_compositores.php">Compositores</a>
			<a href="../canciones/catalogo_canciones.php">Canciones</a>
			<a href="../discos/catalogo_discos.php">Discos</a>
			<a href="../creditos.php">Creditos</a>
			<a href="../cerrar_sesion.php">Cerrar sesión</a>
		</nav>
	</header>
		<h2>Actualiza los datos del artista</h2>
		<form name="update" method="post" action="edicion_artista.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $resultado['nombre']; ?>">
			<br/>
			<label for="apellido">Apellido:</label>
			<input type="text" name="apellido" value="<?php echo $resultado['apellido']; ?>">
			<br/>
			<label for="pais_nacimiento">Pais de Nacimiento:</label>
			<input type="text" name="pais_nacimiento" value="<?php echo $resultado['pais_nacimiento']; ?>">
			<br/>
			<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
			<input type="date" name="fecha_nacimiento" value="<?php echo $resultado['fecha_nacimiento']; ?>">
			<br/>
			<label for="nombre_artistico">Nombre Artístico:</label>
			<input type="text" name="nombre_artistico" value="<?php echo $resultado['nombre_artistico']; ?>">
			<br/>
			<input type="hidden" name="id" value="<?php echo $artista_id; ?>">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
