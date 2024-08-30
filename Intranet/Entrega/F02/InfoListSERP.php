<?php
	include('../EncaCone.php');

//********************************************************************
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para Consulta
$InstSql = "SELECT  RIConsecu,RINumeProg, RINombRegl,  ". 
				   "RIVigencia, RIDepeSuje, RINumeEjem,". 
				   "RIDepeRespElab, RIDepeRespAuto, RIObserva ". 
 			"FROM   eter02reglinte ".
			"WHERE  RIAyuntamiento = '$ClavAyun' AND ".
				   "RIConsForm = $ConsForm AND  ".
				   "RIEstasdo = 'A' ".
			"ORDER BY RINumeProg ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>