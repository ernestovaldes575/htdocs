<?php
	include('../EncaCone.php');

//********************************************************************
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para Consulta
$InstSql = "SELECT CASE WHEN MAX(RINumeProg) IS  NULL ". 
                    "THEN 0 ". 
                    "ELSE MAX(RINumeProg)  END  AS NumeRegi ".
	 		"FROM   eter02reglinte ".
            "WHERE  RIAyuntamiento = '$ClavAyun' AND ".
                   "RIConsForm = $ConsForm AND ". 
					"RIEstasdo = 'A'";
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetch();
$NumeRegi = ($ResuSql) ? $ResuSql['NumeRegi'] : 0;  
?>