<?php
//Conexion de Base de Datos
include("Conexion.php");

$BandMens = false;
$ClavAyun = "105";
$EjerTrab = 2024;
//Query
$InstSql =  "SELECT AConsecutivo, APeriodoInforma, AHiperInformacion ". 
			"FROM  a9252c ".	
			//"WHERE  AAyuntamiento = '$ClavAyun' AND ".
			       //"AEjercicio = $EjerTrab ";              
			"ORDER BY AConsecutivo";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchall();
?>	


