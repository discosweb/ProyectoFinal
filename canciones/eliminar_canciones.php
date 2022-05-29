<?php
	include 'conexion.php';
	$id= $_POST['id'];
	$query = "delete from cancion_compositor where cancion_id='$id';";
	$query2 = "delete from canciones where cancion_id='$id';";
	$resultado = pg_query($con,$query);
	$resultado2 = pg_query($con,$query2);
	if($resultado){
		if($resultado2){
			header('Location: catalogo_canciones.php');
		}
	}else{
		echo "No se elimino";
	}	


?>
