<?php
/*
@name: creditos.php

@authors:
  1. Cano Jiménez Janeth
  2. Parra Huerta Mario
  3. Saldate Luna Luis Omar
  4. Ortega Hernandez Ariana Jatziri

@Description: Nombre de quién elaboro el proyecto

*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Créditos</title>
    <!-- Custom styles for this template -->
    <link href="css/creditos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <!-- ========== HEADER ========== -->
    <div class="contenedor">
	<header>
		<?php 
		session_start();
		if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
			echo "<a href='discos/catalogo_discos.php'>Regresa al sitio</a>";
		} else {
			echo "<a href='index.php'>Inicia sesión</a>";
		}
		?>
   		<h2>Créditos</h2>
     	</header>
     <!-- ========== END HEADER ========== -->

	    <div class="container">
		<div class="row">
		  <div class="col-sm-6">
		    <div class="card border-primary">
 	     		<div class="card-body text-primary">
 			       <h5 class="card-title">Janeth Cano</h5>
 			       <p class="card-text">Estudiante de Informática</p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6">
		    <div class="card border-primary">
		      <div class="card-body text-primary">
		        <h5 class="card-title">Mario Parra</h5>
       			 <p class="card-text">Estudiante de Informática</p>
			    </div>
		    </div>
  		</div>
	</div>

		<div class="row">
		  <div class="col-sm-6">
		    <div class="card border-primary">
 	     		<div class="card-body text-primary">
 			       <h5 class="card-title">Omar Saldate</h5>
 			       <p class="card-text">Estudiante de Informática</p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6">
		    <div class="card border-primary">
		      <div class="card-body text-primary">
		        <h5 class="card-title">Ariana Ortega</h5>
       			 <p class="card-text">Estudiante de Informática</p>
			    </div>
		    </div>
  		</div>
	</div>

	   </div>
	</div>
  </body>
</html>

