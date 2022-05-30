<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include 'conexion.php';

	$nombre = strip_tags($_POST["nombre"]);
	$apellido = strip_tags($_POST["apellido"]);
	$pais_nacimiento = strip_tags($_POST["pais_nacimiento"]);
	$fecha_nacimiento = strip_tags($_POST["fecha_nacimiento"]);

	$insertar = "insert into Compositores (Nombre, Apellido, Pais_Nacimiento, Fecha_nacimiento)
	values ('$nombre', '$apellido', '$pais_nacimiento', '$fecha_nacimiento');";
	$query = pg_query($con, $insertar);
	if($insertar){
		echo "Se guardo en la bd";
		header('Location: catalogo_compositores.php');
	} else {
		echo "Hubo un error";
	}

	pg_close($con);

} else {
	header('Location: ../index.php?error=2');
}

?>
