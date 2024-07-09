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
$InstSql = 	"SELECT AConsecutivo, AAyuntamiento, AEjercicio, ". "AFechaInicio, AFechaTermino, ANombrePrograma, AObjetivo, ".
				   "ADimensionesAMedir, ADefinicionIndicador, AMetodoCalculo, ".
				   "AUnidadMedida, AFrecuenciaMedicion, ALineaBase, AMetasProgramadas, ". "AMetasAjustadas, AAvance, ASentidoIndicador, ASentidoIndicadorOtro, ". "AFuenteInformacion, AAreaResp, ANota  ".
			"FROM  a9206a ".
			"WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsecutivo = $CampBusq ";
          "ORDER BY OConsecutivo ";
          
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = "";   $VC04 = "";   $VC05 = "";    $VC06 = "";    $VC07 = "";  $VC08 = ""; 
$VC09 = "";   $VC10 = "";   $VC11 = "";    $VC12 = "";    $VC13 = "";  $VC14 = ""; 
$VC15 = "";  $VC16 = 0;    $VC17 = "";    $VC18 = "";    $VC19 = "";  $VC20 = 0;   
$VC21 = 0;   $VC22 = "";    $VC23 = "";     $VC24 = "";

if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['AConsecutivo'];
   $VC04 = $ResuSql['AAyuntamiento'];
   $VC05 = $ResuSql['AEjercicio'];	
   $VC06 = $ResuSql['AFechaInicio'];	
   $VC07 = $ResuSql['AFechaTermino'];
   $VC08 = $ResuSql['ANombrePrograma'];
   $VC09 = $ResuSql['AObjetivo'];
   $VC10 = $ResuSql['ANombreIndicador'];
   $VC11 = $ResuSql['ADimensionesAMedir'];
   $VC12 = $ResuSql['ADefinicionIndicador'];	
   $VC13 = $ResuSql['AMetodoCalculo'];		
   $VC14 = $ResuSql['AUnidadMedida'];
   $VC15 = $ResuSql['AFrecuenciaMedicion'];
   $VC16 = $ResuSql['ALineaBase'];
   $VC17 = $ResuSql['AMetasProgramadas'];
   $VC18 = $ResuSql['AMetasAjustadas'];
   $VC19 = $ResuSql['AAvance'];
   $VC20 = $ResuSql['ASentidoIndicador'];
   $VC21 = $ResuSql['ASentidoIndicadorOtro'];
   $VC22 = $ResuSql['AFuenteInformacion'];
   $VC23 = $ResuSql['AAreaResp'];
   $VC24 = $ResuSql['ANota'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ANumeRegi) IS  NULL THEN 1 ELSE  MAX(ANumeRegi) + 1 END  AS Clave ".
	 		   "FROM  a9206a ".
			   "WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ";
				  //"AConsFrac = $ConsFrac AND ".
				 // "ANumeTrim = '$TrimTrab' ";
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