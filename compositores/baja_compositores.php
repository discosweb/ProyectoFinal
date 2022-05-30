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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Compositores</title>

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
									 <a class="nav-link" href="../artistas/catalogo_artistas.php">Artistas</a>
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
									 <a class="nav-link" href="catalogo_compositores.php">Compositores</a>
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

		 <div class="container-fluid">

 	 		<table id="table_id" class="table table-bordered table-striped"> <!--Agregar un hover-->
 	 			<h5 align="center">¿Estás seguro de que quieres eliminar este registro?</h5><br>
 			<hr>
 			<thead>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Pais Nacimiento</th>
		<th>Fecha Nacimiento</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td><?php echo $resultado['compositor_id'];?></td>
	<td><?php echo $resultado['nombre'];?></td>
	<td><?php echo $resultado['apellido'];?></td>
	<td><?php echo $resultado['pais_nacimiento'];?></td>
	<td><?php echo $resultado['fecha_nacimiento'];?></td>

	</tr>
	</tbody>
		</table>

		<div align="center">


			<form name="delete" action="eliminar_compositores.php" method="post">
				<input type="hidden" name="id" value="<?php echo $compositor_id;?>">
				<input type="submit" value="Eliminar" class="btn btn-success btn-sm">
				<a href="catalogo_compositores.php"><input type="button" value="Cancelar" class="btn btn-danger btn-sm"></a>
			</form>

		</div>
	</div>
	</body>

</html>
