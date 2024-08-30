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
$InstSql = 	"SELECT MPNumeRegi, MPPeriodoInf, MPPeriodoInfOtro, MPDenom, ". 
				           "MPFundamJuri, MPObjetivo, MPAlcances, ".
				           "MPHipervConv, MPTemasRev, MPRequisito, MPPropuesta, ".
				           "MPMedioRecep, MPFechInicio, MPFechTerm, MPAreaContact, ".
				           "MPAreaResp, MPNota ".
			      "FROM tt9241amecapartsocial ".
			      "WHERE MPAyuntamiento = '$ClavAyun' AND ".
				           "MPEjercicio = $EjerTrab AND ".
				           "MPConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;	  $VC06 = "";    $VC07 = ""; 	  $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   
$VC13 = "";  	$VC14 = "";    $VC15 = "";    $VC16 = "";  	 
$VC17 = "";		$VC18 = "";    $VC19 = "";  	$VC20 = "";
$VC21 = "";
 
if ($ResuSql)
 { //Carga los campos
   $VC05 = $ResuSql['MPNumeRegi'];
   $VC06 = $ResuSql['MPPeriodoInf'];
   $VC07 = $ResuSql['MPPeriodoInfOtro'];
   $VC08 = $ResuSql['MPDenom'];
   $VC09 = $ResuSql['MPFundamJuri'];
   $VC10 = $ResuSql['MPObjetivo'];	
   $VC11 = $ResuSql['MPAlcances'];	
   $VC12 = $ResuSql['MPHipervConv'];	
   $VC13 = $ResuSql['MPTemasRev'];	
   $VC14 = $ResuSql['MPRequisito'];
   $VC15 = $ResuSql['MPPropuesta'];
   $VC16 = $ResuSql['MPMedioRecep'];
   $VC17 = $ResuSql['MPFechInicio'];
   $VC18 = $ResuSql['MPFechTerm'];
   $VC19 = $ResuSql['MPAreaContact'];	
   $VC20 = $ResuSql['MPAreaResp'];
   $VC21 = $ResuSql['MPNota'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(MPNumeRegi) IS  NULL THEN 1 ELSE  MAX(MPNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9241amecapartsocial ".
			   "WHERE MPAyuntamiento = '$ClavAyun' AND ".
				  "MPEjercicio = $EjerTrab AND ".
				  "MPConsFrac = $ConsFrac AND ".
				  "MPNumeTrim = '$TrimTrab' ";
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