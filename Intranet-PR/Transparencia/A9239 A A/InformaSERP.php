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
$InstSql = 	"SELECT RCNumeRegi, RCPeriodInf, RCPeriodInfOtro, RCFechRecibNot, ". 
				           "RCNumRecom, RCHechoViol, RCTipoReco, RCNumExp,".
				           "RCFechSoli, RCFechRecibOp, RCEstatus, RCNumOficio, ".
				           "RCHipervDoc, RCFechSoliOp, RCFechRespUni, ".
				           "RCAccionReal, RCDependencia, RCFechNotif, RCHipervSitio, ".
				           "RCRazonNegat, RCFechComp, RCServidorComp, ".
                   "RCHipervMinuta, RCDetermResp, RCFechNotifSuj,".
                   "RCHipervOficio, RCRespNotif, RCFechaNotifResp, ".
                   "RCNumOficResp, RCNumDenun, RCEdoRecAcep, ".
                   "RCFechConcl, RCFechNotifCon, RCHiperVersPub, ".
				           "RCAreaResp, RCNota ".
			      "FROM tt9239arecomencndh ".
			      "WHERE RCAyuntam = '$ClavAyun' AND ".
				           "RCEjercicio = $EjerTrab AND ".
				           "RCConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;	  $VC06 = "";    $VC07 = ""; 	  $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   
$VC13 = "";  	$VC14 = "";    $VC15 = "";    $VC16 = "";  	 
$VC17 = "";		$VC18 = "";    $VC19 = "";  	$VC20 = "";
$VC21 = "";   $VC22 = "";		 $VC23 = "";    $VC24 = "";  	 
$VC25 = "";   $VC26 = "";    $VC27 = "";  	$VC28 = "";		
$VC29 = "";   $VC30 = "";  	 $VC31 = "";    $VC32 = "";   
$VC33 = "";   $VC34 = "";    $VC35 = "";  	$VC36 = "";		
$VC37 = "";   $VC38 = "";  	 $VC39 = "";    $VC40 = ""; 	 

if ($ResuSql)
 { //Carga los campos	
   $VC05 = $ResuSql['RCNumeRegi'];
   $VC06 = $ResuSql['RCPeriodInf'];
   $VC07 = $ResuSql['RCPeriodInfOtro'];
   $VC08 = $ResuSql['RCFechRecibNot'];
   $VC09 = $ResuSql['RCNumRecom'];
   $VC10 = $ResuSql['RCHechoViol'];	
   $VC11 = $ResuSql['RCTipoReco'];	
   $VC12 = $ResuSql['RCNumExp'];	
   $VC13 = $ResuSql['RCFechSoli'];	
   $VC14 = $ResuSql['RCFechRecibOp'];
   $VC15 = $ResuSql['RCEstatus'];
   $VC16 = $ResuSql['RCNumOficio'];
   $VC17 = $ResuSql['RCHipervDoc'];
   $VC18 = $ResuSql['RCFechSoliOp'];
   $VC19 = $ResuSql['RCFechRespUni'];	
   $VC20 = $ResuSql['RCAccionReal'];
   $VC21 = $ResuSql['RCDependencia'];	
   $VC22 = $ResuSql['RCFechNotif'];	
   $VC23 = $ResuSql['RCHipervSitio'];	
   $VC24 = $ResuSql['RCRazonNegat'];
   $VC25 = $ResuSql['RCFechComp'];
   $VC26 = $ResuSql['RCServidorComp'];
   $VC27 = $ResuSql['RCHipervMinuta'];
   $VC28 = $ResuSql['RCDetermResp'];
   $VC29 = $ResuSql['RCFechNotifSuj'];	
   $VC30 = $ResuSql['RCHipervOficio'];
   $VC31 = $ResuSql['RCRespNotif'];	
   $VC32 = $ResuSql['RCFechaNotifResp'];	
   $VC33 = $ResuSql['RCNumOficResp'];
   $VC34 = $ResuSql['RCNumDenun'];
   $VC35 = $ResuSql['RCEdoRecAcep'];
   $VC36 = $ResuSql['RCFechConcl'];
   $VC37 = $ResuSql['RCFechNotifCon'];	
   $VC38 = $ResuSql['RCHiperVersPub'];
   $VC39 = $ResuSql['RCAreaResp'];	
   $VC40 = $ResuSql['RCNota'];
 } 
 else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(RCNumeRegi) IS  NULL THEN 1 ELSE  MAX(RCNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9239arecomencndh  ".
			   "WHERE RCAyuntam = '$ClavAyun' AND ".
               "RCEjercicio = $EjerTrab AND ".
               "RCConsFrac = $ConsFrac AND ".
               "RCNumeTrim = '$TrimTrab' ";
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