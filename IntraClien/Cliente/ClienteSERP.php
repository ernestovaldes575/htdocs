<?php

include( $RutaIntr.'Encabezado/EncaCook.php');
include( $RutaIntr.'Conexion/ConBasCliente.php');

$BandMens = false;

//Carga el registro para ABC	
if( isset($_GET['PaAMB01']) != ''){	
	$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
	$ConsBusq = $_GET["PaAMB02"];	#Consecutivo de busqueda
}

$InstSql =  "SELECT  CNumeFoli, CNombRazon, ". 
					"CRFC, CCURP, ".
					"CCalle, CNumero, CColonia, CDelegacion, CCodiPost,". 
					"CMunicipio, CNombEsta, CCorreo, CContra ".
			"FROM  STCliente ".
			"WHERE CConsecutivo = $ConsClie ";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

//Valores de la tabla
$VC03 = "1";  $VC04 = ""; 
$VC05 = "";  $VC06 = ""; $VC07 = "";
$VC08 = ""; $VC09 = ""; $VC10 = ""; 
$VC11 = ""; $VC12 = ""; $VC13 = "";
$VC14 = ""; $VC15 = "";

if ($ResuSql)
  { $VC03 = $ResuSql['CNumeFoli'];	
	$VC04 = $ResuSql['CNombRazon'];	

	$VC05 = $ResuSql['CRFC'];	//LFechPublI
	$VC06 = $ResuSql['CCURP'];	//LFechPublF
				
	$VC07 = $ResuSql['CCalle'];	//LAbrirLiDoIm
	$VC08 = $ResuSql['CNumero'];	//LLiga
	$VC09 = $ResuSql['CColonia'];	//LVentRefe
	$VC10 = $ResuSql['CDelegacion'];	//LImagen

	$VC11 = $ResuSql['CCodiPost'];	//LAImagDocu
	$VC12 = $ResuSql['CMunicipio'];	//LAImagDocu
	$VC13 = $ResuSql['CNombEsta'];	//LAImagDocu
	$VC14 = $ResuSql['CCorreo'];	//LAImagDocu
	$VC15 = $ResuSql['CContra'];	//LAImagDocu
  }

?>	
