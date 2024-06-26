<?php
//Conexion de Base de Datos
include("Conexion.php");

$BandMens = false;
//Query
$InstSql =  "SELECT RConsecutivo, RAyuntam, REjercicio, RFechInicio, RFechTerm, RTipoInte ".	//Modificar los campos
			"FROM   tt9208bremun  ".			//Modificar la tabla
			//"WHERE  OAyuntam =  105 AND OEjercicio = 2024".
			"ORDER BY RConsecutivo ";			//Modificar campos
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchall();
?>	
