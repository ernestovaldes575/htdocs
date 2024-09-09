<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasIntra.php');

//Carga las variables
$ArCooki1 = $_COOKIE['CMenu'];
$AMenu = explode("|", $ArCooki1);
$ClavMenu = $AMenu[0];  
$DescMenu = $AMenu[1];  
$BaseDato = $AMenu[2]; 
$TablBaDa = $AMenu[3]; 

$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

if ( isset($_GET["Param1"]) ){
	$ClavMenu = $_GET['Param1'];
	$DescMenu = $_GET['Param2'];
	$BaseDato = $_GET['Param3'];
	$TablBaDa = '';
	$ArCooki2 = $ClavMenu.'|'.$DescMenu.'|'.$BaseDato.'|'.$TablBaDa.'||||';
	setcookie("CMenu", "$ArCooki2");
}

if ( isset($_GET["Param4"]) ){
	$TablBaDa = $_GET['Param4'];
	$ArCooki3 = $ClavMenu.'|'.$DescMenu.'|'.$BaseDato.'|'.$TablBaDa.'||||';
	setcookie("CMenu", "$ArCooki3");
	//header("location: CargaCampos.php");
}

//Carga el registro para Consulta
$InstSql = "SHOW TABLES FROM $BaseDato";
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>