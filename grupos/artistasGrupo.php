<?php
	include 'conexion.php';
	$grupo_id = $_GET['grupo_id'];
	$consultanombre = "select nombre from grupos where grupo_id='$grupo_id'";
	$query0= "select artista_id, nombre, apellido from artistas where artista_id IN (select artista_id from grupo_artista where grupo_id = '$grupo_id');";
	$query1 = "select * from artistas";
	$ejecutanombre= pg_query($con, $consultanombre);
	$ejecucion = pg_query($con,$query1);
	$ejecucion0 = pg_query($con,$query0);
	$dato = pg_fetch_array($ejecutanombre);
	echo "<h2>$dato[0]<h2>";
?>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Grupos</title>

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
								 <a class="nav-link" href="catalogo_grupos.php">Grupos</a>
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
	<div class="container-fluid">
		<table id="table_id" class="table table-bordered table-striped"> <!--Agregar un hover-->
			<h2 align="center">Agregar artistas al grupo</h2><br>
	<thead>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Borrar</th>
	</tr>

</thead>
<tbody>
<?php
/*while($row = pg_fetch_row($ejecucion)){
	echo "<tr>";
	echo "<td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
	echo "<td>".$row[3]."</td>";
	echo "</tr>";
}*/
while($row = pg_fetch_assoc($ejecucion0)){

	?>
	<tr>
	<td><? php echo $row['artista_id']; ?></td>
	<td><? php echo $row['nombre']; ?></td>
	<td><? php echo $row['apellido']; ?></td>
	<?php echo "<td><a class="btn btn-danger btn-sm" href='eliminar_artistaGrupo.php?artista_id=".$row['artista_id']."&grupo_id=".$grupo_id."'>Borrar</a></td>"; ?>
	</tr>
}
/*}
else {
	header('Location: ../index.php?error=2');
}*/
</tbody>
</table>
</div>

	<div align="center">

	<form name="alta" action="alta_artistasGrupo.php" method="post">
		<label for="artistas">Nombre del artista:</label>
		<select name="artistas">
		<?php
			while($row = pg_fetch_assoc($ejecucion)){
				echo "<option value='".$row['artista_id']."'>".$row['nombre']." ".$row['apellido']."</option>";
			}
		?>
		</select>
		<br/>
		<input type="hidden" name="id" value="<?php echo $grupo_id; ?>">
		<input class="btn btn-success btn-sm" type="submit" id="enviar" value="Confirmar">
	</form>
	<a href="catalogo_grupos.php"><p>Regresar a catalogo</p></a>
	</div>
</body>
</html>
