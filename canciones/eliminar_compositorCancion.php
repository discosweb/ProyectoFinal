<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include '../conexion.php';
	$compositor= $_GET['compositor_id'];
	$cancion= $_GET['cancion_id'];
	$query = "delete from cancion_compositor where compositor_id='$compositor' AND cancion_id='$cancion';";
	$resultado = pg_query($con,$query);
	if($resultado){
		header("Location: compositorCancion.php?cancion_id=$cancion");
	}else{
		echo "No se elimino";
	}	
} else {
	header('Location: ../index.php?error=2');
}

?>
