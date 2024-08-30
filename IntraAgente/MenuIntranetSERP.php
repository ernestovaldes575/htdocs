<?php
$ClavAyun = '105';

//Carga las variables
$ArCooki1 = $_COOKIE['CMenu'];
$AMenu = explode("|", $ArCooki1);
$Nivel  = $AMenu[0]; 
$OpcMen = $AMenu[1]; 
$OpcSub = $AMenu[2]; 
$BandMens = false;

if ( isset($_GET["Param1"]) ){
	$Nivel = $_GET["Param1"];
	$OpcMen = $_GET["Param2"];
	$ArCooki3 = $Nivel.'|'.$OpcMen.'||';
	setcookie("CMenu", "$ArCooki3");
 }

if ( isset($_GET["Param3"]) ){
	$Nivel = $_GET["Param3"];
	$OpcSub = $_GET["Param4"];
	$ArCooki4 = $Nivel.'|'.$OpcMen.'|'.$OpcSub.'|';
	setcookie("CMenu", "$ArCooki4");
 }

$InstSql = "SELECT CMEClave,CMEDescri,CMEBasDat ".
		   "FROM acceso.atpermen ".
		   "INNER JOIN acceso.acmenu ON CMEClave=PMenu ".
		   "WHERE PAyuntamiento='$ClavAyun' and PConsServ='$ConsBrok' ";
if ($BandMens)  echo "1)<br>$InstSql<br><br>";
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();
$MenuBase = $ResuSql->fetchAll();

?>	
