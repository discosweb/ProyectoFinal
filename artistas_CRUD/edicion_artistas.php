<?php
/*
@name: edicion_artistas.php

@author: Cano Jiménez Janeth

@Description: Archivo en PHP que recibe los datos y los guarda en la BD.


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
?>

  <?php
      //conectar a la base de datos
      $con=pg_pconnect("host=localhost port=5432 dbname=BDRecords user=postgres password=BDRecords")
      or die('La conexión falló');

      require_once "edita_artistas.php";

      $id = $_GET['id'];
      $consulta = "SELECT * FROM artistas WHERE id = '$id'";
      $resultado = pg_query($con, $consulta);
      $row = pg_fetch_assoc($resultado);

      if (isset($_POST['actualizar'])) {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $pais_nacimiento = $_POST['Pais_Nacimiento'];
        $fecha_nacimiento = $_POST['Fecha_Nacimiento'];
        $nombre_artistico = $_POST['Nombre_Artistico'];

        $update = "UPDATE artistas
                    SET Nombre='$nombre', Apellido='$apellido',
                        pais_nacimiento = '$Pais_Nacimiento',
                        fecha_nacimiento = '$Fecha_Nacimiento',
                        nombre_artistico = '$Nombre_Artistico'
                    WHERE id ='$id'"; //'Nombre' = required name="Nombre" en el formulario

        $res = pg_query($con,$update);
        header('location: catalogo_artistas.php');
      }

    ?>
