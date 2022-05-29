<?php
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
		<meta charset="UTF-8">

	</head>

	<body>
		<h2>Actualiza los datos del disco</h2>
		<form name="update" method="post" action="edicion_disco.php">
			<label for="titulo">Titulo:</label>
			<input type="text" name="titulo" value="<?php echo $resultado['titulo']; ?>">
			<br/>
			<label for="grupo">Grupo:</label>
			<select name="grupo">
			<?php
				while($row = pg_fetch_assoc($ejecucion2)){
					echo "<option value='".$row['grupo_id']."'>".$row['nombre']."</option>";
				}
			?>
			</select>
			<br/ >
			<label for="anio">Año:</label>
			<input type="date" name="anio" value="<?php echo $resultado['año'];?>">
			<br/>
			<label for="genero">Genero:</label>
			<input type="text" name="genero" value="<?php echo $resultado['genero'];?>">
			<br/>
			<label for="disqueras">Disquera:</label>
			<select name="disqueras">
			<?php
				while($row = pg_fetch_assoc($ejecucion3)){
					echo "<option value='".$row['disquera_id']."'>".$row['nombre'].",".$row['pais']."</option>";
				}
			?>
			</select>
			<br/>
			<label for="productores">Productor</label>
			<select name="productores">
			<?php
				while($row = pg_fetch_assoc($ejecucion4)){
					echo "<option value='".$row['productor_id']."'>".$row['nombre']." ".$row['apellido']."</option>";
				}
			?>
			</select>
			<br/>
			<label for="costo">Costo:</label>
			<input type="number" name="costo" step="0.01" value="<?php echo $resultado['costo'];?>">
			<br/>
			<input type="hidden" name="id" value="<?php echo $disco_id; ?>">
			<input type="submit" value="Enviar">
		</form>
<?php
		echo "<a href='cancionDisco.php?disco_id=".$disco_id."'>Editar canciones</a>";
		echo "<a href='catalogo_discos.php'>Volver a catalogo</a>";
	?>
	
	</body>

</html>
