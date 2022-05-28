<?php
//Conexion al manejador y base de datos
$con = pg_connect("dbname=disqueras user=usuario1 password=hola123 port=5432") or die (pg_last_error());
var_dump($con);
?>
