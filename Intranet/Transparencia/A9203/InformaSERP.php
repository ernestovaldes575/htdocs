<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$ConsFrac = $ABusqMae[1];
$TrimTrab = $ABusqMae[2];
$NumeFrac = $ABusqMae[3];
$NumeInci = $ABusqMae[4];
$NumeSubi = $ABusqMae[5];
$Nomativi = $ABusqMae[6];

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;


if( isset($_GET['PaAMB01']) != ''){	
	$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
	$CampBusq = $_GET["PaAMB02"];	#Campo de busqueda
 }	

$CRUD = "GET";
//Carga el registro para Consulta
$InstSql = 	"SELECT ANumeRegi, AFechaInicio, AFechaTermino, AArea, ".
				   "ADenominacion, AFunadamento, AHipervinculo, ".
				   "AAreaRespon, ANota ".
			"FROM  tt9203facare ".
			"WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = 0;  $VC04 = ""; $VC05 = "";
$VC06 = 0;  $VC07 = ""; $VC08 = "";
$VC09 = 0;  $VC10 = ""; $VC11 = "";
if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['ANumeRegi'];	
   $VC04 = $ResuSql['AFechaInicio'];	
   $VC05 = $ResuSql['AFechaTermino'];
   $VC06 = $ResuSql['AArea'];
   $VC07 = $ResuSql['ADenominacion'];
   $VC08 = $ResuSql['AFunadamento'];
   $VC09 = $ResuSql['AHipervinculo'];
   $VC10 = $ResuSql['AAreaRespon'];	
   $VC11 = $ResuSql['ANota'];		
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ANumeRegi) IS  NULL THEN 1 ELSE  MAX(ANumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9203facare ".
			   "WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsFrac = $ConsFrac AND ".
				  "ANumeTrim = '$TrimTrab' ";
  if ($BandMens) echo '1)'.$InstSql.'<br>'; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResuSql = $EjInSql->fetch();
  if ($ResuSql)
    $VC03 = $ResuSql['Clave'];
  }

$MesnTiMo = "";
switch( $TipoMovi ){
  case "A":	$MesnTiMo = "Registrar";  
			$CRUD = "POST";       break;
  case "M":	$MesnTiMo = "Actualizar"; 
			$CRUD = "PUT";		  break;
  case "B":	$MesnTiMo = "Eliminar";
			$CRUD = "DELETE";	  break;
 }		
?>