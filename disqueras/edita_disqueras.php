<?php
	include 'conexion.php';
	$disquera_id= $_GET['disquera_id'];
	$query= "select Nombre,Pais from disqueras where disquera_id='$disquera_id';";
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
			<a href="catalogo_disqueras.php">Disqueras</a>
			<a href="../productores/catalogo_productores.php">Productores</a>
			<a href="../compositores/catalogo_compositores.php">Compositores</a>
			<a href="../canciones/catalogo_canciones.php">Canciones</a>
			<a href="../discos/catalogo_discos.php">Discos</a>
			<a href="../creditos.php">Creditos</a>
			<a href="../cerrar_sesion.php">Cerrar sesión</a>
		</nav>
	</header>

		<h2>Actualiza los datos de la disquera</h2>
		<form name="update" method="post" action="edicion_disquera.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $resultado['nombre']; ?>">
			<br/>
			<label for="pais">Pais:</label>
			<input type="text" name="pais" value="<?php echo $resultado['pais']; ?>">
			<br/>
			<input type="hidden" name="id" value="<?php echo $disquera_id; ?>">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
