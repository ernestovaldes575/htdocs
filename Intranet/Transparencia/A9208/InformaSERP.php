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
$InstSql = 	"SELECT RNumeRegi, RFechInicio, RFechTerm, RTipoInte,". 
				           "RTipoInteOtro, RClave, RDenomPuest, ".
				           "RDenomCarg, RAreaAds, RNombre, RPrimerApell, ".
				           "RSegunApell, RSexo, RSexoOtro, RRemunBruta, ".
				           "RTipoMoneBrut, RRemunNeta, RTipoMoneNet, RPercepDinero, ".
				           "RPercepEspec, RIngresos, RCompensa, RGratifica, ".
				           "RPrimas, RComision, RDietas, RBonos, ".
				           "REstimulo, RApoyoEcon, RPrestacEcon, RPrestaEspecie, ".
				           "RAreaResp, RNota ".
			      "FROM tt9208bremun ".
			      "WHERE RAyuntam = '$ClavAyun' AND ".
				          "REjercicio = $EjerTrab AND ".
				          "RConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;	  $VC06 = "";   $VC07 = ""; 	  $VC08 = "01";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   $VC13 = "";  	 $VC14 = "";
$VC15 = "";   $VC16 = "";  	 $VC17 = "";		$VC18 = "";   $VC19 = "";  	 $VC20 = "";
$VC21 = "";   $VC21 = "";  	 $VC22 = "";		$VC23 = "";   $VC24 = "";  	 $VC25 = "";
$VC26 = "";   $VC27 = "";  	 $VC28 = "";		$VC29 = "";   $VC30 = "";  	 $VC31 = "";
$VC32 = "";   $VC33 = "";  	 $VC34 = "";		$VC35 = "";   $VC36 = "";  	 $VC37 = "";
		   
if ($ResuSql)
 { //Carga los campos	
   $VC05 = $ResuSql['RNumeRegi'];
   $VC06 = $ResuSql['RFechInicio'];
   $VC07 = $ResuSql['RFechTerm'];
   $VC08 = $ResuSql['RTipoInte'];
   $VC09 = $ResuSql['RTipoInteOtro'];
   $VC10 = $ResuSql['RClave'];	
   $VC11 = $ResuSql['RDenomPuest'];	
   $VC12 = $ResuSql['RDenomCarg'];	
   $VC13 = $ResuSql['RAreaAds'];	
   $VC14 = $ResuSql['RNombre'];
   $VC15 = $ResuSql['RPrimerApell'];
   $VC16 = $ResuSql['RSegunApell'];
   $VC17 = $ResuSql['RSexo'];
   $VC18 = $ResuSql['RSexoOtro'];
   $VC19 = $ResuSql['RRemunBruta'];	
   $VC20 = $ResuSql['RTipoMoneBrut'];
   $VC21 = $ResuSql['RRemunNeta'];	
   $VC22 = $ResuSql['RTipoMoneNet'];	
   $VC23 = $ResuSql['RPercepDinero'];	
   $VC24 = $ResuSql['RPercepEspec'];
   $VC25 = $ResuSql['RIngresos'];
   $VC26 = $ResuSql['RCompensa'];
   $VC27 = $ResuSql['RGratifica'];
   $VC28 = $ResuSql['RPrimas'];
   $VC29 = $ResuSql['RComision'];	
   $VC30 = $ResuSql['RDietas'];
   $VC31 = $ResuSql['RBonos'];	
   $VC32 = $ResuSql['REstimulo'];	
   $VC33 = $ResuSql['RApoyoEcon'];	
   $VC34 = $ResuSql['RPrestacEcon'];
   $VC35 = $ResuSql['RPrestaEspecie'];
   $VC36 = $ResuSql['RAreaResp'];
   $VC37 = $ResuSql['RNota'];
 } 
else
{ 
  //Cargar Catalogo Tipo Integrante
	$InstSql = "SELECT CTIClave AS Clave, CTIDescri AS Descri ". 
             "FROM tc8tipointe ".
             "ORDER BY CTIClave";
  if ($BandMens) echo '1)'.$InstSql.'<br>'; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResCat01 = $EjInSql->fetchall();

  //Cargar Catalogo de Area Responsable
  include "../tcarea.php";
  //Cargar Catalogo de Sexo
  include "../tcsexo.php";

  //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(RNumeRegi) IS  NULL THEN 1 ELSE  MAX(RNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9208bremun ".
			   "WHERE RAyuntam = '$ClavAyun' AND ".
				  "REjercicio = $EjerTrab AND ".
				  "RConsFrac = $ConsFrac AND ".
				  "RNumeTrim = '$TrimTrab' ";
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