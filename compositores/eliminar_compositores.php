<?php
	include 'conexion.php';
	$id= $_POST['id'];
	$query = "delete from compositores where compositor_id='$id';";
	$resultado = pg_query($con,$query);
	if($resultado){
		header('Location: catalogo_compositores.php');
	}else{
		echo "No se elimino";
	}


?>
