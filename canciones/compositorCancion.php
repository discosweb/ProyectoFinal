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
<html>
	<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Borrar</th>
	</tr>
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
	echo "<tr>";
	echo "<td>".$row['compositor_id']."</td>";
	echo "<td>".$row['nombre']."</td>";
	echo "<td>".$row['apellido']."</td>";
	echo "<td><a href='eliminar_compositorCancion.php?compositor_id=".$row['compositor_id']."&cancion_id=".$cancion_id."'>Borrar</a></td>";
	echo "</tr>";
}
/*}
else {
	header('Location: ../index.php?error=2');
}*/
?>
</table>
	<h3>Agrega compositores a la canción</h3>
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
		<input type="submit" id="enviar" value="Confirmar">
	</form>
	<a href="catalogo_canciones.php">Regresar a catalogo</a>
</html>


