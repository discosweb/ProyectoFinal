<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
include '../conexion.php';

	$artista = strip_tags($_POST["artistas"]);
	$grupo = strip_tags($_POST["id"]);
	
	$insertar = "insert into grupo_artista (artista_id, grupo_id) values ('$artista', '$grupo');";
	$query = pg_query($con, $insertar);
	if($insertar){
		echo "Se guardo en la bd";
		header("Location: artistasGrupo.php?grupo_id=$grupo");
	} else {
		echo "hubo un error";
	}
	
	pg_close($con);

} else {
	header('Location: ../index.php?error=2');
}

?>
