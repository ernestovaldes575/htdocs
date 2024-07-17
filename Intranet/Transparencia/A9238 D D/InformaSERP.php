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
$InstSql = 	"SELECT IINumeRegi, IIPeriodoInform, IIPeriodoInformOt, IIDenom, ". 
				           "IIInstitucion, IIDomTipo, IIDomTipoOtro, IIDomNomVia,".
				           "IIDomNumExt, IIDomNumInt, IIDomTipoAsent, IIDomTipoAsentOtr, ".
				           "IIDomNomAsent, IIDomClaveEnti, IIDomClaveMuni, ".
				           "IIDomClaveLocal, IIDomCodPost, IIDomPaisExtr, IIDomCiudaExtr, ".
				           "IIDomCalleExtr, IIDomNumExtr, IIUso, ".
                   "IIOperacion, IIValorCat, IITituloPoses,".
				           "IIHipervSistInfo, IIAreaAdsPerson, IIAreaResp,".
				           "IINaturaleza, IICaracterMonum, IITipoInm, IINota ".
			      "FROM tt9238dinvinmueble ".
			      "WHERE IIAyuntam = '$ClavAyun' AND ".
				           "IIEjercicio = $EjerTrab AND ".
				           "IIConsecutivo = $CampBusq ";
			
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
$VC33 = "";  	$VC34 = "";		 $VC35 = "";    $VC36 = "";  	 

if ($ResuSql)
 { //Carga los campos	
   $VC05 = $ResuSql['IINumeRegi'];
   $VC06 = $ResuSql['IIPeriodoInform'];
   $VC07 = $ResuSql['IIPeriodoInformOt'];
   $VC08 = $ResuSql['IIDenom'];
   $VC09 = $ResuSql['IIInstitucion'];
   $VC10 = $ResuSql['IIDomTipo'];	
   $VC11 = $ResuSql['IIDomTipoOtro'];	
   $VC12 = $ResuSql['IIDomNomVia'];	
   $VC13 = $ResuSql['IIDomNumExt'];	
   $VC14 = $ResuSql['IIDomNumInt'];
   $VC15 = $ResuSql['IIDomTipoAsent'];
   $VC16 = $ResuSql['IIDomTipoAsentOtr'];
   $VC17 = $ResuSql['IIDomNomAsent'];
   $VC18 = $ResuSql['IIDomClaveEnti'];
   $VC19 = $ResuSql['IIDomClaveMuni'];	
   $VC20 = $ResuSql['IIDomClaveLocal'];
   $VC21 = $ResuSql['IIDomCodPost'];	
   $VC22 = $ResuSql['IIDomPaisExtr'];	
   $VC23 = $ResuSql['IIDomCiudaExtr'];	
   $VC24 = $ResuSql['IIDomCalleExtr'];
   $VC25 = $ResuSql['IIDomNumExtr'];
   $VC26 = $ResuSql['IIUso'];
   $VC27 = $ResuSql['IIOperacion'];
   $VC28 = $ResuSql['IIValorCat'];
   $VC29 = $ResuSql['IITituloPoses'];	
   $VC30 = $ResuSql['IIHipervSistInfo'];
   $VC31 = $ResuSql['IIAreaAdsPerson'];	
   $VC32 = $ResuSql['IIAreaResp'];	
   $VC33 = $ResuSql['IINaturaleza'];	
   $VC34 = $ResuSql['IICaracterMonum'];
   $VC35 = $ResuSql['IITipoInm'];
   $VC36 = $ResuSql['IINota'];
 } 
 else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(IINumeRegi) IS  NULL THEN 1 ELSE  MAX(IINumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9238dinvinmueble ".
			   "WHERE IIAyuntam = '$ClavAyun' AND ".
               "IIEjercicio = $EjerTrab AND ".
               "IIConsFrac = $ConsFrac AND ".
               "IINumeTrim = '$TrimTrab' ";
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