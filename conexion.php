<?php
//Conexion al manejador y base de datos
$con = pg_connect("dbname=bdrecords user=discos_oper password=operador port=5432") or die (pg_last_error());
//var_dump($con);
?>
