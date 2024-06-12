<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Conexion/ConBasInvita.php');


//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

$RutaArch = "/ExpeElectroni/Segui/Documen/";
	
//------------------------------------------------------------------------	
//Carga el registro para Consulta
$InstSql = "SELECT CDRClave,CDRDescri,DArchivo ".
		   "FROM   scdocurepa ".
		   "LEFT JOIN  sddocurepa ON DClavDocu = CDRClave AND ".
									"DConsRepa = $ConsRepa ";	
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>	
