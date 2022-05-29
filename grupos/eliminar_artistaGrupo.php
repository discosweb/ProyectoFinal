<?php
	include 'conexion.php';
	$artista= $_GET['artista_id'];
	$grupo= $_GET['grupo_id'];
	$query = "delete from grupo_artista where artista_id='$artista' AND grupo_id='$grupo';";
	$resultado = pg_query($con,$query);
	if($resultado){
		header("Location: artistasGrupo.php?grupo_id=$grupo");
	}else{
		echo "No se elimino";
	}	


?>
