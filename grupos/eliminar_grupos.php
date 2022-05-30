<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include 'conexion.php';
	$id= $_POST['id'];
	$query = "delete from grupo_artista where grupo_id='$id';";
	$query2 = "delete from grupos where grupo_id='$id';";
	$resultado = pg_query($con,$query);
	$resultado2 = pg_query($con,$query2);
	if($resultado){
		if($resultado2){
			header('Location: catalogo_grupos.php');
		}
	}else{
		echo "No se elimino";
	}	
} else {
	header('Location: ../index.php?error=2');
}

?>
