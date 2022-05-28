<?php
//verificar la sesion:
/*session_start();
if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
//Consultar los registros y mostrarlos en una tabla
 */include 'conexion.php';
$query = "Select disquera_id, nombre, pais from disqueras";
$ejecucion = pg_query($con,$query);
//var_dump($ejecucion);
?>
<html>
<head>
	<meta charset=UTF-8">
<body>
<a href="form_disquera.php">Nueva disquera</a>
<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>País</th>
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
	echo "<td>".$row['disquera_id']."</td>";
	echo "<td>".$row['nombre']."</td>";
	echo "<td>".$row['pais']."</td>";
	echo "<td><a href='edita_disqueras.php?disquera_id=".$row['disquera_id']."'>Editar</a></td>";
	echo "<td><a href='baja_disqueras.php?disquera_id=".$row['disquera_id']."'>Borrar</a></td>";
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
