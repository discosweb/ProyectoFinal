<?php
/*
@name: login.php

@authors:
  1. Cano Jiménez Janeth
  2. Parra Huerta Mario
  3. Saldate Luna Luis Omar
  4. Ortega Hernandez Ariana Jatziri

@Description: Archivo donde se valida el ingreso del usuario adminsitrador.
 */

	include 'conexion.php';
	//Recibir usuario y contrasena para verificar
	$usuario = strip_tags($_POST['usuario']);
	$password = strip_tags($_POST['contraseña']);
	//ejecutar consulta a bd y asigno a variables
	$consulta = "select username, password from usuarios where username='$usuario'";
	$ejecucion = pg_query($con,$consulta);
	$resultado = pg_fetch_assoc($ejecucion);
	$usuariobd = $resultado['username'];
	$contrasenabd = $resultado['password'];

	if($usuario == $usuariobd && $password == $contrasenabd){
		//Creacion de sesion
		session_start();
		//Asignar variables de sesion: autenticación exitosa
		$_SESSION['valida']=true;
		//redireccionar ctalogo discos.php
		header('Location: discos/catalogo_discos.php');
	} else{
		//Redireccionar a index.php?error=1
		header('Location: index.php?error=1');
		//echo "No coinciden";
	}
?>
