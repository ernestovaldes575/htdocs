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
$InstSql = 	"SELECT TConsecutivo, TAyuntam, TEjercicio, TFechInicio, ". 
				   "TFechTerm, TTotPlazBas, TTotPBOcup, TTotPBVacan, TTotPlazConf, ".
				   "TTotPCOcup, TTotPCVacan, TAreaResp, TFechAct, ".
				   "TFechValid, TNota, TConsFrac, TNumeTrim, ".
				   "TNumeRegi ".
			"FROM tt9210btotalplazvac ".
			"WHERE TAyuntam = '$ClavAyun' AND ".
				  "TEjercicio = $EjerTrab AND ".
				  "TConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = "";   $VC04 = "105"; $VC05 = "2024";	$VC06 = "";   $VC07 = ""; 	 $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   $VC13 = "";  	 $VC14 = "";
$VC15 = "";   $VC16 = "";  	 $VC17 = "";		$VC18 = "";   $VC19 = "";  	 $VC20 = "";  

if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['EConsecutivo'];	
   $VC04 = $ResuSql['EAyuntam'];	
   $VC05 = $ResuSql['EEjercicio'];
   $VC06 = $ResuSql['EFechInicio'];
   $VC07 = $ResuSql['EFechTerm'];
   $VC08 = $ResuSql['TTotPlazBas'];
   $VC09 = $ResuSql['TTotPBOcup'];
   $VC10 = $ResuSql['TTotPBVacan'];	
   $VC11 = $ResuSql['TTotPlazConf'];	
   $VC12 = $ResuSql['TTotPCOcup'];	
   $VC13 = $ResuSql['TTotPCVacan'];	
   $VC14 = $ResuSql['TAreaResp'];
   $VC15 = $ResuSql['TFechAct'];
   $VC16 = $ResuSql['TFechValid'];
   $VC17 = $ResuSql['TNota'];
   $VC18 = $ResuSql['TConsFrac'];
   $VC19 = $ResuSql['TNumeTrim'];	
   $VC20 = $ResuSql['TNumeRegi'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(TNumeRegi) IS  NULL THEN 1 ELSE  MAX(TNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9210btotalplazvac ".
			   "WHERE TAyuntam = '$ClavAyun' AND ".
				  "TEjercicio = $EjerTrab AND ".
				  "TConsFrac = $ConsFrac AND ".
				  "TNumeTrim = '$TrimTrab' ";
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