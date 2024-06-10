<?php
	//!Servidor
	// $contraseña = 'E9TQE4QXOP3A';
	// $user = 'difzinac_intranet';
	// $dbname = 'difzinac_acceso';

	//!Local
	$contraseña = '';
	$user = 'root';
	$dbname = 'acceso';

	try{
		$con = new PDO("mysql:host=localhost;dbname=$dbname", $user, $contraseña);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$con->exec("SET CHARACTER SET utf8");
	}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
	}