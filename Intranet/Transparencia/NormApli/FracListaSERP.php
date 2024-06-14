<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranspa.php');

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Estado de la revision
if ( isset($_GET["ParCon01"]) ){
	$ClavArti = $_GET["ParCon01"];
	$ArCooki1 = "$ClavArti|";
	setcookie("CEncaMae", "$ArCooki1");
}

//Carga el registro para Consulta
$InstSql = "SELECT FInciso,FSubinciso,FNormatividad ".
		   "FROM   ttfraccion ".
		   "WHERE  FFraccion = $ClavArti ";
			
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();

?>