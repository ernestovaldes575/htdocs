<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');


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
$InstSql = 	"SELECT OConsecutivo, OAyuntam, OEjercicio, OFechInicio, ". //Cambiar campo
				   "OFechTerm, OHipervin, OAreaResp, OFechAct, ".
				   "OFechValid, ONota ".
			"FROM  tt9202borgan ";								//Cambiar Tabla	
			//"WHERE OAyuntam = '$ClavAyun' AND ".				//Cambiar Condicion
				  //"OEjercicio = $EjerTrab AND ".
				  //"OConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = "";   $VC04 = ""; $VC05 = "";							//Definir campos
$VC06 = "";   $VC07 = ""; $VC08 = "";
$VC09 = "";   $VC10 = "";  $VC11 = "";
$VC12 = "";
if ($ResuSql )
 { //Carga los campos
  $VC03=$RegiTabl['OConsecutivo'];	//campos en base s la base de linea 9
	$VC04=$RegiTabl['OAyuntam']; 
	$VC05=$RegiTabl['OEjercicio'];
	$VC06=$RegiTabl['OFechInicio'];
	$VC07=$RegiTabl['OFechTerm'];
	$VC08=$RegiTabl['OHipervin'];
	$VC09=$RegiTabl['OAreaResp'];
	$VC10=$RegiTabl['OFechAct'];
	$VC11=$RegiTabl['OFechValid'];
	$VC12=$RegiTabl['ONota'];	
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(AConsecutivo) IS  NULL THEN 1 ELSE  MAX(AConsecutivo) + 1 END  AS Clave ".
	 		   "FROM  tt9202borgan ".
			   "WHERE OAyuntam = '$ClavAyun' AND ".
				  "OEjercicio = $EjerTrab AND ";
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