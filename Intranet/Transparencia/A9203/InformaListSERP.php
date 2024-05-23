<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

//********************************************************************
//Informacion de la Lista
$ConsFrac = $ABusqMae[1];
$TrimTrab = $ABusqMae[2];
$NumeFrac = $ABusqMae[3];
$NumeInci = $ABusqMae[4];
$NumeSubi = $ABusqMae[5];
$Nomativi = $ABusqMae[6];

$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para Consulta
$InstSql = 	"SELECT AConsecutivo,AFechaInicio,AFechaTermino,ADenominacion ".
			"FROM   tt9203facare ".
			"WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND  ".
				  "AConsFrac = $ConsFrac AND ".
				  "ANumeTrim = '$TrimTrab' ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>