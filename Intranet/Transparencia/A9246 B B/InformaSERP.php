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
$InstSql = 	"SELECT LJNumeRegi,  LJPerioInf, ".
                   "LJPerioInfOtro, LJRespRecibIng, LJRespAdmIng, LJNomResp, LJAreaResp, ".
                   "LJNota ".
            "FROM   tt9246blistjubil ".
            "WHERE  LJAyuntam = '$ClavAyun' AND ".
                   "LJEjercicio = $EjerTrab AND ".
                   "LJConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;
$VC06 = "";   $VC07 = "";    $VC08 = "";
$VC09 = "";   $VC10 = "";    $VC11 = "";
$VC12 = "";   
if ($ResuSql)
 { //Carga los campos
   $VC05 = $ResuSql['LJNumeRegi'];
   $VC06 = $ResuSql['LJPerioInf'];
   $VC07 = $ResuSql['LJPerioInfOtro'];
   $VC08 = $ResuSql['LJRespRecibIng'];
   $VC09 = $ResuSql['LJRespAdmIng'];
   $VC10 = $ResuSql['LJNomResp'];	
   $VC11 = $ResuSql['LJAreaResp'];
   $VC12 = $ResuSql['LJNota'];		
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(LJNumeRegi) IS  NULL THEN 1 ELSE  MAX(LJNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9246blistjubil ".
			   "WHERE LJAyuntam = '$ClavAyun' AND ".
               "LJEjercicio = $EjerTrab AND ".
               "LJConsFrac = $ConsFrac AND ".
               "LJNumeTrim = '$TrimTrab' ";
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