<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include 'conexion.php';
	$disco_id= $_GET['disco_id'];
	$query= "select * from discos where disco_id='$disco_id';";
	$ejecucion = pg_query($con, $query);
	$resultado = pg_fetch_assoc($ejecucion);
	$query2= "select * from grupos;";
	$ejecucion2 = pg_query($con,$query2);
	$query3= "select * from disqueras;";
	$ejecucion3 = pg_query($con,$query3);
	$query4= "select * from productores;";
	$ejecucion4 = pg_query($con,$query4);

?>
<!DOCTYPE html>
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
     <div class="container">
       <h1>Actualiza los datos del disco</h1>

			 <table id="table_id" class="display"> <!--Agregar un hover-->

				<form name="update" method="post" action="edicion_disco.php">

					<div class="form-group">

					<label for="titulo">Titulo:</label>
					<input type="text" name="titulo" value="<?php echo $resultado['titulo']; ?>" class="form-control">

					<label for="grupo" >Grupo:</label>
					<select name="grupo" class="form-control">
					<?php
						while($row = pg_fetch_assoc($ejecucion2)){
							if($row['grupo_id'] == $resultado['grupo_id']){
								echo "<option value='".$row['grupo_id']."' selected>".$row['nombre']."</option>";
							} else {
								echo "<option value='".$row['grupo_id']."'>".$row['nombre']."</option>";
							}
						}
					?>
					</select>

					<label for="anio">Año:</label>
					<input type="date" name="anio" value="<?php echo $resultado['año'];?>" class="form-control">

					<label for="genero">Genero:</label>
					<input type="text" name="genero" value="<?php echo $resultado['genero'];?>" class="form-control">

					<label for="disqueras">Disquera:</label>
					<select name="disqueras" class="form-control">
					<?php
						while($row = pg_fetch_assoc($ejecucion3)){
							if($row['disquera_id'] == $resultado['disquera_id']){
								echo "<option value='".$row['disquera_id']."' selected>".$row['nombre'].",".$row['pais']."</option>";
							} else {
								echo "<option value='".$row['disquera_id']."'>".$row['nombre'].",".$row['pais']."</option>";
							}
						}
					?>
					</select>

					<label for="productores">Productor</label>
					<select name="productores" class="form-control">
					<?php
						while($row = pg_fetch_assoc($ejecucion4)){
							if($row['productor_id'] == $resultado['productor_id']){
								echo "<option value='".$row['productor_id']."' selected >".$row['nombre']." ".$row['apellido']."</option>";
							} else {
								echo "<option value='".$row['productor_id']."'>".$row['nombre']." ".$row['apellido']."</option>";
							}
						}
					?>
					</select>

					<label for="costo">Costo:</label>
					<input type="number" name="costo" step="0.01" value="<?php echo $resultado['costo'];?>" class="form-control">

					<input type="hidden" name="id" value="<?php echo $disco_id; ?>">

					</div>
					<input type="submit" value="Enviar" class="btn btn-success">
				</form>
				</br></br>

				<?php
					echo "<a class='btn btn-success btn-sm' href='cancionDisco.php?disco_id=".$disco_id."'>Editar canciones</a>";
						echo "</br>";
					echo "<a class='btn btn-secondary btn-sm' href='catalogo_discos.php'>Volver a catalogo</a>";
				?>

			</table>
	  </div><!-- DATA TABLE -->
	</body>

</html>
<?php
} else {
	header('Location: ../index.php?error=2');
}
?>
