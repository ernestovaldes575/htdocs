<?php
include( $RutaIntr.'Encabezado/EncaCook.php');
include( $RutaIntr.'Conexion/ConBasCliente.php');

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

$BandMens = true;

//------------------------------------------------------------------------	
//Carga el registro para Consulta
$InstSql = "SELECT CREConsecut,CREEstado,CREClave,CREDescri ". 
		   "FROM   screpartidor ".
		   "ORDER BY CREEstado,CREClave ";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();

?>	
