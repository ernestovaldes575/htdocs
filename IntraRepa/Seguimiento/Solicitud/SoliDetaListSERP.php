<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Conexion/ConBasInvita.php');

//********************************************************************
//Carga las variables
$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0];
$MesTrab  = $ABusqMae[1];
$ConsSoli = $ABusqMae[2];

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandInst = false;
if ( isset($_GET["Param0"]) )
	$BandInst = true;

//------------------------------------------------------------------------
$InstSql =  "SELECT DNumero, DDescri, DCatindad, DImporte ".
			"FROM  sdsolideta ".
			"WHERE DConseSoli = $ConsSoli AND ".
				   "DEstado = 'A' ";
if ($BandInst)  echo "5)<br>$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>	
