<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include 'conexion.php';

	$cancion = strip_tags($_POST["canciones"]);
	$disco = strip_tags($_POST["id"]);
	
	$insertar = "insert into disco_cancion (disco_id, cancion_id) values ('$disco', '$cancion');";
	$query = pg_query($con, $insertar);
	if($insertar){
		echo "Se guardo en la bd";
		header("Location: cancionDisco.php?disco_id=$disco");
	} else {
		echo "hubo un error";
	}
	
	pg_close($con);

} else {
	header('Location: ../index.php?error=2');
}


?>
