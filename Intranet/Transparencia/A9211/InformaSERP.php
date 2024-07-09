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
$InstSql = 	"SELECT AConsecutivo, AAyuntamiento,AEjercicio, AFechaInicio,".  
            "AFechaTermino, ATipoContratacion, ATipoContratacionOtro,". 
            "APartidaPresupuestal, ANombre, APrimerApellido, ".
            "ASegundoApellido, ANumeroContrato,AHipervinculoCon, ".
            "AFechaInicioCon, AFechaTerminoCon, AServiciosContra, ".
            " ARemuneracion, AMontoTotal, APrestaciones, ".
            "AHipervinculo, AAreaResp, ANota ".
             
			"FROM   a9211 ".
			"WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = 0;   $VC04 = "";  $VC05 = "";  $VC06 = "";  $VC07 = "";  $VC08 = "";
$VC09 = 0;   $VC10 = "";  $VC11 = "";  $VC12 = "";  $VC12 = "";  $VC14 = "";
$VC15 = "";  $VC16 = "";  $VC17 = "";  $VC18 = "";  $VC19 = "";  $VC20 = "";
$VC21 = "";  $VC22 = "";  $VC23 = "";  $VC24 = "";   
if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['AConsecutivo '];	
   $VC04 = $ResuSql['AAyuntamiento'];
   $VC05 = $ResuSql['AEjercicio'];
   $VC06 = $ResuSql['AFechaInicio'];
   $VC07 = $ResuSql['AFechaTermino'];
   $VC08 = $ResuSql['ATipoContratacion'];
   $VC09 = $ResuSql['ATipoContratacionOtro'];
   $VC10 = $ResuSql['APartidaPresupuestal'];	
   $VC11 = $ResuSql['ANombre'];	
   $VC12 = $ResuSql['APrimerApellido'];	
   $VC13 = $ResuSql['ASegundoApellido'];	
   $VC14 = $ResuSql['ANumeroContrato'];
   $VC15 = $ResuSql['AHipervinculoCon'];
   $VC16 = $ResuSql['AFechaInicioCon'];
   $VC17 = $ResuSql['AFechaTerminoCon'];
   $VC18 = $ResuSql['AServiciosContra'];
   $VC19 = $ResuSql['ARemuneracion'];	
   $VC20 = $ResuSql['AMontoTotal'];	
   $VC21 = $ResuSql['APrestaciones'];	
   $VC22 = $ResuSql['AHipervinculo'];	
   $VC23 = $ResuSql['AAreaResp'];	
   $VC24 = $ResuSql['ANota'];	
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ANumeRegi) IS  NULL THEN 1 ELSE  MAX(ANumeRegi) + 1 END  AS Clave ".
	 		   "FROM   a9211 ".
			    "WHERE AAyuntamiento = '$ClavAyun' AND ".
				 "AEjercicio = $EjerTrab AND ".
				  "AConsFrac = $ConsFrac AND ";
				  //"ANumeTrim = '$TrimTrab' ";
         
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