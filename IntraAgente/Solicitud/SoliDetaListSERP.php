<?php
include( $RutaIntr.'Encabezado/EncaCook.php');
include( $RutaIntr.'Conexion/ConBasCliente.php');

//********************************************************************
//Carga las variables
$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0];
$MesTrab  = $ABusqMae[1];
$EstaTrab = $ABusqMae[2];
$ConsSoli = $ABusqMae[3];
$EstaSoli = $ABusqMae[4];

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandInst = false;
if ( isset($_GET["Param0"]) )
	$BandInst = true;

//------------------------------------------------------------------------
$InstSql =  "SELECT DNumero, DDescri, DCatindad, DImporte ".
			"FROM   sdsolideta ".
			"WHERE  DConseSoli = $ConsSoli AND ".
				   "DEstado = 'A' ";
if ($BandInst)  echo "5)<br>$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>	
