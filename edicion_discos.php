<?php
/*
@name: edicion_discos.php

@authors:
  1. Cano Jiménez Janeth
  2. Parra Huerta Mario
  3. Saldate Luna Luis Omar
  4. Ortega Hernandez Ariana Jatziri

@Description: Archivo en php que recibe los datos y los guarda en la BD.

*/
?>

<?php
  //INICIAR SESIÓN O REANUDAR EXISTENTE
  session_start();

  if (isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
  } else {
    header('location: login.php');
    die() ;
  }

    //conectar a la base de datos
    $con=pg_pconnect("host=localhost port=5432 dbname=BDRecords user=postgres password=BDRecords")
    or die('La conexión falló');

    $id = $_GET['id'];
    $consulta = "SELECT * FROM discos WHERE id = '$id'";
    $resultado = pg_query($con, $consulta);
    $row = pg_fetch_assoc($resultado);

    if (isset($_POST['actualizar'])) {
      $titulo = $_POST['titulo'];
      $grupo = $_POST['grupo'];
      $anio = $_POST['anio'];
      $genero = $_POST['genero'];
      $disquera = $_POST['disquera'];
      $productor = $_POST['productor'];
      $costo = $_POST['costo'];

      $update = " UPDATE discos
                  SET titulo='$titulo', grupo='$grupo', anio = '$anio', genero = '$genero', disquera = '$disquera', productor = '$productor', costo = '$costo'
                  WHERE id ='$id'"; //'titulo' = required name="titulo"

      $res = pg_query($con,$update);
      header('location: catalogo.php');
    }

  ?>
