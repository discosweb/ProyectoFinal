<?php
/*
@name: edita_discos.php

@authors:
  1. Cano Jiménez Janeth
  2. Parra Huerta Mario
  3. Saldate Luna Luis Omar
  4. Ortega Hernandez Ariana Jatziri

@Description: Formulario donde se pueden visualizar los datos del disco para
              cambiarlos y volver a guardar, envía los datos a edicion_discos.php

*/
?>

<!doctype html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Editar Discos</title>

  <!-- Custom styles for this template -->
  <link href="" rel="stylesheet">

  <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
  </style>
</head>

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

<body>
   <!-- ========== HEADER ========== -->
   <header>
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top nav.navbar ">
          <!--MENÚ-->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="creditos.php">Créditos</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="catalogo.php">Catálogo</a>
              </li>
            <ul>
          </div>
          <!--FIN MENÚ-->
      </nav>
    </header><br><br><br><br><br>
    <!-- ========== END HEADER ========== -->

  <?php
      //conectar a la base de datos
      $con=pg_pconnect("host=localhost port=5432 dbname=BDRecords user=postgres password=BDRecords")
      or die('La conexión falló');
  ?>

    <!-- DATA TABLE -->
    <div class="container">
      <h1>Editar disco</h1>
        <table id="table_id" class="display"> <!--Agregar un hover-->

          <form method="post" action="edicion_discos.php"> <!--Envia los datos a edicion_discos.php-->

          <div class="form-group">
            <label>Titulo</label>
              <input type="text" required name="titulo" value="<?php echo $row['titulo'];?>" class="form-control">
            <label>Grupo</label>
              <input type="text" name="grupo" value="<?php echo $row['grupo'];?>" class="form-control">
            <label>Año</label>
              <input type="date" name="anio" value="<?php echo $row['anio'];?>" class="form-control">
            <label>Genero</label>
              <input type="date" name="genero" value="<?php echo $row['genero'];?>" class="form-control">
            <label>Disquera</label>
              <input type="date" name="disquera" value="<?php echo $row['disquera'];?>" class="form-control">
            <label>Productor</label>
              <input type="date" name="productor" value="<?php echo $row['productor'];?>" class="form-control">
            <label>Costo</label>
              <input type="date" name="costo" value="<?php echo $row['costo'];?>" class="form-control">
          </div>
          <input type="submit" name="actualizar" value="Actualizar" class="btn btn-success">
          </form>

        </table>
    </div><!-- DATA TABLE -->
</body>
</html>
