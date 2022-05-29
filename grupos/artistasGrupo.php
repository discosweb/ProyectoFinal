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
	echo "<td>".$row['artista_id']."</td>";
	echo "<td>".$row['nombre']."</td>";
	echo "<td>".$row['apellido']."</td>";
	echo "<td><a href='eliminar_artistaGrupo.php?artista_id=".$row['artista_id']."&grupo_id=".$grupo_id."'>Borrar</a></td>";
	echo "</tr>";
}
/*}
else {
	header('Location: ../index.php?error=2');
}*/
?>
</table>
	<h3>Agrega artistas al grupo</h3>
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
		<input type="submit" id="enviar" value="Confirmar">
	</form>
	<a href="catalogo_grupos.php">Regresar a catalogo</a>
</html>


