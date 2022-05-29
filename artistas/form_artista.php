<?php



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
		<h2>Ingresa los datos del Artísta</h2>
		<form name="alta" method="post" action="alta_artistas.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre">
			<br/>
			<label for="apellido">Apellido:</label>
			<input type="text" name="apellido">
			<br/>
			<label for="pais_nacimiento">Pais de Nacimiento:</label>
			<input type="text" name="pais_nacimiento">
			<br/>
			<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
			<input type="date" name="fecha_nacimiento">
			<br/>
			<label for="nombre_artistico">Nombre Artístico:</label>
			<input type="text" name="nombre_artistico">
			<br/>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
