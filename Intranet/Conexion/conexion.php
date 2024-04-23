<?php
	$contraseña = 'NXBWSHJ4E46L';
	$user = 'difzinac_intranet';
	$dbname = 'difzinac_transparencia';

	try{
		$conexion = new PDO("mysql:host=localhost;dbname=$dbname", "$user", $contraseña);
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion->exec("SET CHARACTER SET utf8");
	}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
	}
?>