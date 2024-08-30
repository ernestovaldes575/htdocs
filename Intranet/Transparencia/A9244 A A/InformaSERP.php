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
$InstSql = 	"SELECT EENumeRegi,  EEPeriodInf, ".
                   "EEPerioInfOtro, EEDenomProg, EEDenomEval, EEHipervRes, EEAreaResp, ".
                   "EENota ".
            "FROM  tt9244aevaluaencu  ".
            "WHERE  EEAyuntam = '$ClavAyun' AND ".
                   "EEEjercicio = $EjerTrab AND ".
                   "EEConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;
$VC06 = "";   $VC07 = "";    $VC08 = "";
$VC09 = "";   $VC10 = "";    $VC11 = "";
$VC12 = "";   
if ($ResuSql)
 { //Carga los campos
   $VC05 = $ResuSql['EENumeRegi'];
   $VC06 = $ResuSql['EEPeriodInf'];
   $VC07 = $ResuSql['EEPerioInfOtro'];
   $VC08 = $ResuSql['EEDenomProg'];
   $VC09 = $ResuSql['EEDenomEval'];
   $VC10 = $ResuSql['EEHipervRes'];	
   $VC11 = $ResuSql['EEAreaResp'];
   $VC12 = $ResuSql['EENota'];		
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(EENumeRegi) IS  NULL THEN 1 ELSE  MAX(EENumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9244aevaluaencu ".
			   "WHERE EEAyuntam = '$ClavAyun' AND ".
               "EEEjercicio = $EjerTrab AND ".
               "EEConsFrac = $ConsFrac AND ".
               "EENumeTrim = '$TrimTrab' ";
  if ($BandMens) echo '1)'.$InstSql.'<br>'; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResuSql = $EjInSql->fetch();
  if ($ResuSql)
    $VC05 = $ResuSql['Clave'];
  }

$RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen/$FracTrab/$TrimTrab/";
	
$MesnTiMo = "";
switch( $TipoMovi ){
  case "A":	$MesnTiMo = "Alta";  
			$CRUD = "POST";       break;
  case "M":	$MesnTiMo = "Modificar"; 
			$CRUD = "PUT";		  break;
  case "B":	$MesnTiMo = "Eliminar";
			$CRUD = "DELETE";	  break;
 }		
?>