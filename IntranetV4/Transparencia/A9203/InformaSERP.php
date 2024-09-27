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
<<<<<<< HEAD
//Carga el registro para Consulta
$InstSql = 	"SELECT ANumeRegi, AFechaInicio, AFechaTermino, AArea, ". //Cambiar campo
				   "ADenominacion, AFunadamento, AHipervinculo, ".
				   "AAreaRespon, ANota ".
			"FROM  tt9203facare ".									//Cambiar Tabla	
			"WHERE AAyuntamiento = '$ClavAyun' AND ".				//Cambiar Condicion
				  "AEjercicio = $EjerTrab AND ".
				  "AConsecutivo = $CampBusq ";
=======
//carga de catalogos  arias
$AIdenCat ="1|02|00|";
//Cargar Catalogos 
include "../Catalogos.php";

//Carga el registro para Consulta/
$InstSql = 	"SELECT  ANumeRegi, AFechaInicio, AFechaTermino,".
                    "AArea, ADenominacion, AFundamento,". 
                     "AHipervinculo, AAreaResp, ANota ". 
				   
			"FROM  tta9203 ".
			"WHERE AAyuntamiento = '$ClavAyun' AND ".
				           "AEjercicio = $EjerTrab AND ".
				           "AConsecutivo = $CampBusq ";
>>>>>>> e5b162c508b56d18625f5506774a619ea33cb671
			
if ($BandMens) echo '1)'.$InstSql.'<br>';  
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

<<<<<<< HEAD
$VC03 = 0;   $VC04 = ""; $VC05 = "";							//Definir campos
$VC06 = 0;   $VC07 = ""; $VC08 = "";
$VC09 = "";  $VC10 = 0; $VC11 = "";
if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['ANumeRegi'];								//Cambiar 	
   $VC04 = $ResuSql['AFechaInicio'];	
   $VC05 = $ResuSql['AFechaTermino'];
   $VC06 = $ResuSql['AArea'];
   $VC07 = $ResuSql['ADenominacion'];
   $VC08 = $ResuSql['AFunadamento'];
   $VC09 = $ResuSql['AHipervinculo'];
   $VC10 = $ResuSql['AAreaRespon'];	
   $VC11 = $ResuSql['ANota'];		
=======
$VC05 = 1 ;   $VC06 = "";  $VC07 = "";    $VC08 = "";    $VC09 = "";
$VC10 = "";   $VC11 = "";  $VC12 = "";    $VC13 = "";


if ($ResuSql)
 { //Carga los campos
   
   $VC05=$ResuSql['ANumeRegi'];
   $VC06=$ResuSql['AFechaInicio']; 
   $VC07=$ResuSql['AFechaTermino']; 
   $VC08=$ResuSql['AArea']; 
   $VC09=$ResuSql['ADenominacion']; 
   $VC10=$ResuSql['AFundamento']; 
   $VC11=$ResuSql['AHipervinculo']; 
   $VC12=$ResuSql['AAreaResp']; 
   $VC13=$ResuSql['ANota'];	
>>>>>>> e5b162c508b56d18625f5506774a619ea33cb671
 } 
else
 { 
 
  //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ANumeRegi) IS  NULL THEN 1 ELSE  MAX(ANumeRegi) + 1 END  AS Clave ".
<<<<<<< HEAD
	 		   "FROM  tt9203facare ".
			   "WHERE AAyuntamiento = '$ClavAyun' AND ".
=======
	 		   "FROM  tta9203 ".
			  "WHERE AAyuntamiento = '$ClavAyun' AND ".
>>>>>>> e5b162c508b56d18625f5506774a619ea33cb671
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
  case "A":	$MesnTiMo = "ALTA";  
			$CRUD = "POST";       break;
  case "M":	$MesnTiMo = "MODIFICAR"; 
			$CRUD = "PUT";		  break;
  case "B":	$MesnTiMo = "ELIMINAR";
			$CRUD = "DELETE";	  break;
 }		
?>