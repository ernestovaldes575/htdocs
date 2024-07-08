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
$InstSql = 	"SELECT RDConsecutivo, RDAyuntam, RDEjercicio, RDFechInicio, ". 
				   "RDFechTerm, RDEjerAudit, RDHipervEdosF, RDFechEmis, RDHipervDictam, ".
				   "RDTotalObserv, RDTotalAclar, RDTotalSolven, RDNomConta, ".
				   "RDApePatConta, RDApeMatConta, RDDenom, RDAreaResp, ".
				   "RDNota, RDConsFrac, RDNumeTrim, RDNumeRegi ".
			"FROM tt9230resultdicta ".
			"WHERE RDAyuntam = '$ClavAyun' AND ".
				  "RDEjercicio = $EjerTrab AND ".
				  "RDConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = "";   $VC04 = "105"; $VC05 = "2024";	$VC06 = "";   $VC07 = ""; 	 $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   $VC13 = "";  	 $VC14 = "";
$VC15 = "";   $VC16 = "";  	 $VC17 = "";		$VC18 = "";   $VC19 = "";  	 $VC20 = "";
$VC21 = "";   $VC21 = "";  	 $VC22 = "";		$VC23 = "";   

if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['RDConsecutivo'];	
   $VC04 = $ResuSql['RDAyuntam'];	
   $VC05 = $ResuSql['RDEjercicio'];
   $VC06 = $ResuSql['RDFechInicio'];
   $VC07 = $ResuSql['RDFechTerm'];
   $VC08 = $ResuSql['RDEjerAudit'];
   $VC09 = $ResuSql['RDHipervEdosF'];
   $VC10 = $ResuSql['RDFechEmis'];	
   $VC11 = $ResuSql['RDHipervDictam'];	
   $VC12 = $ResuSql['RDTotalObserv'];	
   $VC13 = $ResuSql['RDTotalAclar'];	
   $VC14 = $ResuSql['RDTotalSolven'];
   $VC15 = $ResuSql['RDNomConta'];
   $VC16 = $ResuSql['RDApePatConta'];
   $VC17 = $ResuSql['RDApeMatConta'];
   $VC18 = $ResuSql['RDDenom'];
   $VC19 = $ResuSql['RDAreaResp'];	
   $VC20 = $ResuSql['RDNota'];
   $VC21 = $ResuSql['RDConsFrac'];	
   $VC22 = $ResuSql['RDNumeTrim'];	
   $VC23 = $ResuSql['RDNumeRegi'];	
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(RDNumeRegi) IS  NULL THEN 1 ELSE  MAX(RDNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9230resultdicta ".
			   "WHERE RDAyuntam = '$ClavAyun' AND ".
				  "RDEjercicio = $EjerTrab AND ".
				  "RDConsFrac = $ConsFrac AND ".
				  "RDNumeTrim = '$TrimTrab' ";
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