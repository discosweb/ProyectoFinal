<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include 'conexion.php';
	$id= $_POST['id'];
	$query = "delete from disco_cancion where disco_id='$id';";
	$query2 = "delete from discos where disco_id='$id';";
	$resultado = pg_query($con,$query);
	$resultado2 = pg_query($con,$query2);
	if($resultado){
		if($resultado2){
			header('Location: catalogo_discos.php');
		}
	}else{
		echo "No se elimino";
	}	
} else {
	header('Location: ../index.php?error=2');
}

?>
