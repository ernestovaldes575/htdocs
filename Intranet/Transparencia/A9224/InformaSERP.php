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
$InstSql = 	"SELECT TRConsecutivo, TRAyuntam, TREjercicio, TRFechInicio, ".
				   "TRFechTerm, TRDenom, TRTipoUsu, TRDesc, TRModalidad, TRHipervRequ, ".
           "TRDocReque, TRHipervForm, TRTiempoRes, TRVigencia, TRAreaContact, ".
           "TRCosto, TRSustento, TRLugarPago, TRFundJuri, TRDerech, TRLugarRepor, ".
				   "TROtros, TRHipervInf, TRHipervSist, TRAreaResp, TRNota ".
			"FROM  tt9224tramreq ".
			"WHERE TRAyuntam = '$ClavAyun' AND ".
				  "TREjercicio = $EjerTrab AND ".
				  "TRConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = "";   $VC04 = "105"; $VC05 = "2024";
$VC06 = "";   $VC07 = "";   $VC08 = "";
$VC09 = "";   $VC10 = "";   $VC11 = "";
$VC12 = "";   $VC13 = "";   $VC14 = "";
$VC15 = "";   $VC16 = "";   $VC17 = "";
$VC18 = "";   $VC19 = "";   $VC20 = "";
$VC21 = "";   $VC22 = "";   $VC23 = "";
$VC24 = "";   $VC25 = "";   $VC26 = "";
$VC27 = "";   $VC28 = "";   
if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['TRConsecutivo'];	
   $VC04 = $ResuSql['TRAyuntam'];	
   $VC05 = $ResuSql['TREjercicio'];
   $VC06 = $ResuSql['TRFechInicio'];
   $VC07 = $ResuSql['TRFechTerm'];
   $VC08 = $ResuSql['TRDenom'];
   $VC09 = $ResuSql['TRTipoUsu'];
   $VC10 = $ResuSql['TRDesc'];	
   $VC11 = $ResuSql['TRModalidad'];	
   $VC12=$ResuSql['TRHipervRequ'];
	$VC13=$ResuSql['TRDocReque'];
	$VC14=$ResuSql['TRHipervForm'];
	$VC15=$ResuSql['TRTiempoRes'];
	$VC16=$ResuSql['TRVigencia'];
	$VC17=$ResuSql['TRAreaContact'];
	$VC18=$ResuSql['TRCosto'];
	$VC19=$ResuSql['TRSustento'];
	$VC20=$ResuSql['TRLugarPago'];
	$VC21=$ResuSql['TRFundJuri'];
	$VC22=$ResuSql['TRDerech'];
	$VC23=$ResuSql['TRLugarRepor'];
	$VC24=$ResuSql['TROtros'];
	$VC25=$ResuSql['TRHipervInf'];
	$VC26=$ResuSql['TRHipervSist'];
	$VC27=$ResuSql['TRAreaResp'];
	$VC28=$ResuSql['TRNota'];	
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(TRNumeRegi) IS  NULL THEN 1 ELSE  MAX(TRNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9224tramreq ".
			   "WHERE TRAyuntam = '$ClavAyun' AND ".
				  "TREjercicio = $EjerTrab AND ".
				  "TRConsFrac = $ConsFrac AND ".
				  "TRNumeTrim = '$TrimTrab' ";
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