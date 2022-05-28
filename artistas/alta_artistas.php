<?php
	include 'conexion.php';

	$nombre = strip_tags($_POST["nombre"]);
	$apellido = strip_tags($_POST["apellido"]);
	$pais_nacimiento = strip_tags($_POST["pais_nacimiento"]);
	$fecha_nacimiento = strip_tags($_POST["fecha_nacimiento"]);
	$nombre_artistico = strip_tags($_POST["nombre_artistico"]);

	$insertar = "insert into Artistas (Nombre, Apellido, Pais_Nacimiento, Fecha_Nacimiento, Nombre_Artístico)
							values ('$nombre', '$apellido', '$pais_nacimiento', '$fecha_nacimiento','$nombre_artistico');";
	$query = pg_query($con, $insertar);
	if($insertar){
		echo "Se guardo en la bd";
		header('Location: catalogo_artistas.php');
	} else {
		echo "Hubo un error";
	}

	pg_close($con);

?>
