<?php
require("M12_MySQLdb.php");
session_start();
print_r($_SESSION);
if(empty($_SESSION["id_cliente"])){
    header('Location: PaginaPrincipal.php');
  }
session_destroy();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles2.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Pagina Principal</title>
  </head>

  <body>

    <!-- Inicio del menu -->
    
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
        <!-- icono o nombre -->

        <a class="navbar-brand" href="#">
          <i class="bi bi-flower1"></i>
          <span class="text-warning">NombreEmpresa</span>
        </a>
            
        <!-- boton del menu -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

          <!-- elementos del menu colapsable -->

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="IniciarSesion.php">Iniciar Sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Precios</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Servicios
              </a>

              <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Renta</a></li>
                <li><a class="dropdown-item" href="#">Equipos</a><li>   
                <li><a class="dropdown-item" href="#">Networking</a></li>
              </ul>
            </li>
          </ul>

          <hr class="d-md-none text-white-50">
   
         <!--boton Informacion -->

          <form class="d-flex" action="IniciarSesion.php" ><button class="btn btn-outline-warning d-none d-md-inline-block " type="submit">Iniciar Sesion</button></form>
          
        </div>
     
        </div>  
      </nav>
    

  </body>
</html>