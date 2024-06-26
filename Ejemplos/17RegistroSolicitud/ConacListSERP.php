<?php
//Conexion de Base de Datos
include("Conexion.php");

$BandMens = false;
//Query
$InstSql =  "SELECT RSConsecutivo, RSAyuntam, RSEjercicio, RSFechInicio, RSFechTerm, RSFechSoli ".	//Modificar los campos
			"FROM    tt9217regisolic ".			//Modificar la tabla
			//"WHERE  OAyuntam =  105 AND OEjercicio = 2024".
			"ORDER BY RSConsecutivo ";			//Modificar campos
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchall();
?>	
