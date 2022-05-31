<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){


?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="js/jquery-3.6.0.js"></script>
<script src="js/01.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/validar.js"></script>

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

	 <div class="container">


		<h1>Ingresa los datos del compositor</h1>
		<form name="alta" method="post" action="alta_compositor.php">

			<div class="form-group">

			<label for="nombre">Nombre:</label>
			<input class="form-control" type="text" name="nombre">

			<label for="apellido">Apellido:</label>
			<input class="form-control" type="text" name="apellido">

			<label for="pais_nacimiento">País de Nacimiento:</label>
			<input class="form-control" type="text" name="pais_nacimiento">

			<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
			<input class="form-control" type="date" name="fecha_nacimiento">
			</div>
			<input class="btn btn-success"type="submit" value="Enviar">
		</form>
		</div>
	</body>
</html>
<?php
} else {
	header('Location: ../index.php?error=2');
}
?>
