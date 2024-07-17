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
$InstSql = 	"SELECT PFNumeRegi, PFFechInicio, PFFechTerm, PFTematica, ". 
				           "PFPlanteam, PFRespue, PFHipervInf , PFNumPreg, ".
				           "PFAreaResp, PFNota ".
			      "FROM tt9252bpregfrec ".
			      "WHERE PFAyuntam = '$ClavAyun' AND ".
				          "PFEjercicio = $EjerTrab AND ".
				          "PFConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;	  $VC06 = "";    $VC07 = ""; 	  $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   
$VC13 = "";  	$VC14 = "";    

if ($ResuSql)
 { //Carga los campos
   $VC05 = $ResuSql['PFNumeRegi'];
   $VC06 = $ResuSql['PFFechInicio'];
   $VC07 = $ResuSql['PFFechTerm'];
   $VC08 = $ResuSql['PFTematica'];
   $VC09 = $ResuSql['PFPlanteam'];
   $VC10 = $ResuSql['PFRespue'];	
   $VC11 = $ResuSql['PFHipervInf'];	
   $VC12 = $ResuSql['PFNumPreg'];	
   $VC13 = $ResuSql['PFAreaResp'];	
   $VC14 = $ResuSql['PFNota'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(PFNumeRegi) IS  NULL THEN 1 ELSE  MAX(PFNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9252bpregfrec ".
			   "WHERE PFAyuntam = '$ClavAyun' AND ".
				  "PFEjercicio = $EjerTrab AND ".
				  "PFConsFrac = $ConsFrac AND ".
				  "PFNumeTrim = '$TrimTrab' ";
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