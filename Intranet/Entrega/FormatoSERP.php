<?php
	include($RutaEnca.'Encabezado/EncaCook.php');
	include($RutaEnca.'Conexion/ConBasEntrega.php');

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;


//Carga el registro para Consulta
$InstSql = "SELECT FAConsecutivo, FAFormato,FFormato ".
		   "FROM    etformarea ".
		   "INNER JOIN ETFormato ON FNumero = FAFormato ". 
		   "WHERE FAAyuntamiento = '$ClavAyun' AND ". 
		   		 "FAUnidad = $ConsUnid AND ". 
				 "FAEstado = 'A' ".
			"ORDER BY FAFormato ";
			
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();