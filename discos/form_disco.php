<?php
	include 'conexion.php';
	$query= "select * from grupos;";
	$ejecucion = pg_query($con,$query);
	$query2= "select * from disqueras;";
	$ejecucion2 = pg_query($con,$query2);
	$query3= "select * from productores;";
	$ejecucion3 = pg_query($con,$query3);

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
			<a href="catalogo_discos.php">Inicio</a>
			<a href="../artistas/catalogo_artistas.php">Artistas</a>
			<a href="../grupos/catalogo_grupos.php">Grupos</a>
			<a href="../disqueras/catalogo_disqueras.php">Disqueras</a>
			<a href="../productores/catalogo_productores.php">Productores</a>
			<a href="../compositores/catalogo_compositores.php">Compositores</a>
			<a href="../canciones/catalogo_canciones.php">Canciones</a>
			<a href="catalogo_discos.php">Discos</a>
			<a href="../creditos.php">Creditos</a>
			<a href="../cerrar_sesion.php">Cerrar sesión</a>
		</nav>
	</header>
		<h2>Ingresa los datos del disco</h2>
		<form name="alta" method="post" action="alta_disco.php">
			<label for="titulo">Titulo:</label>
			<input type="text" name="titulo">
			<br/>
			<label for="grupo">Grupo:</label>
			<select name="grupo">
			<?php
				while($row = pg_fetch_assoc($ejecucion)){
					echo "<option value='".$row['grupo_id']."'>".$row['nombre']."</option>";
				}
			?>
			</select>
			<br/>
			<label for="anio">Año:</label>
			<input type="date" name="anio">
			<br/>
			<label for="genero">Genero:</label>
			<input type="text" name="genero">
			<br/>
			<label for="disqueras">Disquera:</label>
			<select name="disqueras">
			<?php
				while($row = pg_fetch_assoc($ejecucion2)){
					echo "<option value='".$row['disquera_id']."'>".$row['nombre'].",".$row['pais']."</option>";
				}
			?>
			</select>
			<br/>
			<label for="productores">Productor</label>
			<select name="productores">
			<?php
				while($row = pg_fetch_assoc($ejecucion3)){
					echo "<option value='".$row['productor_id']."'>".$row['nombre']." ".$row['apellido']."</option>";
				}
			?>
			</select>
			<br/>
			<label for="costo">Costo:</label>
			<input type="number" name="costo" step="0.01">
			<br/>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
