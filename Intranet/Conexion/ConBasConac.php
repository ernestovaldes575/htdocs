<?php
	//!Servidor
	// $contraseña = "NXBWSHJ4E46L";
	// $user = "difzinac_intranet";
	// $dbname = "difzinac_conac";

	//!Local
	$contraseña = "";
	$user = "root";
	$dbname = "conac";
	try{
		$ConeBase = new PDO("mysql:host=localhost;dbname=$dbname", "$user", $contraseña);
		$ConeBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$ConeBase->exec("SET CHARACTER SET utf8");
	}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
	}