<?php
	include 'conexion.php';

	$nombre = strip_tags($_POST["nombre"]);
	$pais = strip_tags($_POST["pais"]);
	
	$insertar = "insert into grupos (Nombre, Pais_origen) values ('$nombre', '$pais');";
	$query = pg_query($con, $insertar);
	if($insertar){
		echo "Se guardo en la bd";
		header('Location: catalogo_grupos.php');
	} else {
		echo "hubo un error";
	}
	
	pg_close($con);

?>
