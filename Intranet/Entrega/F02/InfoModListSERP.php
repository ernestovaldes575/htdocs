<?php
	include('../EncaCone.php');

//********************************************************************

$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

if( isset($_GET['PaAMB01']) != ''){	
	$CampBusq = $_GET["PaAMB01"];	#Campo de busqueda
 }	

//Carga el registro para Consulta
$InstSql = "SELECT  RIConsecu,RINumeProg, RINombRegl, RIFechEmis, ". 
				   "RIVigencia, RIDepeSuje, RINumeEjem,". 
				   "RIDepeRespElab, RIDepeRespAuto, RIObserva ". 
 			"FROM   eter02reglinte ".
			"WHERE  RIAyuntamiento = '$ClavAyun' AND ".
				   "RIConsForm = $ConsForm AND ".
				   "RIEstasdo = 'A' AND ".
				   "RIConsecu >= $CampBusq ".
			"ORDER BY RINumeProg ". 
			"LIMIT 0, 9 ";
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetchAll();

?>