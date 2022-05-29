<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ProyectoFinal</title>

    <!-- Custom styles for this template -->
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
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top nav.navbar ">
         <!--MENÚ-->
         <div class="collapse navbar-collapse" id="navbarCollapse">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="creditos.php">Créditos</a>
             </li>
           <ul>
         </div>
         <!--FIN MENÚ-->
     </nav>
   </header><br><br><br><br><br>
   <!-- ========== END HEADER ========== -->
		<?php
		if(isset($_GET['error']) && $_GET['error'] == 1){
			echo "<p>Usuario o contraseña inválida</p>";
		}
		else if(isset($_GET['error']) && $_GET['error'] == 2){
			echo "<div style='color:red'>No se han ingresado usuario y contraseña para autentificarse</div><br>";
		}
	?>

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <!-- Tabs Titles -->
            <div class="fadeIn first">
                <h2 class="active">Inicio de sesión</h2>
            </div>

            <!-- Login Form -->
            <form method="post" action="login.php">     <!--envía los datos a login.php-->
                <i class="fas fa-user"></i> <input type="text" id="usuario" required="" class="fadeIn second" name="usuario" placeholder="usuario"><br>
                <i class="fas fa-key"></i> <input type="password" id="contraseña" required="" class="fadeIn third" name="contraseña" placeholder="contraseña"><br>
                <input class="fadeIn fourth" type="submit" name="acceder" value="acceder"><br>

                
            </form>

        </div>
    </div>
</body>
</html>
