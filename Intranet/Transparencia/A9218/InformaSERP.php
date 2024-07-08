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
$InstSql = 	"SELECT AConsecutivo, AAyuntamiento, AEjercicio, AFechaInicio,". 
            "AFechaTermino, ATipoEvento, ATipoEventoOtro, AAlcanceConcurso,".  "AAlcanceConcursoOtro, ATipoCargo, ATipoCargoOtro, AClavePuesto,".  "ADenominacionPuesto, ADenominacionCargo, ADenominacionUnidad,". 
            "ASalarioBruto, ASalarioNeto, AFechaPublicacion, ANumeroConvocatoria,".  "AHipervinculoDoc, AEstadoProcesoCon, AEstadoProcesoConOtro,".  
            "ATotalCandidatos,ANombrePersona, APrimerApelldio, ASegundoApellido,". "AHipervinculoGanador, AHipervinculoGanadorOtro, AAreaResp, ANota " .

			"FROM  a9218 ".
			"WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = 0;   $VC04 = "";   $VC05 = "";   $VC06 = 0;   $VC07 = ""; $VC08 = "";
$VC09 = 0;   $VC10 = "";   $VC11 = "";   $VC12 = 0;   $VC13 = ""; $VC14 = "";
$VC15 = 0;   $VC16 = "";   $VC17 = "";   $VC18 = 0;   $VC19 = ""; $VC20 = "";
$VC21 = 0;   $VC22 = "";   $VC23 = "";   $VC24 = 0;   $VC25 = ""; $VC26 = "";
$VC27 = 0;   $VC28 = "";   $VC29 = "";   $VC30 = 0;   $VC31 = ""; $VC32 = "";
if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['AConsecutivo'];	
   $VC04 = $ResuSql['AAyuntamiento'];	
   $VC05 = $ResuSql['AEjercicio'];
   $VC06 = $ResuSql['AFechaInicio'];
   $VC07 = $ResuSql['AFechaTermino'];
   $VC08 = $ResuSql['ATipoEvento'];
   $VC09 = $ResuSql['ATipoEventoOtro'];
   $VC10 = $ResuSql['AAlcanceConcurso'];	
   $VC11 = $ResuSql['AAlcanceConcursoOtro'];
   $VC12 = $ResuSql['ATipoCargo'];	
   $VC13 = $ResuSql['ATipoCargoOtro'];	
   $VC14 = $ResuSql['AClavePuesto'];
   $VC15 = $ResuSql['ADenominacionPuesto'];
   $VC16 = $ResuSql['ADenominacionCargo'];
   $VC17 = $ResuSql['ADenominacionUnidad'];
   $VC18 = $ResuSql['ASalarioBruto'];
   $VC19 = $ResuSql['ASalarioNeto'];	
   $VC20 = $ResuSql['AFechaPublicacion'];	
   $VC21 = $ResuSql['ANumeroConvocatoria'];	
   $VC22 = $ResuSql['AHipervinculoDoc'];	
   $VC23 = $ResuSql['AEstadoProcesoCon'];
   $VC24 = $ResuSql['AEstadoProcesoConOtro'];
   $VC25 = $ResuSql['ATotalCandidatos'];
   $VC26 = $ResuSql['ANombrePersona'];
   $VC27 = $ResuSql['APrimerApelldio'];
   $VC28 = $ResuSql['ASegundoApellido'];	
   $VC29 = $ResuSql['AHipervinculoGanador'];		
   $VC30 = $ResuSql['AHipervinculoGanadorOtro	'];	
   $VC31 = $ResuSql['AAreaResp'];	
   $VC32 = $ResuSql['ANota'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ANumeRegi) IS  NULL THEN 1 ELSE  MAX(ANumeRegi) + 1 END  AS Clave ".
	 		   "FROM  a9218 ".
			   "WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsFrac = $ConsFrac AND ";
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