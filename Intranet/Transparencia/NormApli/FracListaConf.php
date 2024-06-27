<?php

$ArCook01 = $_COOKIE['CEncaMae'];
$AEncaMae = explode("|", $ArCook01);
$EjerTrab = $AEncaMae[0]; 
$ClavArti = $AEncaMae[1]; 
	
//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Estado de la revision
if ( isset($_GET["ParCon01"]) ){
	$NumeInci = $_GET["ParCon01"];
	$SubIncis = $_GET["ParCon02"];
	$DescNorm = $_GET["ParCon03"];
	$PeriFrac = $_GET["ParCon04"];
	
	$ArCook02 = "$EjerTrab|$ClavArti|".
				"$NumeInci|$SubIncis|$DescNorm|$PeriFrac|";
	setcookie("CEncaMae", "$ArCook02");
	
	header("location: FracAreaList.php");
}

?>