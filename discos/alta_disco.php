<?php
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include 'conexion.php';

	$titulo = strip_tags($_POST["titulo"]);
	$grupo = strip_tags($_POST["grupo"]);
	$anio = strip_tags($_POST["anio"]);
	$genero = strip_tags($_POST["genero"]);
	$disquera = strip_tags($_POST["disqueras"]);
	$productor = strip_tags($_POST["productores"]);
	$costo = strip_tags($_POST["costo"]);
	
	$insertar = "insert into discos (Titulo,Grupo_id,Año,Genero,Disquera_id,Productor_id,Costo) values ('$titulo', '$grupo', '$anio', '$genero', '$disquera', '$productor', '$costo');";
	$query = pg_query($con, $insertar);
	if($insertar){
		echo "Se guardo en la bd";
		header('Location: catalogo_discos.php');
	} else {
		echo "hubo un error";
	}
	
	pg_close($con);
} else {
	header('Location: ../index.php?error=2');
}
?>
