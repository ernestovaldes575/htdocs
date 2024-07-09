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
$InstSql = "SELECT MConsecutivo, MAyuntam, ".
				  "MEjercicio, MFechInicio, MFechTerm, ".
				  "MFechValid ".
			"FROM  tt9205bmatriz  ".
			"WHERE MAyuntam = '$ClavAyun' AND ".
				  "MEjercicio = $EjerTrab AND  ".
				  "MConsFrac = $ConsFrac AND ".
				  "MNumeTrim = '$TrimTrab' ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>