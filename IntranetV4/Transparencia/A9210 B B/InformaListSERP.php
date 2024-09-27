<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

//********************************************************************
//Informacion de la Lista
$TrimTrab = $ABusqMae[1];	//Trimestre de trabajo 
$ConsFrac = $ABusqMae[2];	//Consecutivo de la Fraccion del Unidad
$NumeFrac = $ABusqMae[3];	//Fraccion de trabajo 92,93
$NumeInci = $ABusqMae[4];	//Numero Inciso
$NumeSubi = $ABusqMae[5];	//Numero de Subinciso
$Nomativi = $ABusqMae[6];	//Normatividad

$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para Consulta
<<<<<<< HEAD:Intranet/Transparencia/A9252C/InformaListSERP.php
$InstSql = "SELECT AConsecutivo, ANumeRegi, ".
				  "AFechaInicio, AFechaTermino, ADenominacion, ".
				  "AHipervinculo ".
			"FROM  a9252c ".
			"WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND  ".
				  "AConsFrac = $ConsFrac AND ".
				  "ANumeTrim = '$TrimTrab' ";
=======
$InstSql = "SELECT TConsecutivo, TAyuntam, TEjercicio, TFechInicio, ".
				  "TFechTerm, TTotPlazBas, TTotPlazConf ".
			"FROM tt9210btotalplazvac ".
			"WHERE TAyuntam = '$ClavAyun' AND ".
				  "TEjercicio = $EjerTrab AND  ".
				  "TConsFrac = $ConsFrac AND ".
				  "TNumeTrim = '$TrimTrab' ";
>>>>>>> e5b162c508b56d18625f5506774a619ea33cb671:Intranet/Transparencia/A9210 B B/InformaListSERP.php
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>