<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$TrimTrab = $ABusqMae[1];	//Trimestre de trabajo 
$ConsFrac = $ABusqMae[2];	//Consecutivo de la Fraccion del Unidad
$FracTrab = $ABusqMae[3];	//Fraccion de trabajo 92,93
$NumeInci = $ABusqMae[4];	//Numero Inciso
$NumeSubi = $ABusqMae[5];	//Numero de Subinciso
$Nomativi = $ABusqMae[6];	//Normatividad

//********************************************************************

$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

if( isset($_GET['PaAMB01']) != ''){	
	$CampBusq = $_GET["PaAMB01"];	#Campo de busqueda
 }	
 include "../tcarea.php";
//Carga el registro para Consulta
$InstSql = "SELECT  OConsecutivo, OAyuntam, ".
				  "OEjercicio, ONumeRegi, OFechInicio, OFechTerm, ". 
				  "OHipervin, OAreaResp, OFechAct, OFechValid, ONota ". 
 			"FROM   tt9202borgan ".
			"WHERE  OAyuntam = '$ClavAyun' AND ".
				   "OEjercicio = $EjerTrab AND ".
                   "OConsFrac = $ConsFrac AND ".
                   "ONumeTrim = '$TrimTrab' AND ".
				   "OConsecutivo >= $CampBusq ".
			"ORDER BY ONumeRegi ". 
			"LIMIT 0, 9 ";
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetchAll();

?>