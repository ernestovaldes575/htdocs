<?php
//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
  $BandMens = true;

$ConsAnfi  = "01";	
if ( isset($_GET["Param1"]) ){
	$ConsAnfi = $_GET["Param1"];


	$ArCook02  = "$ConsAnfi|";
	setcookie("CBusqMae", "$ArCook02");
}

//header( "Location: PWRegistroList.php" );
if (!$BandMens) 
 header( "Location: Invitado.php?PaAMB01=A&PaAMB02=0" );
exit;
?>	