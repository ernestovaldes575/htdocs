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
$InstSql = 	"SELECT DENumeRegi, DEPerioInf, DEPerioInfOtro, DEDescrBienDon,". 
				          "DEActivDona, DEActivDonaOtro, DEPersonJuri, DEPeronJuriOtro,".
				          "DENomBenef, DEPrimApeBenef, DESegApeBenef, DEDenomPers,".
				          "DETipoPersMoral, DENomPersFisi, DEPrimApePerFis, DESegApePerFis,".
				          "DECargoPerFis, DENomServPub, DEPrimApeServPub, DESegApeServPub, ".
				          "DECargoServPub, DEHipervContr, DEAreaResp, DENota ".
			      "FROM  tt9248bdonaespec ".
			      "WHERE DEAyuntam = '$ClavAyun' AND ".
				          "DEEjercicio = $EjerTrab AND ".
				          "DEConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;	  $VC06 = "";    $VC07 = ""; 	  $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   
$VC13 = "";  	$VC14 = "";    $VC15 = "";    $VC16 = "";  	
$VC17 = "";		$VC18 = "";    $VC19 = "";  	$VC20 = "";
$VC21 = "";   $VC22 = "";  	 $VC23 = "";    $VC24 = "";  	 
$VC25 = "";   $VC26 = "";    $VC27 = "";  	$VC28 = "";			

if ($ResuSql)
 { //Carga los campos	
   $VC05 = $ResuSql['DENumeRegi'];
   $VC06 = $ResuSql['DEPerioInf'];
   $VC07 = $ResuSql['DEPerioInfOtro'];
   $VC08 = $ResuSql['DEDescrBienDon'];
   $VC09 = $ResuSql['DEActivDona'];
   $VC10 = $ResuSql['DEActivDonaOtro'];	
   $VC11 = $ResuSql['DEPersonJuri'];	
   $VC12 = $ResuSql['DEPeronJuriOtro'];	
   $VC13 = $ResuSql['DENomBenef'];	
   $VC14 = $ResuSql['DEPrimApeBenef'];
   $VC15 = $ResuSql['DESegApeBenef'];
   $VC16 = $ResuSql['DEDenomPers'];
   $VC17 = $ResuSql['DETipoPersMoral'];
   $VC18 = $ResuSql['DENomPersFisi'];
   $VC19 = $ResuSql['DEPrimApePerFis'];	
   $VC20 = $ResuSql['DESegApePerFis'];
   $VC21 = $ResuSql['DECargoPerFis'];	
   $VC22 = $ResuSql['DENomServPub'];	
   $VC23 = $ResuSql['DEPrimApeServPub'];	
   $VC24 = $ResuSql['DESegApeServPub'];
   $VC25 = $ResuSql['DECargoServPub'];
   $VC26 = $ResuSql['DEHipervContr'];
   $VC27 = $ResuSql['DEAreaResp'];
   $VC28 = $ResuSql['DENota'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(DENumeRegi) IS  NULL THEN 1 ELSE  MAX(DENumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9248bdonaespec ".
			   "WHERE DEAyuntam = '$ClavAyun' AND ".
				  "DEEjercicio = $EjerTrab AND ".
				  "DEConsFrac = $ConsFrac AND ".
				  "DENumeTrim = '$TrimTrab' ";
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