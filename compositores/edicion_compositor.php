<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include 'conexion.php';
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$pais_nacimiento = $_POST['pais_nacimiento'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];

	$query= "update compositores set nombre='$nombre', apellido='$apellido',
	 				 pais_nacimiento='$pais_nacimiento', fecha_nacimiento='$fecha_nacimiento'
					 where compositor_id='$id';";
	$resultado = pg_query($con,$query);

	if($resultado){
		echo "Se actualizo";
		header('Location: catalogo_compositores.php');
	}else{
		echo "Error";
	}
} else {
	header('Location: ../index.php?error=2');
}

?>
