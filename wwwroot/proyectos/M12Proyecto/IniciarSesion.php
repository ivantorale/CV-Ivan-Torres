<?php
session_start();

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles2.css">
<head>
    <title>Iniciar Sesion</title>
</head>

<body>
    <button class="cerrar" type="button"><a href="PaginaPrincipal.php"><img class="imagen" src="cruz.png"/></a></button>
    <form action="initdb.php" method="POST">
    <div class="from-body">
        <img src="Avatar.png" alt="user-login">
        <p class="text">Bienvenido</p>
        <form class="login-form" action="pgprincipal.php">

        <input type="text" name="Correo" id="Login" placeholder="Email" maxlength="35" /><br>

        <input type="Password" name="password" id="Password" placeholder="Contraseña" maxlength="35"/><br>

        <input id="button" type="submit" value="Iniciar Sesión" name="IniciarSesion"/>

    </form>
    <form action="initdb.php" method="POST">
    <p class="text">¿Eres nuevo?</p>
        <input id="button" type="submit" value="Crear Cuenta" name="PCrearCuenta"/><br><br>
        <input disabled id="error" value ="<?php if(isset($_POST["Result"])) echo $_POST["Result"]; else echo ""; ?>"/><br>
        <br>
    </form>
</div>
</body>
</html>