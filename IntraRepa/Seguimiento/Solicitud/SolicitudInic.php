<?php
date_default_timezone_set('America/Mexico_City');

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
  $BandMens = true;

//Fecha del sistema
$FechSist = getdate();
$EjerTrab = $FechSist['year'];
$MesTrab  = $FechSist['mon'];
$MesTrab  = ($MesTrab  < 10) ? '0'.$MesTrab : $MesTrab;
$DiaTrab  = $FechSist['mday'];
$DiaTrab  = ($DiaTrab  < 10) ? '0'.$DiaTrab : $DiaTrab;
$HoraTrab = $FechSist['hours'] .":". $FechSist['minutes'] .":". $FechSist['seconds'];
echo "Día: $DiaTrab  <br>";
echo "Mes: $MesTrab  <br>";
echo "Año: $EjerTrab <br>";
echo "Hora:$HoraTrab <br>";

$ArCook02  = "$EjerTrab|$MesTrab|00|0|";
setcookie("CBusqMae", "$ArCook02");

//header( "Location: PWRegistroList.php" );
if (!$BandMens) 
 header( "Location: SolicitudList.php" );
exit;
?>	