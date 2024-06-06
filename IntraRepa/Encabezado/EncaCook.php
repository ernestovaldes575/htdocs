<?php
//Carga las variables
$ArCooki1 = $_COOKIE['CEncaAcc'];
$AEncaAcc = explode("|", $ArCooki1);

$ConsRepa = $AEncaAcc[0];
$NumeRepa = $AEncaAcc[1];
$NombRepa = $AEncaAcc[2];
$EjerTrab = $AEncaAcc[3];
$MesTrab  = $AEncaAcc[4];

$ArCooki2 = $_COOKIE['CModulo'];
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