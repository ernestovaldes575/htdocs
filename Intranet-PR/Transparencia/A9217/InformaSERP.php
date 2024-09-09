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
$InstSql = 	"SELECT RSNumeRegi, RSFechInicio, RSFechTerm, RSFechSoli,".
				   "RSFolioSoli, RSInfoReq, RSRespuesta, RSRecurrida,".
				   "RSRecurrOtro, RSDocs, RSTipoSoli, RSTipoSoliOtro,".
				   "RSAreaResp, RSNota ".
			"FROM  tt9217regisolic ".
			"WHERE RSAyuntam = '$ClavAyun' AND ".
				  "RSEjercicio = $EjerTrab AND ".
				  "RSConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;   $VC06 = "";  $VC07 = "";	$VC08 = "";  
$VC09 = "";  $VC10 = "";   $VC11 = "";  $VC12 = "";
$VC13 = "";  $VC14 = "";  $VC15 = "";   $VC16 = "";  
$VC17 = "";	 $VC18 = "";

if ($ResuSql)
 { //Carga los campos	
   	$VC05 = $ResuSql['RSNumeRegi'];
   	$VC06 = $ResuSql['RSFechInicio'];
   	$VC07 = $ResuSql['RSFechTerm'];
   	$VC08 = $ResuSql['RSFechSoli'];
	 $VC09 = $ResuSql['RSFolioSoli'];
	 $VC10 = $ResuSql['RSInfoReq'];
	 $VC11 = $ResuSql['RSRespuesta'];
	 $VC12 = $ResuSql['RSRecurrida'];
	 $VC13 = $ResuSql['RSRecurrOtro'];
	 $VC14 = $ResuSql['RSDocs'];
	 $VC15 = $ResuSql['RSTipoSoli'];
	 $VC16 = $ResuSql['RSTipoSoliOtro'];
	 $VC17 = $ResuSql['RSAreaResp'];
	 $VC18 = $ResuSql['RSNota'];		
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(RSNumeRegi) IS  NULL THEN 1 ELSE  MAX(RSNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9217regisolic ".
			   "WHERE RSAyuntam = '$ClavAyun' AND ".
				  "RSEjercicio = $EjerTrab AND ".
				  "RSConsFrac = $ConsFrac AND ".
				  "RSNumeTrim = '$TrimTrab' ";
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