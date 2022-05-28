<?php
//verificar la sesion:
/*session_start();
if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
//Consultar los registros y mostrarlos en una tabla
 */include 'conexion.php';
$query = "Select artista_id, nombre, apellido, pais_nacimiento, fecha_nacimiento,nombre_artistico from artistas";
$ejecucion = pg_query($con,$query);
//var_dump($ejecucion);
?>
<html>
<head>
	<meta charset=UTF-8">
<body>
<a href="form_artista.php">Nuevo Artista</a>
<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Pais Nacimiento</th>
		<th>Fecha Nacimiento</th>
		<th>Nombre Artístico</th>
		<th>Editar</th>
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
while($row = pg_fetch_assoc($ejecucion)){
	echo "<tr>";
	echo "<td>".$row['artista_id']."</td>";
	echo "<td>".$row['nombre']."</td>";
	echo "<td>".$row['apellido']."</td>";
	echo "<td>".$row['pais_nacimiento']."</td>";
	echo "<td>".$row['fecha_nacimiento']."</td>";
	echo "<td>".$row['nombre_artistico']."</td>";
	echo "<td><a href='edita_artistas.php?artista_id=".$row['artista_id']."'>Editar</a></td>";
	echo "<td><a href='baja_artistas.php?artista_id=".$row['artista_id']."'>Borrar</a></td>";
	echo "</tr>";
}
/*}
else {
	header('Location: ../index.php?error=2');
}*/
?>
</table>
</body>
</html>
