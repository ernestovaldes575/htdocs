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
$InstSql = 	"SELECT 	AConsecutivo, PNumero, PNombrepers, PPrimerapellido, ".
				   "PSegundoapellido, PDenominasocial, PMontorecursos, ".
				   "PUnidadterritorial, PEdad".
           "PSexo, PSexootro ".
			"FROM  a9214b ".
			"WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = 0;   $VC04 = ""; $VC05 = "";  $VC06 = 0;   $VC07 = ""; $VC08 = "";
$VC09 = "";  $VC10 = 0; $VC11 = "";    $VC12 = 0;   $VC13 = "";  $VC13 = ""; 
if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['AConsecutivo'];	
   $VC04 = $ResuSql['AAyuntamiento'];	
   $VC05 = $ResuSql['PNumero'];
   $VC06 = $ResuSql['PNombrepers'];
   $VC07 = $ResuSql['PPrimerapellido'];
   $VC08 = $ResuSql['PSegundoapellido'];
   $VC09 = $ResuSql['APDenominasocial'];
   $VC10 = $ResuSql['PMontorecursos'];	
   $VC11 = $ResuSql['PUnidadterritorial'];		
   $VC12 = $ResuSql['PSexo'];	
   $VC13 = $ResuSql['PSexootro'];	
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ANumeRegi) IS  NULL THEN 1 ELSE  MAX(ANumeRegi) + 1 END  AS Clave ".
	 		   "FROM  a9214b ".
			   "WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsFrac = $ConsFrac AND ".
				  "ANumeTrim = '$TrimTrab' ";
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