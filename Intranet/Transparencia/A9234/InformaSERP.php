<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$TrimTrab = $ABusqMae[1];	//Trimestre de trabajo 
$ConsFrac = $ABusqMae[2];	//Consecutivo de la Fraccion del Unidad
$FracTrab = $ABusqMae[3];	//Fraccion de trabajo 92,93
$NumeInci = $ABusqMae[4];	//Numero Inciso
$NumeSubi = $ABusqMae[5];	//Numero de Subinciso
$Nomativi = $ABusqMae[6];	//Normatividad

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
$InstSql = 	"SELECT ENumeRegi, EFechInicio, EFechTerm, ETemaEstad, ". 
				           "EPeriodAct, EDenom, EHiperVariable, EHiperDocTecn, ".
				           "ETiposArch, EHipervBaseD, EHiperBancos, EAreaResp, ".
				           "ENota ".
			      "FROM tt9234estadisticas ".
			      "WHERE EAyuntam = '$ClavAyun' AND ".
				          "EEjercicio = $EjerTrab AND ".
				          "EConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;	  $VC06 = "";    $VC07 = ""; 	  $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   
$VC13 = "";  	$VC14 = "";    $VC15 = "";    $VC16 = "";
$VC17 = "";		  

if ($ResuSql)
 { //Carga los campos
   $VC05 = $ResuSql['ENumeRegi'];
   $VC06 = $ResuSql['EFechInicio'];
   $VC07 = $ResuSql['EFechTerm'];
   $VC08 = $ResuSql['ETemaEstad'];
   $VC09 = $ResuSql['EPeriodAct'];
   $VC10 = $ResuSql['EDenom'];	
   $VC11 = $ResuSql['EHiperVariable'];	
   $VC12 = $ResuSql['EHiperDocTecn'];	
   $VC13 = $ResuSql['ETiposArch'];	
   $VC14 = $ResuSql['EHipervBaseD'];
   $VC15 = $ResuSql['EHiperBancos'];
   $VC16 = $ResuSql['EAreaResp'];
   $VC17 = $ResuSql['ENota'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ENumeRegi) IS  NULL THEN 1 ELSE  MAX(ENumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9234estadisticas ".
			   "WHERE EAyuntam = '$ClavAyun' AND ".
				  "EEjercicio = $EjerTrab AND ".
				  "EConsFrac = $ConsFrac AND ".
				  "ENumeTrim = '$TrimTrab' ";
  if ($BandMens) echo '1)'.$InstSql.'<br>'; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResuSql = $EjInSql->fetch();
  if ($ResuSql)
    $VC03 = $ResuSql['Clave'];
  }

$RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen/$FracTrab/$TrimTrab/";
	
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