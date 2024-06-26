<?php
//Conexion de Base de Datos
include("Conexion.php");

$BandMens = false;
//Query
$InstSql =  "SELECT RPConsecutivo, RPAyuntam, RPejercicio, RPFechInicio, RPFechTerm, RPTipoRec ".	//Modificar los campos
			"FROM   tt9220brecurspublic ".			//Modificar la tabla
			//"WHERE  OAyuntam =  105 AND OEjercicio = 2024".
			"ORDER BY RPConsecutivo ";			//Modificar campos
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchall();
?>	
