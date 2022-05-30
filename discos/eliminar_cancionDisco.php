<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include '../conexion.php';
	$cancion= $_GET['cancion_id'];
	$disco= $_GET['disco_id'];
	$query = "delete from disco_cancion where cancion_id='$cancion' AND disco_id='$disco';";
	$resultado = pg_query($con,$query);
	if($resultado){
		header("Location: cancionDisco.php?disco_id=$disco");
	}else{
		echo "No se elimino";
	}	
} else {
	header('Location: ../index.php?error=2');
}

?>
