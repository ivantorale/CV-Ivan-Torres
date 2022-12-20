<?php
    require_once("M12_MySQLdb.php");
    if(isset($_POST['IniciarSesion'])){} $_POST['control']="iniciar";
    if(isset($_POST['PCrearCuenta'])) $_POST['control']="crear";
    if(isset($_POST['CrearCuenta'])) $_POST['control']="CreateUser";
    if(isset($_POST['nada'])) $_POST['control']="nada";

    $db = new MySQLdb();

    require_once("IniciarSesion.php");
    
?>