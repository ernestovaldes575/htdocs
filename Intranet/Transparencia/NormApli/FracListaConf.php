<?php

$ArCook01 = $_COOKIE['CEncaMae'];
$AEncaMae = explode("|", $ArCook01);
$ClavArti = $AEncaMae[0]; 
	
//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Estado de la revision
if ( isset($_GET["ParCon01"]) ){
	$NumeInci = $_GET["ParCon01"];
	$SubIncis = $_GET["ParCon01"];
	$DescNorm = $_GET["ParCon01"];
	
	$ArCook02 = "$ClavArti|$NumeInci|$SubIncis|$DescNorm|";
	setcookie("CEncaMae", "$ArCook02");
	
	
}

?>