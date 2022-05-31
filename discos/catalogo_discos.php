<?php
	//verificar la sesion:
	session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
		//Consultar los registros y mostrarlos en una tabla
 		include '../conexion.php';
		$query = "Select disco_id, titulo, año, genero, costo from discos";
		$ejecucion = pg_query($con,$query);
		//var_dump($ejecucion);
?>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Discos</title>

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
								 <a class="nav-link" href="../compositores/catalogo_compositores.php">Compositores</a>
						 </li>

						 <!--CANCIONES-->
						 <li class="nav-item active">
								 <a class="nav-link" href="../canciones/catalogo_canciones.php">Canciones</a>
						 </li>

						 <!--DISCOS-->
						 <li class="nav-item active">
								 <a class="nav-link" href="catalogo_discos.php">Discos</a>
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
	<div class="container-fluid">

		<table id="table_id" class="table table-bordered table-striped"> <!--Agregar un hover-->
			<h2 align="center">Discos</h2><br>



		<a class="btn btn-secondary btn-sm" href="form_disco.php">Nuevo disco</a>
			<hr>
				<thead>
					<tr>
						<th>Id</th>
						<th>Titulo</th>
						<th>Año</th>
						<th>Genero</th>
						<th>Costo</th>
						<th>Editar</th>
						<th>Borrar</th>
					</tr>
				</thead>
				<tbody>
					<?php

					while($row = pg_fetch_assoc($ejecucion)){
						echo "<tr>";
						echo "<td>".$row['disco_id']."</td>";
						echo "<td>".$row['titulo']."</td>";
						echo "<td>".$row['año']."</td>";
						echo "<td>".$row['genero']."</td>";
						echo "<td>".$row['costo']."</td>";
						echo "<td><a class='btn btn-success btn-sm' href='edita_discos.php?disco_id=".$row['disco_id']."'>Editar</a></td>";
						echo "<td><a class='btn btn-danger btn-sm' href='baja_discos.php?disco_id=".$row['disco_id']."'>Borrar</a></td>";

						echo "</tr>";
	
							}
					?>

				</tbody>
		</table>
	</div><!-- DATA TABLE -->




</body>
</html>
<?php
} else {
	header('Location: ../index.php?error=2');
}
?>
