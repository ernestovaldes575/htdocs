<?php
include($RutaIntr.'Encabezado/EncaCook.php');
include($RutaIntr.'Conexion/ConBasAgente.php');

//********************************************************************
//Carga las variables
$ConsBrok = 1000;
$DescBrok = "Broker";
if ( isset($_COOKIE['CBusqMae']) )
 { $ArCook01 = $_COOKIE['CBusqMae'];
   $ABusqMae = explode("|", $ArCook01);
   //echo '$ABusqMae'.$ABusqMae.'<br>';
   $ConsBrok = $ABusqMae[0];
   $DescBrok = $ABusqMae[1];
 } 
 else  
 { $ArCook02 =  "$ConsBrok|$DescBrok|";
   setcookie("CBusqMae", "$ArCook02");  }

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Ejercicio
if ( isset($_GET["Param1"]) ){
	$DatoBrok = $_GET["Param1"];
    $ADatoBro = explode("|", $DatoBrok);
	$ConsBrok = $ADatoBro[0];
	$DescBrok = $ADatoBro[1]; 
	
	$ArCook02 =  "$ConsBrok|$DescBrok|";
	setcookie("CBusqMae", "$ArCook02");
}

//------------------------------------------------------------------------
//Catalogo de Ejercicio
$InstSql = "SELECT BConsecutivo AS Clave, BBroker AS Descri ". 
		   "FROM stbroker ".
		   "WHERE BConsecutivo > 999 ";
if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$CataBrok = $EjInSql->fetchAll(); 

//------------------------------------------------------------------------	
//Carga el registro para Consulta
$InstSql = "SELECT CConsecutivo,CNumeFoli, CNombRazon,CRFC ". 
		   "FROM   stcliente ". 
		   "WHERE  CBroker = $ConsBrok AND ". 
		   		  "CEstado = 'A' ";
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>	
