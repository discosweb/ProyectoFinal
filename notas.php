<?php
# @Author: Janeth Cano
# @Date:   21_Apr_2021
# @Last modified by:   Janeth Cano
# @Last modified time: 20_May_2021



/*----------------------------------------------------*/
//Nombre: connection.php
//Descripción: Archivo de conexión a la base de datos.
/*----------------------------------------------------*/


NOTAS

artistas
	//alta_Artistas
	//baja_artistas
	catalogo
	edicion
	edita
	eliminar
	form
canciones
	alta cancion
	alta compositor
	baja canciones
	catalogo canciones
	compositor cancion
	edicion cancion
	edita canciones
	eliminar canciones
	eliminar compositor cancion
	form

compositores

	alta
	baja
	catalogo
	edicion
	edita
	eliminar
	form

discos
	alta_cancionDisco      --> Solo es PHP
	alta_disco             --> Solo es PHP
	//baja_disco
	//cancion_Disco
	//catalogo
	edicion_disco           --> Solo es PHP
	//edita_disco
	eliminar_Canciondisco   --> Solo es PHP
	eliminar_discos         --> Solo es PHP
	//form_disco

disqueras

	alta
	baja
	catalogo
	edicion
	edita
	eliminar
	form

grupos

	alta artistas grupo
	alta grupo
	artistas grupo
	baja grupos
	catalogo grupos
	edicion
	edita
	eliminar artista grupo
	eliminar grupos
	form

productores

	alta
	baja
	catalogo
	edicion
	edita
	elimina
	form

/*conectar a la base de datos*/
$con=pg_pconnect("host=localhost port=5432 dbname=GaleriaVirtualSDC user=postgres password=J4N3TH99*")
or die('La conexión falló');

?>
