<?php

//********************************************************************
//Carga las variables

$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0];
$MesTrab  = $ABusqMae[1];

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
  $BandMens = true;

$ConsAnfi  = "01";	
if ( isset($_GET["Param1"]) ){
  $ConsBrok = $_GET["Param1"];  //Consecutivo del Broker
  $EstaSegu = $_GET["Param2"];  //Estado de Seguimiento del Broker

  $ArCook02  = "$EjerTrab|$MesTrab|$ConsBrok|$EstaSegu|";
	setcookie("CBusqMae", "$ArCook02");
}

//header( "Location: PWRegistroList.php" );
if (!$BandMens) 
 header( "Location: SolicitudList.php" );
exit;
?>	