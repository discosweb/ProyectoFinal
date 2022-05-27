<?php
/*
@name: baja_discos.php

@authors:
  1. Cano Jiménez Janeth
  2. Parra Huerta Mario
  3. Saldate Luna Luis Omar
  4. Ortega Hernandez Ariana Jatziri

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

  $sql = "DELETE FROM discos WHERE id = '$id'";

  $resultado = pg_query($con, $sql);
  if($resultado){
    header('location: catalogo.php');
  }

?>
