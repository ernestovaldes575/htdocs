<?php
//Conexion de Base de Datos
include("Conexion.php");

$BandMens = false;
//Query
$InstSql =  "SELECT TConsecutivo, TAyuntam, TEjercicio, TFechInicio, TFechTerm ".	//Modificar los campos
			"FROM   tt9210btotalplazvac ".			//Modificar la tabla
			//"WHERE  MAyuntam =  105 AND MEjercicio = 2024".
			"ORDER BY TConsecutivo ";			//Modificar campos
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchall();
?>	
