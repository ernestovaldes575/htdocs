<?php
	//!Servidor
	// $contraseña = 'E9TQE4QXOP3A';
	// $user = 'difzinac_intranet';
	// $dbname = 'difzinac_paginaweb';

	//!Local
	$contraseña = '';
	$user = 'root';
	$dbname = 'transparencia';
	
	try{
		$ConeBase = new PDO("mysql:host=localhost;dbname=$dbname", "$user", $contraseña);
		$ConeBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$ConeBase->exec("SET CHARACTER SET utf8");
	}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
	}
