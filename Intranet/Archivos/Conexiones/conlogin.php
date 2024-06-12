<?php
    $ConeInEx = $_SESSION['ConeInEx'];
	// echo "Conexion: $ConeInEx<br>";
	//!Local
	$contraseña = '';
	$user = 'root';
	$dbname = 'acceso';

	if($ConeInEx == 'Externo'){
		//!Servidor
		$contraseña = 'NXBWSHJ4E46L';
		$user = 'difzinac_intranet';
		$dbname = 'difzinac_acceso';
	}
	try{
		$con = new PDO("mysql:host=localhost;dbname=$dbname", "$user", $contraseña);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$con->exec("SET CHARACTER SET utf8");
	}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
	}