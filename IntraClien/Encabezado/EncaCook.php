<?php
//Carga las variables
$ArCooki1 = $_COOKIE['CEncaAcc'];
$AEncaAcc = explode("|", $ArCooki1);

$ConsClie = $AEncaAcc[0];
$NombClie = $AEncaAcc[1];
$ConsBrok = $AEncaAcc[2];
$NombBrok = $AEncaAcc[3];

$EjerTrab = $AEncaAcc[4];
$MesTrab  = $AEncaAcc[5];


if (isset($_COOKIE['CModulo'] ) )$ArCooki2 = $_COOKIE['CModulo'];
$AModulo = explode("|", $ArCooki2);
$ClavTiSe = $AModulo[0];
$DescTiSe = $AModulo[1];
$ClavOpSe = $AModulo[2];
$DescOpSe = $AModulo[3];
$Cons = $AModulo[4];
$Alta = $AModulo[5];
$Modi = $AModulo[6];
$Baja = $AModulo[7];

$FechSist = getdate();
$EjerSist = $FechSist['year'];
$MesSist  = $FechSist['mon'];
$MesSist  = ($MesSist  < 10) ? '0'.$MesSist : $MesSist;
$DiaSist  = $FechSist['mday'];
$DiaSist  = ($DiaSist  < 10) ? '0'.$DiaSist : $DiaSist;

$FechSist = "$EjerSist-$MesSist-$DiaSist"
?>