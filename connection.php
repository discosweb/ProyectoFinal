<?php
# @Author: Janeth Cano
# @Date:   21_Apr_2021
# @Last modified by:   Janeth Cano
# @Last modified time: 20_May_2021



/*----------------------------------------------------*/
//Nombre: connection.php
//Descripción: Archivo de conexión a la base de datos.
/*----------------------------------------------------*/

/*conectar a la base de datos*/
$con=pg_pconnect("host=localhost port=5432 dbname=GaleriaVirtualSDC user=postgres password=J4N3TH99*")
or die('La conexión falló');

?>
