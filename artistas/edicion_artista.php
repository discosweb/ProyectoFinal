<?php
	include 'conexion.php';
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$pais_nacimiento = $_POST['pais_nacimiento'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];
	$nombre_artistico = $_POST['nombre_artistico'];

	$query= "update artistas set nombre='$nombre', apellido='$apellido',
	 					pais_nacimiento='$pais_nacimiento', fecha_nacimiento='$fecha_nacimiento',
						nombre_artistico='$nombre_artistico'
						where artista_id='$id';";
	$resultado = pg_query($con,$query);

	if($resultado){
		echo "Se actualizo";
		header('Location: catalogo_artistas.php');
	}else{
		echo "Error";
	}


?>
