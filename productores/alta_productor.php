<?php
	//verificar la sesion:
	session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include 'conexion.php';

	$nombre = strip_tags($_POST["nombre"]);
	$apellido = strip_tags($_POST["apellido"]);
	$fecha_nacimiento = strip_tags($_POST["fecha_nacimiento"]);

	$insertar = "insert into Productores (Nombre, Apellido, Fecha_nacimiento)
							values ('$nombre', '$apellido','$fecha_nacimiento');";
	$query = pg_query($con, $insertar);
	if($insertar){
		echo "Se guardo en la bd";
		header('Location: catalogo_productores.php');
	} else {
		echo "Hubo un error";
	}

	pg_close($con);
} else {
	header('Location: ../index.php?error=2');
}
?>
