<?php 
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include '../conexion.php';
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$pais = $_POST['pais'];

	$query= "update grupos set nombre='$nombre', pais_origen='$pais' where grupo_id='$id';";
	$resultado = pg_query($con,$query);

	if($resultado){
		echo "Seactualizo";
		header('Location: catalogo_grupos.php');
	}else{
		echo "Error";
	}

} else {
	header('Location: ../index.php?error=2');
}


?>
