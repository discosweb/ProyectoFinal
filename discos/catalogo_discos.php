<?php
//verificar la sesion:
/*session_start();
if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
//Consultar los registros y mostrarlos en una tabla
 */include 'conexion.php';
$query = "Select disco_id, titulo, año, genero, costo from discos";
$ejecucion = pg_query($con,$query);
//var_dump($ejecucion);
?>
<html>
<head>
	<meta charset=UTF-8">
<body>
<a href="form_disco.php">Nuevo disco</a>
<table>
	<tr>
		<th>Id</th>
		<th>Titulo</th>
		<th>Año</th>
		<th>Genero</th>
		<th>Costo</th>
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
	echo "<td>".$row['disco_id']."</td>";
	echo "<td>".$row['titulo']."</td>";
	echo "<td>".$row['año']."</td>";
	echo "<td>".$row['genero']."</td>";
	echo "<td>".$row['costo']."</td>";
	echo "<td><a href='edita_discos.php?disco_id=".$row['disco_id']."'>Editar</a></td>";
	echo "<td><a href='baja_discos.php?disco_id=".$row['disco_id']."'>Borrar</a></td>";
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
