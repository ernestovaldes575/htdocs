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
// carga de catalogos arias, nivel maximo de estudios, sanciones administrativas
$AIdenCat ="3|02|09|10|";
//Cargar Catalogos 
include "../Catalogos.php";
 

//Carga el registro para Consulta
$InstSql = 	"SELECT ANumeRegi, AFechaInicio,".
                    "AFechaTermino, ADenominacionPuesto,". "ADenominacionCargo, ANombre, APrimerApellido,".
                    "ASegundoApellido, AAreaAdscripcion,". "ANivelEstudios, ANivelEstudiosOtro,". "ACarreraGenerica, AExperienciaLaboral,". "AHipervinculoCurriculum, ASancionesAdmon,". "ASancionesAdmonOtro, AAreaResp, ANota ".

			"FROM  tta9221 ".
			"WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;   $VC06 = "";  $VC07 = "";  $VC08 = "";
$VC09 = "";  $VC10 = "";  $VC11 = "";  $VC12 = ""; 
$VC13 = "";  $VC14 = "";  $VC15 = "";  $VC16 = ""; 
$VC17 = "";  $VC18 = "";  $VC19 = "";  $VC20 = "";
$VC21 = "";  $VC22 = "";
if ($ResuSql)
 { //Carga los campos
 
   $VC05 = $ResuSql['ANumeRegi'];
   $VC06 = $ResuSql['AFechaInicio'];
   $VC07 = $ResuSql['AFechaTermino'];
   $VC08 = $ResuSql['ADenominacionPuesto'];
   $VC09 = $ResuSql['ADenominacionCargo'];
   $VC10 = $ResuSql['ANombre'];	
   $VC11 = $ResuSql['APrimerApellido'];	
   $VC12 = $ResuSql['ASegundoApellido'];	
   $VC13 = $ResuSql['AAreaAdscripcion'];	
   $VC14 = $ResuSql['ANivelEstudios'];
   $VC15 = $ResuSql['ANivelEstudiosOtro'];
   $VC16 = $ResuSql['ACarreraGenerica'];
   $VC17 = $ResuSql['AExperienciaLaboral'];
   $VC18 = $ResuSql['AHipervinculoCurriculum'];
   $VC19 = $ResuSql['ASancionesAdmon'];	
   $VC20 = $ResuSql['ASancionesAdmonOtro'];	
   $VC21 = $ResuSql['AAreaResp'];	
   $VC22 = $ResuSql['ANota'];		
 } 
else
 {
  //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ANumeRegi) IS  NULL THEN 1 ELSE  MAX(ANumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tta9221 ".
			   "WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsecutivo = $ConsFrac AND ".
				  "ANumeTrim = '$TrimTrab'";

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
  case "A":	$MesnTiMo = "ALTA";  
			$CRUD = "POST";       break;
  case "M":	$MesnTiMo = "MODIFICAR"; 
			$CRUD = "PUT";		  break;
  case "B":	$MesnTiMo = "ELIMINAR";
			$CRUD = "DELETE";	  break;
 }		
?>