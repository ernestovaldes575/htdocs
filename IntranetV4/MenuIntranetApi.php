<?php

include_once 'Archivos/Conexiones/conexion.php';

//Carga las variables
$ArCooki2 = $_COOKIE['CEncaAcc'];
$AEncaMae = explode("|", $ArCooki2);
$ConsUsua = $AEncaMae[0]; 
$ClavAyun = $AEncaMae[1];
$DescAyun = $AEncaMae[2];
$ConsUnid = $AEncaMae[3];
$DescUnid = $AEncaMae[4];
$EjerTrab = $AEncaMae[5];

//Carga las variables
$InstSql = "SELECT ANivel, AMenu, ASubmenu ". 
		   "FROM   adacceso ". 
		   "WHERE  AAyuntamiento = '$ClavAyun' AND ". 
				  "AConsecut= $ConsUsua";
if ($BandMens)  echo "1) $InstSql <br>"; 
$EjInSql = $conexion->prepare($InstSql);
$EjInSql->execute();
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetch();
if ($ResuSql)
{ //Carga los campos
  $Nivel  = $ResuSql['ANivel']; 
  $OpcMen = $ResuSql['AMenu']; 
  $OpcSub = $ResuSql['ASubmenu'];
}  

echo "Nivel=$Nivel<br>";
echo "OpcMen=$OpcMen<br>";
echo "OpcSub=$OpcSub<br>";
$BandMens = true;

if ( isset($_GET["Param1"]) ){
  $Nivel = $_GET["Param1"];
  $OpcMen = $_GET["Param2"];
 }

if ( isset($_GET["Param3"]) ){
  $Nivel = $_GET["Param3"];
  $OpcSub = $_GET["Param4"];
}

$InstSql = "UPDATE adacceso ". 
		   "SET    ANivel = '$Nivel' , AMenu= '$OpcMen', ASubmenu='$OpcSub' ". 
		   "WHERE  AAyuntamiento = '$ClavAyun' AND ". 
				  "AConsecut= $ConsUsua";
				  if ($BandMens)  echo "1) $InstSql <br>"; 
$EjInSql = $conexion->prepare($InstSql);
$EjInSql->execute();
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetch();

header("Location:MenuIntranet.php");
?>