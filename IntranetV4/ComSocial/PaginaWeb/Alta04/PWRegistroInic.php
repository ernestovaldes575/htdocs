<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasComSoc.php');
date_default_timezone_set('America/Mexico_City');

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
  $BandMens = true;

//Fecha del sistema
$FechSist = getdate();
$EjerTrab = $FechSist['year'];
$MesTrab  = $FechSist['mon'];
$DiaTrab  = $FechSist['mday'];
$HoraTrab = $FechSist['hours'] .":". $FechSist['minutes'] .":". $FechSist['seconds'];
echo "Día:  " .$DiaTrab. "<br>";
echo "Mes:  " .$MesTrab. "<br>";
echo "Año:  " .$EjerTrab. "<br>";
echo "Hora: " .$HoraTrab ;

$TipoDocu  = "01";	
if ( isset($_GET["Param1"]) ){
	$TipoDocu = $_GET["Param1"];

	$EstaRevi = "01";
	$ArCooki  = $TipoDocu .'|'. $EjerTrab .'|'. $MesTrab .'|'. $EstaRevi;
	setcookie("CBusqMae", "$ArCooki");
	}

//header( "Location: PWRegistroList.php" );
header( "Location: PWRegistroList01.php" );
exit;
?>	