<?php
	//Carga las variables
	$ArCooki1 = $_COOKIE['CEncaAcc'];
	$AEncaAcc = explode("|", $ArCooki1);

	$ConsInvi = $AEncaAcc[0]; 
	$NombInvi = $AEncaAcc[1];
	$EjerTrab = $AEncaAcc[2];
	$MesTrab  = $AEncaAcc[3];

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

?>