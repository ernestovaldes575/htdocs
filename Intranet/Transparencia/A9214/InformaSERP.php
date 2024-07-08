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
$InstSql = 	"SELECT PConsecutivo, PAyuntam, PEjercicio, PFechInicio, ". 
				   "PFechTerm, PTipoProg, PAtenTipoProg, PDenom, PProgMas1, ".
				   "PAtenProgMas1, PSujetoOblig, PAreaRespDes, PDenomDocNorm, ".
				   "PHipervDocNorm, PPeriodVigenc, PAtenPeriodVigen, PFechInicioVigen, ".
				   "PFechTermVigen, PDiseño, PObjetivos, PPoblacion, ".
				   "PNotaMetodol, PMontoPresupApr, PMontoPresupModi, PMontoPresupEjer, ".
				   "PMontoDeficit, PMontoGtoAdm, PHipervDocModif, PHipervCalend, ".
				   "PCriterElegibi, PRequisProc, PMontoMin, PMontoMax, ".
				   "PProcedQuej, PMecanExigi, PMecanCancel, PPeriodoEvalu, ".
				   "PMecanEvalu, PInstancia, PHipervResult, PSeguimRecom, ".
				   "PIndicador, PFormPartSocial, PArticOtroProgr, PAtenArticOtrProgr, ".
				   "PDenomProgr, PSujetReglOp, PAtenSujetReglOp, RHipervRegl, ".
				   "PInformPeriod, PHipervPadron, PAreaRespInfo, PFechValid, ".
				   "PFechAct, PNota, PConsFrac, PNumeTrim, PNumeRegi ".
			"FROM tt9214aprogsubci ".
			"WHERE PAyuntam = '$ClavAyun' AND ".
				  "PEjercicio = $EjerTrab AND ".
				  "PConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = "";   $VC04 = "105"; $VC05 = "2024";	$VC06 = "";   $VC07 = ""; 	 $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   $VC13 = "";  	 $VC14 = "";
$VC15 = "";   $VC16 = "";  	 $VC17 = "";		$VC18 = "";   $VC19 = "";  	 $VC20 = "";
$VC21 = "";   $VC21 = "";  	 $VC22 = "";		$VC23 = "";   $VC24 = "";  	 $VC25 = "";
$VC26 = "";   $VC27 = "";  	 $VC28 = "";		$VC29 = "";   $VC30 = "";  	 $VC31 = "";
$VC32 = "";   $VC33 = "";  	 $VC34 = "";		$VC35 = "";   $VC36 = "";  	 $VC37 = "";
$VC38 = "";   $VC39 = "";  	 $VC40 = "";		$VC41 = "";   $VC42 = "";  	 $VC43 = "";
$VC44 = "";   $VC45 = "";  	 $VC46 = "";		$VC47 = "";   $VC48 = "";  	 $VC49 = "";
$VC50 = "";   $VC51 = "";  	 $VC52 = "";		$VC53 = "";   $VC54 = "";  	 $VC55 = "";
$VC56 = "";   $VC57 = "";  	 $VC58 = "";
if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['PConsecutivo'];	
   $VC04 = $ResuSql['PAyuntam'];	
   $VC05 = $ResuSql['PEjercicio'];
   $VC06 = $ResuSql['PFechInicio'];
   $VC07 = $ResuSql['PFechTerm'];
   $VC08 = $ResuSql['PTipoProg'];
   $VC09 = $ResuSql['PAtenTipoProg'];
   $VC10 = $ResuSql['PDenom'];	
   $VC11 = $ResuSql['PProgMas1'];	
   $VC12 = $ResuSql['PAtenProgMas1'];	
   $VC13 = $ResuSql['PSujetoOblig'];	
   $VC14 = $ResuSql['PAreaRespDes'];
   $VC15 = $ResuSql['PDenomDocNorm'];
   $VC16 = $ResuSql['PHipervDocNorm'];
   $VC17 = $ResuSql['PPeriodVigenc'];
   $VC18 = $ResuSql['PAtenPeriodVigen'];
   $VC19 = $ResuSql['PFechInicioVigen'];	
   $VC20 = $ResuSql['PFechTermVigen'];
   $VC21 = $ResuSql['PDiseño'];	
   $VC22 = $ResuSql['PObjetivos'];	
   $VC23 = $ResuSql['PPoblacion'];	
   $VC24 = $ResuSql['PNotaMetodol'];
   $VC25 = $ResuSql['PMontoPresupApr'];
   $VC26 = $ResuSql['PMontoPresupModi'];
   $VC27 = $ResuSql['PMontoPresupEjer'];
   $VC28 = $ResuSql['PMontoDeficit'];
   $VC29 = $ResuSql['PMontoGtoAdm'];	
   $VC30 = $ResuSql['PHipervDocModif'];
   $VC31 = $ResuSql['PHipervCalend'];	
   $VC32 = $ResuSql['PCriterElegibi'];	
   $VC33 = $ResuSql['PRequisProc'];	
   $VC34 = $ResuSql['PMontoMin'];
   $VC35 = $ResuSql['PMontoMax'];
   $VC36 = $ResuSql['PProcedQuej'];
   $VC37 = $ResuSql['PMecanExigi'];
   $VC38 = $ResuSql['PMecanCancel'];
   $VC39 = $ResuSql['PPeriodoEvalu'];	
   $VC40 = $ResuSql['PMecanEvalu'];
   $VC41 = $ResuSql['PInstancia'];	
   $VC42 = $ResuSql['PHipervResult'];	
   $VC43 = $ResuSql['PSeguimRecom'];	
   $VC44 = $ResuSql['PIndicador'];
   $VC45 = $ResuSql['PFormPartSocial'];
   $VC46 = $ResuSql['PArticOtroProgr'];
   $VC47 = $ResuSql['PAtenArticOtrProgr'];
   $VC48 = $ResuSql['PDenomProgr'];
   $VC49 = $ResuSql['PSujetReglOp'];	
   $VC50 = $ResuSql['PAtenSujetReglOp'];
   $VC51 = $ResuSql['RHipervRegl'];	
   $VC52 = $ResuSql['PInformPeriod'];	
   $VC53 = $ResuSql['PHipervPadron'];	
   $VC54 = $ResuSql['PAreaRespInfo'];
   $VC55 = $ResuSql['PFechValid'];
   $VC56 = $ResuSql['PFechAct'];
   $VC57 = $ResuSql['PNota'];
   $VC58 = $ResuSql['PConsFrac'];
   $VC59 = $ResuSql['PNumeTrim'];	
   $VC60 = $ResuSql['PNumeRegi'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(PNumeRegi) IS  NULL THEN 1 ELSE  MAX(PNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9214aprogsubci ".
			   "WHERE PAyuntam = '$ClavAyun' AND ".
				  "PEjercicio = $EjerTrab AND ".
				  "PConsFrac = $ConsFrac AND ".
				  "PNumeTrim = '$TrimTrab' ";
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