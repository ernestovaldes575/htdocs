<?php
	include("../EncaCone.php");
 
//********************************************************************
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;
 
//Carga el registro para Consulta 
$InstSql = "SELECT CASE WHEN MAX(EPNumeProg) IS  NULL ". 
                    "THEN 0 ".  
                    "ELSE MAX(EPNumeProg)  END  AS NumeRegi ". 
	    	"FROM   et03estrprog ". 
           "WHERE   EPAyuntamiento = '$ClavAyun'  AND  EPConsForm = $ConsForm  AND ". 
				   "EPEstado = 'A' "; 
if ($BandMens) echo "1).$InstSql.<br>"; 
$EjInSql = $ConeBase->prepare($InstSql); 
$EjInSql->execute(); 
$ToReSql = $EjInSql->rowCount(); 
$ResuSql = $EjInSql->fetch(); 
$NumeRegi = ($ResuSql) ? $ResuSql[0] : 0; 
?>
