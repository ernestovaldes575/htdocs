<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraAten/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraAten/Conexion/ConBasAtencion.php');

//********************************************************************
//Carga las variables
if ( isset($_COOKIE['CBusqMae']) )
{ $ArCook01 = $_COOKIE['CBusqMae'];
  $ABusqMae = explode("|", $ArCook01);
  //echo '$ABusqMae'.$ABusqMae.'<br>';
  $ConsBrok = $ABusqMae[0];
  $DescBrok = $ABusqMae[1];
} 

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Ejercicio
if ( isset($_GET["Param1"]) ){
	$InstSql = "SELECT BConsecutivo AS Clave, BBroker AS Descri ". 
		   "FROM stbroker ". 
		   "WHERE BConsecutivo > 1000 ". 
		   "ORDER BY BConsecutivo ";
	if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
	$EjInSql = $ConeBase->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch(); 

	$ConsBrok=0; $DescBrok = "";
	if ($ResuSql)
 	 { $ConsBrok = $ResuSql['Clave'];	
		$DescBrok = $ResuSql['Descri'];}

	$ArCook01 =  "$ConsBrok|$DescBrok|";
	setcookie("CBusqMae", "$ArCook01");
}

//Estado de la revision
if ( isset($_GET["Param2"]) ){
	$AParam2 = explode("|", $_GET["Param2"]);
	$ConsBrok = $AParam2[0];
	$DescBrok = $AParam2[1];
	$ArCook02 =  "$ConsBrok|$DescBrok|";
	setcookie("CBusqMae", "$ArCook02");
}

//------------------------------------------------------------------------
//Catalogo de Ejercicio
$InstSql = "SELECT BConsecutivo AS Clave, BBroker AS Descri ". 
		   "FROM stbroker ". 
		   "WHERE BConsecutivo > 0 ";
if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$CataEjer = $EjInSql->fetchAll(); 
			
//------------------------------------------------------------------------	
//Carga el registro para Consulta
$InstSql = "SELECT CConsecutivo, CNombRazon, CRFC, CMunicipio ". 
		   "FROM   stcliente  ".
		   "WHERE  CBroker = $ConsBrok ".
		   "ORDER BY CConsecutivo ";
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>	
