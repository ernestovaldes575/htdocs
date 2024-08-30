<?php

	//!Local
	$db_contraseña = "";
	$db_usuario = "root";
	$db_nombre = "acceso";

	//!Servidor
	// $db_contraseña = "ECPTW5FPST1U";
	// $db_usuario = "difzinac_intranet";
	// $db_nombre = "difzinac_acceso";
	
	try{
		$ConeBase = new PDO("mysql:host=localhost;dbname=$db_nombre", $db_usuario, $db_contraseña);
		$ConeBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$ConeBase->exec("SET CHARACTER SET utf8");
	}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
	}
?>