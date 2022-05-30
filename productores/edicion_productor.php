<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
include '../conexion.php';
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];

	$query= "update productores set nombre='$nombre', apellido='$apellido', fecha_nacimiento ='$fecha_nacimiento'
	where productor_id='$id';";
	$resultado = pg_query($con,$query);

	if($resultado){
		echo "Se actualizo";
		header('Location: catalogo_productores.php');
	}else{
		echo "Error";
	}

} else {
	header('Location: ../index.php?error=2');
}


?>
