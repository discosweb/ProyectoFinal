<?php
	include 'conexion.php';
	$cancion_id = $_GET['cancion_id'];
	$consultanombre = "select titulo from canciones where cancion_id='$cancion_id'";
	$query0= "select compositor_id, nombre, apellido from compositores where compositor_id IN (select compositor_id from cancion_compositor where cancion_id = '$cancion_id');";
	$query1 = "select * from compositores";
	$ejecutanombre= pg_query($con, $consultanombre);
	$ejecucion = pg_query($con,$query1);
	$ejecucion0 = pg_query($con,$query0);
	$dato = pg_fetch_array($ejecutanombre);
	echo "<h2>$dato[0]<h2>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Canciones</title>

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
								 <a class="nav-link" href="catalogo_canciones.php">Canciones</a>
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
					 </ul>
				 </div>
				 <!--FIN MENÚ-->
		 </nav>
	 </header><br><br><br><br><br>
	 <!-- ========== END HEADER ========== -->

	 <!-- DATA TABLE -->
 	<div class="container-fluid">
		<table id="table_id" class="table table-bordered table-striped"> <!--Agregar un hover-->
			<h2 align="center">Agrega compositores a la canción</h2><br>
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
	<td><?php echo $row['compositor_id']; ?></td>
	<td><?php echo $row['nombre']; ?></td>
	<td><?php echo $row['apellido']; ?></td>

	<?php echo "<td><a href='eliminar_compositorCancion.php?compositor_id=".$row['compositor_id']."&cancion_id=".$cancion_id."' class='btn btn-danger btn-sm'>Borrar</a></td>"; ?>
	</tr>
	<?php
				}
	?>

</tbody>

</table>
</div>

	<div align="center">
	<form name="alta" action="alta_compositorCancion.php" method="post">
		<label for="compositores">Nombre del compositor:</label>
		<select name="compositores">
		<?php
			while($row = pg_fetch_assoc($ejecucion)){
				echo "<option value='".$row['compositor_id']."'>".$row['nombre']." ".$row['apellido']."</option>";
			}
		?>
		</select>
		<br/>
		<input type="hidden" name="id" value="<?php echo $cancion_id; ?>">
		<input class="btn btn-success btn-sm" type="submit" id="enviar" value="Confirmar">
	</form>
	<a href="catalogo_canciones.php"><p>Regresar a catalogo</p></a>
</div>
	</body>
</html>
