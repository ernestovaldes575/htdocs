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
$InstSql = 	"SELECT RPNumeRegi, RPFechInicio, RPFechTerm, RPTipoRec, ". 
				   "RPTipoReOtro, RPDescr, RPMotivo, RPFechEntr, ".
				   "RPDenom, RPHipervOfic, RPHipervInf, RPHipervProg, ".
				   "RPHipervDonat, RPAreaResp, RPNota ".
			"FROM tt9220brecurspublic ".
			"WHERE RPAyuntam = '$ClavAyun' AND ".
				  "RPEjercicio = $EjerTrab AND ".
				  "RPConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;	  $VC06 = "";    $VC07 = ""; 	  $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   
$VC13 = "";  	$VC14 = "";    $VC15 = "";    $VC16 = "";  	 
$VC17 = "";		$VC18 = "";    $VC19 = "";  	 

if ($ResuSql)
 { //Carga los campos	
   $VC05 = $ResuSql['RPNumeRegi'];
   $VC06 = $ResuSql['RPFechInicio'];
   $VC07 = $ResuSql['RPFechTerm'];
   $VC08 = $ResuSql['RPTipoRec'];
   $VC09 = $ResuSql['RPTipoReOtro'];
   $VC10 = $ResuSql['RPDescr'];	
   $VC11 = $ResuSql['RPMotivo'];	
   $VC12 = $ResuSql['RPFechEntr'];	
   $VC13 = $ResuSql['RPDenom'];	
   $VC14 = $ResuSql['RPHipervOfic'];
   $VC15 = $ResuSql['RPHipervInf'];
   $VC16 = $ResuSql['RPHipervProg'];
   $VC17 = $ResuSql['RPHipervDonat'];
   $VC18 = $ResuSql['RPAreaResp'];
   $VC19 = $ResuSql['RPNota'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(RPNumeRegi) IS  NULL THEN 1 ELSE  MAX(RPNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9220brecurspublic ".
			   "WHERE RPAyuntam = '$ClavAyun' AND ".
				  "RPEjercicio = $EjerTrab AND ".
				  "RPConsFrac = $ConsFrac AND ".
				  "RPNumeTrim = '$TrimTrab' ";
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