<?php
//Conexion de Base de Datos
include("Conexion.php");

$BandMens = false;
//Query
$InstSql =  "SELECT TRConsecutivo, TRAyuntam, TREjercicio, TRFechInicio, TRFechTerm, TRDenom ".	//Modificar los campos
			"FROM    tt9224tramreq  ".			//Modificar la tabla
			//"WHERE  OAyuntam =  105 AND OEjercicio = 2024".
			"ORDER BY TRConsecutivo ";			//Modificar campos
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchall();
?>	
