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
$InstSql = 	"SELECT DConsecutivo, DAyuntam, DEjercicio, DFechInicio, ". 
				   "DFechTerm, DAcreditado, DDenominac, DTipoObli, DAtenTipoObli, ".
				   "DAcreedor, DFechContrat, DMontOriContr, DPlazoTasaI, ".
				   "DTasaInt, DPlazoPagarDeu, DFechVenc, DRecursGarant, ".
				   "DDestinoObli, DSaldo, DHipervAutor, DHiperListado, ".
				   "DHiperContr, DHiperDoc, DInfoFinanz, DInforEnvi, ".
				   "DInforCuePub, DFechInscrRO, DInforDeuPub, DInforCuePubCons, ".
				   "DHipervPropu, DAreaResp, DNota, DConsFrac, ".
				   "DNumeTrim, DNumeRegi ".
			"FROM  tt9226deudapublic ".
			"WHERE DAyuntam = '$ClavAyun' AND ".
				  "DEjercicio = $EjerTrab AND ".
				  "DConsecutivo = $CampBusq ";
			
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

if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['DConsecutivo'];	
   $VC04 = $ResuSql['DAyuntam'];	
   $VC05 = $ResuSql['DEjercicio'];
   $VC06 = $ResuSql['DFechInicio'];
   $VC07 = $ResuSql['DFechTerm'];
   $VC08 = $ResuSql['DAcreditado'];
   $VC09 = $ResuSql['DDenominac'];
   $VC10 = $ResuSql['DTipoObli'];	
   $VC11 = $ResuSql['DAtenTipoObli'];	
   $VC12 = $ResuSql['DAcreedor'];	
   $VC13 = $ResuSql['DFechContrat'];	
   $VC14 = $ResuSql['DMontOriContr'];
   $VC15 = $ResuSql['DPlazoTasaI'];
   $VC16 = $ResuSql['DTasaInt'];
   $VC17 = $ResuSql['DPlazoPagarDeu'];
   $VC18 = $ResuSql['DFechVenc'];
   $VC19 = $ResuSql['DRecursGarant'];	
   $VC20 = $ResuSql['DDestinoObli'];
   $VC21 = $ResuSql['DSaldo'];	
   $VC22 = $ResuSql['DHipervAutor'];	
   $VC23 = $ResuSql['DHiperListado'];	
   $VC24 = $ResuSql['DHiperContr'];
   $VC25 = $ResuSql['DHiperDoc'];
   $VC26 = $ResuSql['DInfoFinanz'];
   $VC27 = $ResuSql['DInforEnvi'];
   $VC28 = $ResuSql['DInforCuePub'];
   $VC29 = $ResuSql['DFechInscrRO'];	
   $VC30 = $ResuSql['DInforDeuPub'];
   $VC31 = $ResuSql['DInforCuePubCons'];	
   $VC32 = $ResuSql['DHipervPropu'];	
   $VC33 = $ResuSql['DAreaResp'];	
   $VC34 = $ResuSql['DNota'];
   $VC35 = $ResuSql['DConsFrac'];
   $VC36 = $ResuSql['DNumeTrim'];
   $VC37 = $ResuSql['DNumeRegi'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(DNumeRegi) IS  NULL THEN 1 ELSE  MAX(DNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9226deudapublic ".
			   "WHERE DAyuntam = '$ClavAyun' AND ".
				  "DEjercicio = $EjerTrab AND ".
				  "DConsFrac = $ConsFrac AND ".
				  "DNumeTrim = '$TrimTrab' ";
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