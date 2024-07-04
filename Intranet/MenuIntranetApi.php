<?php
	//Carga las variables
	$ArCooki1 = $_COOKIE['CMenu'];
	$AMenu = explode("|", $ArCooki1);
	$Nivel  = $AMenu[0]; 
	$OpcMen = $AMenu[1]; 
	$OpcSub = $AMenu[2];
	echo "Nivel=$Nivel<br>";
	echo "OpcMen=$OpcMen<br>";
	echo "OpcSub=$OpcSub<br>";
	$BandMens = true;
	if(isset($_GET["Param1"]) ){
		$Nivel = $_GET["Param1"];
		$OpcMen = $_GET["Param2"];
		
		$ArCooki3 = "$Nivel|$OpcMen|0|";
		setcookie("CMenu", "$ArCooki3");
		header("Location:MenuIntranet.php");
	}

	if(isset($_GET["Param3"]) ){
		$Nivel = $_GET["Param3"];
		$OpcSub = $_GET["Param4"];
		$ArCooki4 = "$Nivel|$OpcMen|$OpcSub|";
		setcookie("CMenu", "$ArCooki4");
	}
	header("Location:MenuIntranet.php");
?>