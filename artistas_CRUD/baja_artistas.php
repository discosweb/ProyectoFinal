<?php
/*
@name: baja_artistas.php

@author: Cano Jiménez Janeth

@Description: Recibe el ID del disco que se desea dar de baja y pide
              confirmación para eliminar el registro, envía la confirmación
              a elimina_discos.php



*/
?>

<?php
  //conectar a la base de datos
  $con=pg_pconnect("host=localhost port=5432 dbname=BDRecords user=postgres password=BDRecords")
  or die('La conexión falló');


  $id = $_GET['id'];

  if($id){
    echo "";
  }

  $sql = "DELETE FROM slider WHERE id = '$id'";

  $resultado = pg_query($con, $sql);
  if($resultado){
    header('location: catalogo_artistas.php');
  }

?>
