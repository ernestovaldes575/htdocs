<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Conexion/ConBasInvita.php');

//Carga las variables
$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0];
$MesTrab  = $ABusqMae[1];

//Bandera de visualizar msg
$BandInst = false;
if ( isset($_GET["Param0"]) )
  $BandInst = true;

if ( isset($_GET["Param1"]) )
  $ConsSoli = $_GET["Param1"];

$ArCook02  = "$EjerTrab|$MesTrab|$ConsSoli|";
setcookie("CBusqMae", "$ArCook02");

//------------------------------------------------------------------------
$InstSql =  "SELECT SConsInvi, SEjercicio, SMes, ".
				   "SNumeFoli, SRepartidor, SFormaPago, SMetoPago, ".
				   "SUso, SFechAlta, SImporte, SSeguimi, SEstado ".
			"FROM   stsolicitud ".
			"WHERE  SConsecutivo = $ConsSoli ";
if ($BandInst)  echo "5)<br>$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

//Valores de la tabla
$VC04 = 0;  $VC05 = $EjerSist;  $VC06 = $MesSist;  
$VC07 = "1"; $VC08 = $ConsRepa;
$VC09 = 1; $VC10 = 1; $VC11 = 1; 
$VC12 = $FechSist; $VC13 = 0; $VC14 = "01"; 
			
if ($ResuSql)
 { $VC04 = $ResuSql['SConsInvi'];	
   $VC05 = $ResuSql['SEjercicio'];	
   $VC06 = $ResuSql['SMes'];	
  
   $VC07 = $ResuSql['SNumeFoli'];	
   $VC08 = $ResuSql['SRepartidor'];	
  
   $VC09 = $ResuSql['SFormaPago'];	
   $VC10 = $ResuSql['SMetoPago'];	
   $VC11 = $ResuSql['SUso'];	
  
   $VC12 = $ResuSql['SFechAlta'];	
   $VC13 = $ResuSql['SImporte'];	
   $VC14 = $ResuSql['SSeguimi'];	
}

//header( "Location: PWRegistroList.php" );
if (!$BandInst) 
 header( "Location: SoliDetaList.php" );
exit;
?>	