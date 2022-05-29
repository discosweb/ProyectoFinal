<?php
//verificar la sesion:
/*session_start();
if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
//Consultar los registros y mostrarlos en una tabla
 */include 'conexion.php';
$query = "Select compositor_id, nombre, apellido, pais_nacimiento, fecha_nacimiento
 					from compositores";
$ejecucion = pg_query($con,$query);
//var_dump($ejecucion);
?>
<html>
<head>
	<meta charset=UTF-8">
<body>
	<header>
		<div>
			<h1>DISK0S</h1>
		</div>
		<nav>
			<a href="../discos/catalogo_discos.php">Inicio</a>
			<a href="../artistas/catalogo_artistas.php">Artistas</a>
			<a href="../grupos/catalogo_grupos.php">Grupos</a>
			<a href="../disqueras/catalogo_disqueras.php">Disqueras</a>
			<a href="../productores/catalogo_productores.php">Productores</a>
			<a href="catalogo_compositores.php">Compositores</a>
			<a href="../canciones/catalogo_canciones.php">Canciones</a>
			<a href="../discos/catalogo_discos.php">Discos</a>
			<a href="../creditos.php">Creditos</a>
			<a href="../cerrar_sesion.php">Cerrar sesión</a>
		</nav>
	</header>
<a href="form_compositor.php">Nuevo compositor</a>
<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Pais Nacimiento</th>
		<th>Fecha Nacimiento</th>
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
	echo "<td>".$row['compositor_id']."</td>";
	echo "<td>".$row['nombre']."</td>";
	echo "<td>".$row['apellido']."</td>";
	echo "<td>".$row['pais_nacimiento']."</td>";
	echo "<td>".$row['fecha_nacimiento']."</td>";
	echo "<td><a href='edita_compositores.php?compositor_id=".$row['compositor_id']."'>Editar</a></td>";
	echo "<td><a href='baja_compositores.php?compositor_id=".$row['compositor_id']."'>Borrar</a></td>";
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
