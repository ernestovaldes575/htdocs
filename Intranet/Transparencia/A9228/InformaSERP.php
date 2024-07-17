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
   $InstSql = 	"SELECT ANumeRegi, AFechaInicio, AFechaTermino,".
               "AEjercicioAuditado, APeriodoAuditado, ARubro,".
               "ARubroOtro, ATipoAuditoria, ANumeroAuditoria,".
               "AOrganoAuditoria, ANomenclaturaNotificacion,".
               "ANomenclaturainfoRevisado, ANomenclaturaSolicitud,".
               "AObjetivoAuditoria, ARubrosRevision, AFundamentoLegal,".
               "ANumeroOficio, AHiperNotifiResultados, ATotalHallazgos,". "AHipervinculoRecomen, AHipervinculoInformes,".
               "AAccionOrganoFiscalizador, AAreaRecibeResultados,".
               "ATotalAclaraciones, AHipervinculoAclaraciones,".
               "ATotalAcciones, AHipervinculoProgramaAnual, AAreaResp,".
               "ANota ".
                    
			    "FROM  a9228 ".
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
$VC21 = "";  $VC22 = "";  $VC23 = "";  $VC24 = "";
$VC25 = "";  $VC26 = "";  $VC27 = "";  $VC28 = "";   
$VC29 = "";  $VC30 = "";  $VC31 = "";  $VC32 = "";
$VC33 = "";  

if ($ResuSql)
 { //Carga los campos 
   $VC05 = $ResuSql['ANumeRegi'];	
   $VC06 = $ResuSql['AFechaInicio'];	
   $VC07 = $ResuSql['AFechaTermino'];
   $VC08 = $ResuSql['AEjercicioAuditado'];
   $VC09 = $ResuSql['APeriodoAuditado'];
   $VC10 = $ResuSql['ARubro'];
   $VC11 = $ResuSql['ARubroOtro'];
   $VC12 = $ResuSql['ATipoAuditoria'];	
   $VC13 = $ResuSql['ANumeroAuditoria'];
   $VC14 = $ResuSql['AOrganoAuditoria'];
   $VC15 = $ResuSql['ANomenclaturaNotificacion'];
   $VC16 = $ResuSql['ANomenclaturainfoRevisado'];
   $VC17 = $ResuSql['ANomenclaturaSolicitud'];
   $VC18 = $ResuSql['AObjetivoAuditoria'];
   $VC19 = $ResuSql['ARubrosRevision'];
   $VC20 = $ResuSql['AFundamentoLegal'];
   $VC21 = $ResuSql['ANumeroOficio'];
   $VC22 = $ResuSql['AHiperNotifiResultados'];
   $VC23 = $ResuSql['ATotalHallazgos'];
   $VC24 = $ResuSql['AHipervinculoRecomen'];
   $VC25 = $ResuSql['AHipervinculoInformes'];
   $VC26 = $ResuSql['AAccionOrganoFiscalizador'];
   $VC27 = $ResuSql['AAreaRecibeResultados'];
   $VC28 = $ResuSql['ATotalAclaraciones'];
   $VC29 = $ResuSql['AHipervinculoAclaraciones'];
   $VC30 = $ResuSql['ATotalAcciones'];
   $VC31 = $ResuSql['AHipervinculoProgramaAnual'];
   $VC32 = $ResuSql['AAreaResp'];
   $VC33 = $ResuSql['ANota'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ANumeRegi) IS  NULL THEN 1 ELSE  MAX(ANumeRegi) + 1 END  AS Clave ".
	 		   "FROM  a9228 ".
			   "WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsFrac = $ConsFrac AND ".
				  "ANumeTrim = '$TrimTrab' ";
          
  if ($BandMens) 
  echo '1)'.$InstSql.'<br>'; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResuSql = $EjInSql->fetch();
  if ($ResuSql)
    $VC05 = $ResuSql['Clave'];
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