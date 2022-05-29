<?php
//verificar la sesion:
/*session_start();
if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
//Consultar los registros y mostrarlos en una tabla
 */include 'conexion.php';
$query = "Select grupo_id, nombre, pais_origen from grupos";
$ejecucion = pg_query($con,$query);
//var_dump($ejecucion);
?>
<html>
<head>
	<meta charset=UTF-8">
<body>
<a href="form_grupo.php">Nueva grupo</a>
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
	echo "<td>".$row['grupo_id']."</td>";
	echo "<td>".$row['nombre']."</td>";
	echo "<td>".$row['pais_origen']."</td>";
	echo "<td><a href='edita_grupos.php?grupo_id=".$row['grupo_id']."'>Editar</a></td>";
	echo "<td><a href='baja_grupos.php?grupo_id=".$row['grupo_id']."'>Borrar</a></td>";
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
