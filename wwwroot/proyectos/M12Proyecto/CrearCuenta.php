<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles2.css">
<head>
    <title>Crear Cuenta</title>
</head>

<body>
    <button class="cerrar" type="button"><a href="PaginaPrincipal.php"><img class="imagen" src="cruz.png"/></a></button>
    <form action="initdb.php" method="POST">
    <div class="from-body">
        <img src="Avatar.png" alt="user-login">
        <p class="text">Crear cuenta</p>
        <form class="login-form" action="pgprincipal.php">
        <input type="text" name="Nombre" id="Login" placeholder="Nombre" maxlength="20" required /><br>
        <input type="text" name="Apellido1" id="Login" placeholder="Apellido 1" maxlength="20" required/><br>
        <input type="text" name="Apellido2" id="Login" placeholder="Apellido 2" maxlength="20"/><br>
        <input type="text" name="Correo" id="Login" placeholder="Email" maxlength="35" required/>
        <input type="Password" name="password" id="Password" placeholder="Contraseña" maxlength="35" required/>

        <input type="Password" name="Rpassword" id="Password2" placeholder="Repite la Contraseña" maxlength="35"required/><br>

        <input id="button" type="submit" value="Crear Cuenta" name="CrearCuenta" /><br>
    </form>

</div>
</body>
</html>