<?php
	//!Local
	$db_contraseña = '';
	$db_usuario = 'root';
	$db_nombre = 'comsocial';

	//!Servidor
	// $db_contraseña = 'NXBWSHJ4E46L';
	// $db_usuario = 'difzinac_intranet';
	// $db_nombre = 'difzinac_comsocial';
	
	try{
		$conexion = new PDO("mysql:host=localhost;dbname=$dbname", "$user", $contraseña);
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion->exec("SET CHARACTER SET utf8");
	}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
	}