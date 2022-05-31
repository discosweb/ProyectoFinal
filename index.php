<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ProyectoFinal</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

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

<body>
  <!-- ========== HEADER ========== -->
  <header>

   </header><br><br><br><br><br>
   <!-- ========== END HEADER ========== -->

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <!-- Tabs Titles -->
            <div class="fadeIn first">
                <h2 class="active">Inicio de sesión</h2>
            </div>

            <!-- Login Form -->
            <form method="post" action="login.php">     <!--envía los datos a login.php-->
                <i class="fas fa-user"></i> <input type="text" id="usuario" required class="fadeIn second" name="usuario" pattern="[A-Za-záéíóúñ0-9_-]{2,50}" placeholder="usuario"><br>
                <i class="fas fa-key"></i> <input type="password" id="contraseña" required pattern="[A-Za-z0-9áéíóúñ_-]{2,50}"class="fadeIn third" name="contraseña" placeholder="contraseña"><br>
                <input class="fadeIn fourth" type="submit" name="acceder" value="acceder"><br>
            </form>

            <div>
              <a class="" href="creditos.php">Créditos</a>
            </div>

            <?php
        		if(isset($_GET['error']) && $_GET['error'] == 1){
        			echo "<div class='alert alert-warning'><p>Usuario o contraseña inválida</p></div>";
        		}
        		else if(isset($_GET['error']) && $_GET['error'] == 2){
        			echo "<div class='alert alert-danger'>No se han ingresado usuario y contraseña para autentificarse</div><br>";
        		}
        	?>

        </div>
    </div>
    <script src="js/formulario.js"></script>
</body>
</html>
