<?php
	include($RutaEnca.'Encabezado/EncaCook.php');
	include($RutaEnca.'Conexion/ConBasEntrega.php');

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para Consulta
$InstSql = "SELECT  FNumero AS Clave, FFormato AS Descri ".
		   "FROM etformato ". 
		   "ORDER BY FNumero ";
			
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();

?>