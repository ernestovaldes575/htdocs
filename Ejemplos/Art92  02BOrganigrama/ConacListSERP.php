<?php
//Conexion de Base de Datos
include("Conexion.php");

$BandMens = false;
//Query
$InstSql =  "SELECT OConsecutivo, OFechInicio, OHipervin ".	//Modificar los campos
			"FROM   tt9202borgan ".			//Modificar la tabla
			"ORDER BY OConsecutivo ";			//Modificar campos
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchall();
?>	
