<?php

class MySQLdb 
	{

private $server = "localhost";
private $database_name = "PaginaWeb_M12";
private $username = "root";
private $password = "";
private $table_name1 = "clientes";
private $connection="";
private $tableFields1="";

	
		function __construct()
		{
			$this ->connetToServerDataBase();
			$this ->createDataBase();
			$control = $_POST["control"];
			$this-> connetToServerDataBase();
			if($control=="iniciar") $this -> IniciarSesion();
			if($control=="crear") $this -> crear();
			if($control=="CreateUser") $this -> CreateUser();
			if($control=="nada") $this -> nada();
		}
	function connetToServerDataBase(){
		$this->connection=mysqli_connect($this->server, $this->username,$this->password);
		}

	 function createDataBase(){
		$query = "CREATE DATABASE IF NOT EXISTS $this->database_name";
		$ok = mysqli_query($this->connection,$query);
		}	

    
   function createTable(){
  	    $query = "CREATE TABLE IF NOT EXISTS $this->database_name.$this->table_name1($this->tableFields1) ENGINE = MYISAM";
	 	$ok = mysqli_query($this->connection,$query);	          
    }
   
   function defineTableField1(){
		$this->tableFields1="
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`Password` varchar(200) NOT NULL,
		`Email` varchar(200) NOT NULL,
		 PRIMARY KEY (`id`, `Email`)";
	
	}

	function functionInsertRegister1(){
	$Password=$_POST["password"];
	$Email=$_POST["correo"];
	
	$query = "INSERT INTO $this->database_name.$this->table_name1 (`Password`,`Email`) VALUES ('$Password', '$Email');";
	$ok = mysqli_query($this->connection,$query);	 	     
	}

	function IniciarSesion(){
	
	$Password=$_POST["password"];
	$Email=$_POST["Correo"];

	$query = mysqli_query($this->connection, "SELECT * FROM $this->database_name.$this->table_name1 WHERE `Email`='$Email' and `Contraseña`='$Password'");
	$numrows = mysqli_num_rows($query);

	$consulta = "SELECT `nombre`,`id_rol` FROM $this->database_name.$this->table_name1 WHERE `Email`='$Email' and `Contraseña`='$Password'";
	$resultado=mysqli_query($this->connection,$consulta);
	$filas = mysqli_fetch_array($resultado);
	
	if ($numrows > 0 && $filas['id_rol']== 1){
		session_start();
		$_SESSION['usuario'] = $filas;
		header('Location: PaginaPrincipal.php');

	}elseif($numrows > 0 && $filas['id_rol']== 2){
		session_start();
		$_SESSION['usuario'] = $filas;
		$filas['id_rol'] = 2;
		header('Location: PaginaPrincipalAdmin.php');
		//http://localhost/M12_Proyecto_Prueba/PaginaPrincipalAdmin.php
	}
	else{
		$_POST['Result']="Contraseña incorrecta";}

	}


	function crear(){
		header('Location: CrearCuenta.php');

	}

	function CreateUser(){
	$Nombre = $_POST["Nombre"];
	$Apellido1 = $_POST["Apellido1"];
	$Apellido2 = $_POST["Apellido2"];
	$Password=$_POST["password"];
	$Rpassword=$_POST["Rpassword"];
	$Email=$_POST["Correo"];
	
	if($Password==$Rpassword){
			$query1 = mysqli_query($this->connection, "SELECT * FROM $this->database_name.$this->table_name1 WHERE `Email`='$Email'");
			$numrows = mysqli_num_rows($query1);
			if($numrows <= 0){
				$query = "INSERT INTO $this->database_name.$this->table_name1 (`nombre`,`apellido1`,`apellido2`,`Email`, `Contraseña`) VALUES ('$Nombre', '$Apellido1', '$Apellido2','$Email', '$Password');";
			$ok = mysqli_query($this->connection,$query);
			$_POST['Result']="Cuenta creada";
			}else{
				$_POST['Result']="El Email ya esta en uso";
			}

			
		}else{
		$_POST['Result']="La contraseña no conciden";
		}
	}

	function nada(){

	}

	function nombreUser(){
		$query1 = mysqli_query($this->connection,"SELECT `nombre` FROM $this->database_name.$this->table_name1 WHERE `Email`='$Email' and `Contraseña`='$Password'");
		session_start();
		$nombre = mysqli_fetch_assoc($query1);
		$numrows1 = mysqli_num_rows($query1);

		if($numrows1 > 0){
			$_SESSION['usuario'] = $nombre;
		}else{
			echo "Iniciar Sesion";
		}
	}


}


?>