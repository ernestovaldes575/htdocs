<?php
//Conexion de Base de Datos
include("Conexion.php");

$BandMens = false;
//Query
$InstSql =  "SELECT MConsecutivo, MAyuntam, MEjercicio, MFechInicio, MFechTerm ".	//Modificar los campos
			"FROM   tt9205bmatriz ".			//Modificar la tabla
			//"WHERE  MAyuntam =  105 AND MEjercicio = 2024".
			"ORDER BY MConsecutivo ";			//Modificar campos
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchall();
?>	
