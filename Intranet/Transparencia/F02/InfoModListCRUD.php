<?php
include('../EncaCone.php');

//********************************************************************
//Informacion de la Lista
//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

$CampBusq = $_POST['C02']; 
//*****************************************************************
//Para operacion A B C
$InstSql = "SELECT  RIConsecu,RINumeProg ". 
 			"FROM   eter02reglinte ".
			"WHERE  RIAyuntamiento = '$ClavAyun' AND ".
				   "RIConsForm = $ConsForm AND  ".
				   "RIConsecu >= $CampBusq ".
			"ORDER BY RINumeProg ". 
			"LIMIT 0, 9 ";
//if ($BandMens) 
echo '1)'.$InstSql.'<br>'; 
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

	$InstSql = 	"UPDATE eter02reglinte ". 				//Cambiar tabla
				"SET    RINumeProg = $VC04,". 			//Cambiar campo
					   "RINombRegl = '$VC05',".			//Cambiar campo
					   "RIFechEmis = '$VC06', ".		//Cambiar campo
					   "RIVigencia = '$VC07', ".		//Cambiar po
					   "RIDepeSuje = '$VC08',".			//Cambiar campo
					   "RINumeEjem = $VC09,".			//Cambiar campo
					   "RIDepeRespElab = '$VC10',".		//No considera 
				   	   "RIDepeRespAuto = '$VC11',".		//Cambiar campo
					   "RIObserva = '$VC12',".  		//Cambiar campo
					   "RIModiSePu = $ConsUsua, ".
					   "RIFechModi = DATE(NOW()) ".				
				"WHERE  RIAyuntamiento = '$ClavAyun' AND ".
                 	   "RIConsForm = $ConsForm AND ".
                   	   "RIConsecu = $VC03 ";;
	//Ejecuta la instruccion
	if ($BandMens) echo '1)'.$InstSql.'<br>';
	$ResuSql = $ConeBase->prepare($InstSql);
	$ResuSql->execute();
	$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
	if (!$ResuSql) 
	  echo '<script>alert("'.$MensResp.'");</script>'; 
	  
 }
$PagiRegr = "location: InfoList.php";
if (!$BandMens) header($PagiRegr);	
?>