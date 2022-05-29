<?php
	//Verificar si existe una sesion:
	session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
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

		<h2>Ingresa los datos de la disquera</h2>
		<form name="alta" method="post" action="alta_disquera.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre">
			<br/>
			<label for="pais">Pais:</label>
			<input type="text" name="pais">
			<br/>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
<?php
}
else{
	header('Location: ../index.php?error=2');
}
?>
