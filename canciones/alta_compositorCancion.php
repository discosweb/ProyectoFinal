<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include 'conexion.php';

	$compositor = strip_tags($_POST["compositores"]);
	$cancion = strip_tags($_POST["id"]);
	
	$insertar = "insert into cancion_compositor (cancion_id, compositor_id) values ('$cancion', '$compositor');";
	$query = pg_query($con, $insertar);
	if($insertar){
		echo "Se guardo en la bd";
		header("Location: compositorCancion.php?cancion_id=$cancion");
	} else {
		echo "hubo un error";
	}
	
	pg_close($con);
} else {
	header('Location: ../index.php?error=2');
}

?>
