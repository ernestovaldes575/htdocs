<?php
include($RutaIntr.'Encabezado/EncaCook.php');
include($RutaIntr.'Conexion/ConBasBroker.php');

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//------------------------------------------------------------------------	
//Carga el registro para Consulta
$InstSql = "SELECT CConsecutivo,CNumeFoli, CNombRazon,CRFC, CPorcBrok ". 
		   "FROM   stcliente ". 
		   "WHERE  CBroker = $ConsBrok AND ". 
		   		  "CEstado = 'A' ";
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>	
