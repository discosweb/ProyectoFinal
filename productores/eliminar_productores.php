<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
include 'conexion.php';
	$id= $_POST['id'];
	$query = "delete from productores where productor_id='$id';";
	$resultado = pg_query($con,$query);
	if($resultado){
		header('Location: catalogo_productores.php');
	}else{
		echo "No se elimino";
	}	

} else {
	header('Location: ../index.php?error=2');
}

?>
