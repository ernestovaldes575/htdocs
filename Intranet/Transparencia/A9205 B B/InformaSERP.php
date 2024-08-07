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
			//SELECT `MNumeRegi`, `MFechInicio`, `MFechTerm`, 
			//		 `MHipervin`, `MAreaResp`, `MFechAct`, 
			//		 `MFechValid`, `MNota`
$InstSql = 	"SELECT MNumeRegi, MFechInicio, MFechTerm, ".
				   "MHipervin, MAreaResp, MFechAct, ".
				   "MFechValid, MNota ".
			"FROM  tt9205bmatriz ".
			"WHERE MAyuntam = '$ClavAyun' AND ".
				  "MEjercicio = $EjerTrab AND ".
				  "MConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;   $VC06 = "";   $VC07 = "";
$VC08 = "";  $VC09 = "";   $VC10 = "";   
$VC11 = "";  $VC12 = "";
  
if ($ResuSql)
 { //Carga los campos
   	$VC05 = $ResuSql['MNumeRegi'];
   	$VC06 = $ResuSql['MFechInicio'];
   	$VC07 = $ResuSql['MFechTerm'];
   	$VC08 = $ResuSql['MHipervin'];
	$VC09 = $ResuSql['MAreaResp'];
	$VC10 = $ResuSql['MFechAct'];
	$VC11 = $ResuSql['MFechValid'];
	$VC12 = $ResuSql['MNota'];	
 } 
else
 { 
	//Cargar Catalogo de Area Responsable
	include "../tcarea.php";
	
	//Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(MNumeRegi) IS  NULL THEN 1 ELSE  MAX(MNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9205bmatriz ".
			   "WHERE MAyuntam = '$ClavAyun' AND ".
				  "MEjercicio = $EjerTrab AND ".
				  "MConsFrac = $ConsFrac AND ".
				  "MNumeTrim = '$TrimTrab' ";
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
	case "A":	$MesnTiMo = "Alta";  
			  $CRUD = "POST";       break;
	case "M":	$MesnTiMo = "Modificar"; 
			  $CRUD = "PUT";		  break;
	case "B":	$MesnTiMo = "Eliminar";
			  $CRUD = "DELETE";	  break;
 }		
?>