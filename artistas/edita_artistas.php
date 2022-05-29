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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Artistas</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

		<!-- Bootstrap core CSS -->
		<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="../css/carousel.css" rel="stylesheet">


		<style>
			.bd-placeholder-img {
					font-size: 1.125rem;
					text-anchor: middle;
					-webkit-user-select: none;
					-moz-user-select: none;
					-ms-user-select: none;
					user-select: none;
			}

			@media (min-width: 768px) {
					.bd-placeholder-img-lg {
							font-size: 3.5rem;
					}
			}
		</style>
	</head>

	<body>
		<!-- ========== HEADER ========== -->
		<header>
		<nav class="navbar navbar-expand-lg  navbar-dark fixed-top nav.navbar ">


					 <!--MENÚ-->
					 <div class="collapse navbar-collapse" id="navbarCollapse">
						 <ul class="navbar-nav mr-auto">
							 <!--ARTISTAS-->
							 <li class="nav-item active">
									 <a class="nav-link" href="catalogo_artistas.php">Artistas</a>
							 </li>

							 <!--GRUPOS-->
							 <li class="nav-item active">
									 <a class="nav-link" href="../grupos/catalogo_grupos.php">Grupos</a>
							 </li>

							 <!--DISQUERAS-->
							 <li class="nav-item active">
									 <a class="nav-link" href="../disqueras/catalogo_disqueras.php">Disqueras</a>
							 </li>

							 <!--PRODUCTORES-->
							 <li class="nav-item active">
									 <a class="nav-link" href="../productores/catalogo_productores.php">Productores</a>
							 </li>

							 <!--COMPOSITORES-->
							 <li class="nav-item active">
									 <a class="nav-link" href="../compositores/catalogo_compositores.php">Compositores</a>
							 </li>

							 <!--CANCIONES-->
							 <li class="nav-item active">
									 <a class="nav-link" href="../canciones/catalogo_canciones.php">Canciones</a>
							 </li>

							 <!--DISCOS-->
							 <li class="nav-item active">
									 <a class="nav-link" href="../discos/catalogo_discos.php">Discos</a>
							 </li>

							 <!--CRÉDITOS-->
							 <li class="nav-item active">
									 <a class="nav-link" href="../creditos.php">Créditos</a>
							 </li>

							 <!--SALIR-->
							 <li class="nav-item active">
									 <a class="nav-link" href="../cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i> Salir</a>
							 </li>
						 <ul>
					 </div>
					 <!--FIN MENÚ-->
			 </nav>
		 </header><br><br><br><br><br>
		 <!-- ========== END HEADER ========== -->


		 <!-- DATA TABLE -->
			<div class="container">
				<h1>Actualiza los datos del artista</h1>

			 <table id="table_id" class="display"> <!--Agregar un hover-->

			<form name="update" method="post" action="edicion_artista.php">
				<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input class="form-control" type="text" name="nombre" value="<?php echo $resultado['nombre']; ?>">

			<label for="apellido">Apellido:</label>
			<input class="form-control" type="text" name="apellido" value="<?php echo $resultado['apellido']; ?>">

			<label for="pais_nacimiento">Pais de Nacimiento:</label>
			<input class="form-control" type="text" name="pais_nacimiento" value="<?php echo $resultado['pais_nacimiento']; ?>">

			<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
			<input class="form-control" type="date" name="fecha_nacimiento" value="<?php echo $resultado['fecha_nacimiento']; ?>">

			<label for="nombre_artistico">Nombre Artístico:</label>
			<input class="form-control" type="text" name="nombre_artistico" value="<?php echo $resultado['nombre_artistico']; ?>">

			<input type="hidden" name="id" value="<?php echo $artista_id; ?>">
			</div>
			<input type="submit" value="Enviar" class="btn btn-success">
		</form>
		</table>
		</div>
	</body>
</html>
