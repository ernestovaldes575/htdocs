<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$TrimTrab = $ABusqMae[1];	//Trimestre de trabajo 
$ConsFrac = $ABusqMae[2];	//Consecutivo de la Fraccion del Unidad
$FracTrab = $ABusqMae[3];	//Fraccion de trabajo 92,93

//********************************************************************
//Informacion de la Lista
//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

$CampBusq = $_POST['C02']; 
//*****************************************************************
//Para operacion A B C
$InstSql = "SELECT  OConsecutivo, ONumeRegi ". 
 			"FROM   tt9202borgan ".
			"WHERE  OAyuntam = '$ClavAyun' AND ".		
					"OEjercicio = '$EjerTrab' AND ".			
				  	"OConsecutivo = $CampBusq ".
					"ORDER BY ONumeRegi ". 
			"LIMIT 	0, 9 ";
//if ($BandMens) 
echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetchAll();

foreach($ResuSql as $RegiTabl){
	$VC03 = $RegiTabl['OConsecutivo'];

	 $ValoCamp = "C".$VC03."04"; $VC04 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."05"; $VC05 = $_POST[$ValoCamp]; 
	$ValoCamp = "C".$VC03."06"; $VC06 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."07"; $VC07 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."08"; $VC08 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."09"; $VC09 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."10"; $VC10 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."11"; $VC11 = $_POST[$ValoCamp];
	$ValoCamp = "C".$VC03."12"; $VC12 = $_POST[$ValoCamp];

	$InstSql = 	"UPDATE tt9202borgan ". 				//Cambiar tabla
				"SET    ONumeRegi   = '$VC05',".		//Cambiar campo
					   "OFechInicio = '$VC06', ".		//Cambiar campo
					   "OFechTerm   = '$VC07', ".		//Cambiar po
					   "OAreaResp   = $VC09,".			//Cambiar campo
					   "OFechAct    = '$VC10',".		//No considera 
				   	   "OFechValid  = '$VC11',".		//Cambiar campo
					   "ONota	    = '$VC12' ".  		//Cambiar campo				
				"WHERE  OAyuntam 	= '$ClavAyun' AND ".
						"OEjercicio = '$EjerTrab' AND ".	
						"OConsFrac  = '$ConsFrac' AND ".
                   		"ONumeTrim  = '$TrimTrab' AND ".		
				  		"OConsecutivo = $CampBusq ";
                   	    // "OConsecutivo = $VC03 ";
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