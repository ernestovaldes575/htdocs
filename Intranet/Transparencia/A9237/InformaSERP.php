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
$InstSql = 	"SELECT CCNumeRegi, CCPeriodInfor, CCPerioInforOtr,". 
				           "CCTipoConv, CCDenom, CCFechFirma, CCUnidAdm, ".
				           "CCPersonaCov, CCObjetivo, CCFuenteRecur, CCDescrRec, ".
				           "CCInicioPeriod, CCTermPeriod, CCFechPubliDOF, CCHipervDoc, ".
				           "CCHipervModif, CCAreaResp, CCNota ".
			      "FROM tt9237conveniocoor ".
			      "WHERE CCAyuntam = '$ClavAyun' AND ".
				          "CCEjercicio = $EjerTrab AND ".
				          "CCConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;	  $VC06 = "";    $VC07 = ""; 	  $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   
$VC13 = "";  	$VC14 = "";    $VC15 = "";    $VC16 = "";  	 
$VC17 = "";		$VC18 = "";    $VC19 = "";  	$VC20 = "";
$VC21 = "";   $VC21 = "";  	 $VC22 = "";		

if ($ResuSql)
 { //Carga los campos	
   $VC05 = $ResuSql['CCNumeRegi'];
   $VC06 = $ResuSql['CCPeriodInfor'];
   $VC07 = $ResuSql['CCPerioInforOtr'];
   $VC08 = $ResuSql['CCTipoConv'];
   $VC09 = $ResuSql['CCDenom'];
   $VC10 = $ResuSql['CCFechFirma'];	
   $VC11 = $ResuSql['CCUnidAdm'];	
   $VC12 = $ResuSql['CCPersonaCov'];	
   $VC13 = $ResuSql['CCObjetivo'];	
   $VC14 = $ResuSql['CCFuenteRecur'];
   $VC15 = $ResuSql['CCDescrRec'];
   $VC16 = $ResuSql['CCInicioPeriod'];
   $VC17 = $ResuSql['CCTermPeriod'];
   $VC18 = $ResuSql['CCFechPubliDOF'];
   $VC19 = $ResuSql['CCHipervDoc'];	
   $VC20 = $ResuSql['CCHipervModif'];
   $VC21 = $ResuSql['CCAreaResp'];	
   $VC22 = $ResuSql['CCNota'];	
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(CCNumeRegi) IS  NULL THEN 1 ELSE  MAX(CCNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9237conveniocoor ".
			   "WHERE CCAyuntam = '$ClavAyun' AND ".
				  "CCEjercicio = $EjerTrab AND ".
				  "CCConsFrac = $ConsFrac AND ".
				  "CCNumeTrim = '$TrimTrab' ";
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
  case "A":	$MesnTiMo = "Alta";  
			$CRUD = "POST";       break;
  case "M":	$MesnTiMo = "Modificar"; 
			$CRUD = "PUT";		  break;
  case "B":	$MesnTiMo = "Eliminar";
			$CRUD = "DELETE";	  break;
 }				
?>