<?php

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Estado de la revision
if ( isset($_GET["ParCon01"]) ){
	$ClavForm = $_GET["ParCon01"];
	$DescForm = $_GET["ParCon02"];
	
	$ArCook02 = "$ClavForm|$DescForm|";
	setcookie("CEncaMae", "$ArCook02");
	
	header("location: FormAreaList.php");
}

?>