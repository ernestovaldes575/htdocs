<?php
//Conexion de Base de Datos
include("Conexion.php");

$BandMens = true;
$ClavAyun = "105";
$EjerTrab = 2024;
//Query
$InstSql =  "SELECT AConsecutivo,AFechaInicio, AFechaTermino,ADenominacion ". 
			"FROM  art92_iii ".	
			"WHERE  AAyuntamiento = '$ClavAyun' AND ".
			       "AEjercicio = $EjerTrab ";              
			             			//Modificar campos
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchall();
?>	
