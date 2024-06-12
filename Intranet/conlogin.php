<?php
	//?Servidor
	$contraseña = "";
	$dbname = "acceso";
	$user = "root";
	
	//?Local
	// $contraseña = "E9TQE4QXOP3A";
	// $dbname = "difzinac_acceso";
	// $user = "difzinac_intranet";

	try{
		$con = new PDO("mysql:host=localhost;dbname=$dbname", $user, $contraseña);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$con->exec("SET CHARACTER SET utf8");
		$InstSql = 	"SELECT 	AConsecut,AAyuntamiento,CAYDescripcion,". 
							"AUnidAdmi,CUNClaveUnidad,CUNDescripcion ". 
					"FROM atacceso ". 
					"inner Join ACAyuntamiento ON  CAYClave = AAyuntamiento Q".
					"inner Join ACUnidades ON CUNConsecutivo = AUnidAdmi ".
					"WHERE 	AClaceAcce = '000001' AND ". 
							"AContAcce= '000001'";
							
		echo "1)<br>$InstSql<br>";
		$ResuSql = $con->prepare($InstSql);
		$ResuSql->execute();
		$result = $ResuSql->fetch();
		echo "2)<br>$InstSql<br>";
	}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
	}
?>