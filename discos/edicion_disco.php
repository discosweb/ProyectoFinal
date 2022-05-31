<?php 
session_start();
	if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
	include '../conexion.php';
	$id = $_POST['id'];
	$titulo = strip_tags($_POST["titulo"]);
	$grupo = strip_tags($_POST["grupo"]);
	$anio = strip_tags($_POST["anio"]);
	$genero = strip_tags($_POST["genero"]);
	$disquera = strip_tags($_POST["disqueras"]);
	$productor = strip_tags($_POST["productores"]);
	$costo = strip_tags($_POST["costo"]);

	$query= "update discos set titulo='$titulo', grupo_id='$grupo', año='$anio', genero ='$genero', disquera_id='$disquera', productor_id='$productor', costo='$costo' where disco_id='$id';";
	$resultado = pg_query($con,$query);

	if($resultado){
		echo "Seactualizo";
		header('Location: catalogo_discos.php');
	}else{
		echo "Error";
	}
} else {
	header('Location: ../index.php?error=2');
}

?>
