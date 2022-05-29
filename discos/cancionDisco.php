<?php
	include 'conexion.php';
	$disco_id = $_GET['disco_id'];
	$consultanombre = "select titulo from discos where disco_id='$disco_id'";
	$query0= "select cancion_id, titulo from canciones where cancion_id IN (select cancion_id from disco_cancion where disco_id = '$disco_id');";
	$query1 = "select * from canciones";
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
		<th>Titulo</th>
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
	echo "<td>".$row['cancion_id']."</td>";
	echo "<td>".$row['titulo']."</td>";
	echo "<td><a href='eliminar_cancionDisco.php?cancion_id=".$row['cancion_id']."&disco_id=".$disco_id."'>Borrar</a></td>";
	echo "</tr>";
}
/*}
else {
	header('Location: ../index.php?error=2');
}*/
?>
</table>
	<h3>Agrega canciones al disco</h3>
	<form name="alta" action="alta_cancionDisco.php" method="post">
		<label for="canciones">Titulo de canción:</label>
		<select name="canciones">
		<?php
			while($row = pg_fetch_assoc($ejecucion)){
				echo "<option value='".$row['cancion_id']."'>".$row['titulo']."</option>";
			}
		?>
		</select>
		<br/>
		<input type="hidden" name="id" value="<?php echo $disco_id; ?>">
		<input type="submit" id="enviar" value="Confirmar">
	</form>
	<a href="catalogo_discos.php">Regresar a catalogo</a>
</html>


