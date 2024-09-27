<?php
	include("../EncaCone.php");

//********************************************************************
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para Consulta
$InstSql = "SELECT EPMediDifu,EPUnidResg,EPObservacion,EPNumeProg,EPNumeActa,EPFechApro,EPNumeGace,EPFechPUbli,EPUltiRevi ". 
 			"FROM   et03estrprog ". 
			"WHERE   EPAyuntamiento = '$ClavAyun'  AND  EPConsForm = $ConsForm  AND EPEstado = 'A'  ". 
			" ORDER BY EPNumeProg "; 
			
if ($BandMens)  
   echo "1) $InstSql <br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>




