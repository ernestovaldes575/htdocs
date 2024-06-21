<?php

	//!Local
	$db_contraseña = '';
	$db_usuario = 'root';
	$db_nombre = 'tecninfo';

	//!Servidor
	// $db_contraseña = 'NXBWSHJ4E46L';
	// $db_usuario = 'difzinac_intranet';
	// $db_nombre = 'difzinac_tecninfo';
	
	try{
		$cone = new PDO("mysql:host=localhost;dbname=$db_nombre", "$db_usuario", $db_contraseña);
		$cone->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$cone->exec("SET CHARACTER SET utf8");
	}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
	}