<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranspa.php');

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Estado de la revision
if ( isset($_GET["PaAMB01"]) ){
	$EjerTrab = $_GET["PaAMB01"];
	$ArCooki1 = "$EjerTrab|";
	setcookie("CBusqMae", "$ArCooki1");
}
//acejercicio
//ttfracarea

//Carga el registro para Consulta
$InstSql = "SELECT FAConsecutivo, FAFraccion, FAInciso, FASubinciso, FNormatividad, ".
					"FATrimes01, FATrimes02, FATrimes03, FATrimes04, ".
					"FAPeriRepo ".
			"FROM   ttfracarea ".
			"INNER JOIN ttfraccion ON  	FFraccion = FAFraccion AND ".
										"FInciso = FAInciso AND ".
										"FSubinciso = FASubinciso ".
			"WHERE  FAAyuntamiento = '$ClavAyun' AND ".
					"FAEjercicio = $EjerTrab AND ".
					"FAUnidad = $ConsUnid ".
			"ORDER BY FAFraccion, FAInciso, FASubinciso ";
			
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();