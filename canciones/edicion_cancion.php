<?php 
	include 'conexion.php';
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];

	$query= "update canciones set titulo='$titulo' where cancion_id='$id';";
	$resultado = pg_query($con,$query);

	if($resultado){
		echo "Seactualizo";
		header('Location: catalogo_canciones.php');
	}else{
		echo "Error";
	}


?>
