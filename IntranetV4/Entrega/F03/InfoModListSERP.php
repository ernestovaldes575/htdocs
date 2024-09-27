<?php
	include("../EncaCone.php");
 
//********************************************************************
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;
 
//Carga el registro para Consulta 
$InstSql = "SELECT EPConsecutEPNumeProgEPNumeActaEPFechAproEPNumeGaceEPFechPUbliEPUltiReviEPMediDifuEPUnidResgEPObservacion ". 
	    	"FROM   et03estrprog ". 
           "WHERE   EPConsecut >= $CampBusq  AND  EPAyuntamiento = '$ClavAyun'  AND  EPConsForm = $ConsForm  AND ". 
				   "EPEstado = 'A' "; 
			"LIMIT 0, 9 ";
if ($BandMens) echo "1)$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql); 
$EjInSql->execute(); 
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetchAll();
 
?>
