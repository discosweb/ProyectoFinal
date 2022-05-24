<?php
/*
@name: login.php

@authors:
  1. Cano Jiménez Janeth
  2. Parra Huerta Mario
  3. Saldate Luna Luis Omar
  4. Ortega Hernandez Ariana Jatziri

@Description Archivo donde se valida el ingreso del usuario adminsitrador.
*/
?>

<!-- ========== VALIDACIÓN USUARIO ADMINISTRADOR ========== -->
<?php
  $usuario = $_POST["usuario"];
  $password = $_POST["contraseña"];
  $perfil = "administrador";

  if(strtolower($usuario) == strtolower("discos_DBO") && strtolower($password) == strtolower("discos_DBO") && $perfil == "administrador" )
  {
    session_start();
    $_SESSION['usuario'] = strtolower($usuario);
    header("location: catalogo_discos.php");//redirigir catalogo_discos.php si el inicio de sesión fue exitoso
  } else {
      header("location:index.php?fallo=true");//redirigir a index.php si el inicio de sesión no fue exitoso
      exit();
  }
?>
<!-- ========== END VALIDACIÓN USUARIO ADMINISTRADOR ========== -->
