<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include 'conexion.php';

	$titulo = strip_tags($_POST["titulo"]);
	
	$insertar = "insert into canciones (titulo) values ('$titulo');";
	$query = pg_query($con, $insertar);
	if($insertar){
		echo "Se guardo en la bd";
		header('Location: catalogo_canciones.php');
	} else {
		echo "hubo un error";
	}
	
	pg_close($con);

} else {
	header('Location: ../index.php?error=2');
}


?>
