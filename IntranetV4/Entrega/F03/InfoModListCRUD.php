<?php
include("../EncaCone.php");

//********************************************************************
//Informacion de la Lista
//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;
 
$CampBusq = $_POST["C02"]; 
//*****************************************************************
//Para operacion A B C 
$InstSql = "SELECT EPConsecut,EPNumeProg ". 
	    	"FROM   et03estrprog ". 
           "WHERE   EPConsecut >= $CampBusq  AND  EPAyuntamiento = '$ClavAyun'  AND  EPConsForm = $ConsForm  AND ". 
				   "EPEstado = 'A' "; 
			"LIMIT 0, 9 ";
if ($BandMens) echo "1) $InstSql <br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetchAll();
 
foreach($ResuSql as $RegiTabl){
	$VC03 = $RegiTabl[0];
	$ValoCamp = "C".$VC03."04"; $VC04 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."05"; $VC05 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."06"; $VC06 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."07"; $VC07 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."08"; $VC08 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."09"; $VC09 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."10"; $VC10 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."11"; $VC11 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."12"; $VC12 = $_POST[$ValoCamp];
		$InstSql = 	"UPDATE et03estrprog ". 
						"SET EPNumeProg = $VC03,".  
							"EPNumeActa = $VC04,".  
							"EPFechApro = '$VC05',".  
							"EPNumeGace = $VC06,".  
							"EPFechPUbli = $VC07,".  
							"EPUltiRevi = $VC08,".  
							"EPMediDifu = '$VC09',".  
							"EPUnidResg = '$VC10',".  
							"EPObservacion = $VC11,".  
							"EPModiSePu = $ConsUsua, ".
							"EPFechModi = DATE(NOW()) ".
					"WHERE  EPConsecut = $CampBusq  AND ".
							" EPAyuntamiento = '$ClavAyun'  AND ".
							" EPConsForm = $ConsForm ";
	//Ejecuta la instruccion 
	if ($BandMens) echo "1) $InstSql <br>"; 
	$ResuSql = $ConeBase->prepare($InstSql); 
	$ResuSql->execute(); 
	$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente"; 
	if (!$ResuSql) 
	  echo "<script> alert( $MensResp ); </script>"; 
	  
 } 
$PagiRegr = "location: InfoList.php"; 
if (!$BandMens) header($PagiRegr);	
?>
