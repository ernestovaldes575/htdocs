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
//Cargar Catalogo de Area Responsable
$AIdenCat ="1|02|";
//Cargar Catalogos 
include "../Catalogos.php";


//Carga el registro para Consulta
$InstSql = 	"SELECT ANumeRegi, AFechaInicio, ". 
             "AFechaTermino, AArea, AFechaActualizacion, ".
             "AFechaValidacion, ANota ".
                    
			       "FROM  tta9231 ".
		      	 "WHERE AAyuntamiento = '$ClavAyun' AND ".
				           "AEjercicio = $EjerTrab AND ".
				           "AConsecutivo = $CampBusq ";
         
          
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;   $VC06 = "";  $VC07 = "";  $VC08 = ""; 
$VC09 = "";  $VC10 = "";  $VC11 = ""; 

if ($ResuSql)
 { //Carga los campos.
  
   $VC05 = $ResuSql['ANumeRegi'];	
   $VC06 = $ResuSql['AFechaInicio'];	
   $VC07 = $ResuSql['AFechaTermino'];
   $VC08 = $ResuSql['AArea'];
   $VC09 = $ResuSql['AFechaActualizacion'];
   $VC10 = $ResuSql['AFechaValidacion'];
   $VC11 = $ResuSql['ANota'];
   
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ANumeRegi) IS  NULL THEN 1 ELSE  MAX(ANumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tta9231 ".
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