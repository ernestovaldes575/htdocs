<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranspa.php');

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

$ArCook01 = $_COOKIE['CEncaMae'];
$AEncaMae = explode("|", $ArCook01);
$EjerTrab = $AEncaMae[0]; 
$ClavArti = $AEncaMae[1]; 

//Estado de la revision
if ( isset($_GET["ParCon01"]) ){
	$ClavArti = $_GET["ParCon01"];
	$ArCooki1 = "$EjerTrab|$ClavArti|";
	setcookie("CEncaMae", "$ArCooki1");
}

//Carga el registro para Consulta
$InstSql = "SELECT FInciso,FSubinciso,FNormatividad,FPeriodo ".
		   "FROM   ttfraccion ".
		   "WHERE  FFraccion = $ClavArti ";
			
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();

?>