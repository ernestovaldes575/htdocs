<?php
if(isset($_COOKIE['CBusqMae'])){
	$ArCook01 = $_COOKIE['CBusqMae'];
	$ABusqMae = explode("|", $ArCook01);
	//echo '$ABusqMae'.$ABusqMae.'<br>';
	$EjerTrab = $ABusqMae[0];
	echo "EjerTrab=$EjerTrab";
}else{
	die('Conexion Fallida');
}
	
	//!Servidor
	// $contraseña = 'ECPTW5FPST1U';
	// $user = 'difzinac_intranet';
	// $dbname = 'difzinac_paginaweb';

	//!Local
	$contraseña = "";
	$user = "root";
	$dbname = "transpa$EjerTrab";
	//$dbname = "transparencia";
	
	try{
		$ConeBase = new PDO("mysql:host=localhost;dbname=$dbname", "$user", $contraseña);
		$ConeBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$ConeBase->exec("SET CHARACTER SET utf8");
	}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
	}
