<?php
	include 'conexion.php';
	$id= $_POST['id'];
	$query = "delete from artistas where artista_id='$id';";
	$resultado = pg_query($con,$query);
	if($resultado){
		header('Location: catalogo_artistas.php');
	}else{
		echo "No se elimino";
	}	


?>
