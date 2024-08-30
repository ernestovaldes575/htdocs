<?php
include($RutaIntr.'Encabezado/EncaCook.php');
include($RutaIntr.'Conexion/ConBasAgente.php');

$ArCooki1 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCooki1);
$ConsBrok = $ABusqMae[0];
$DescBrok = $ABusqMae[1];

if ( isset($_GET["PaCRUD01"]) ){
	$TipoMovi = $_GET["PaCRUD01"];
	$ConsMovi = $_GET["PaCRUD02"];
}

$InstSql = "SELECT CNumeFoli, CNombRazon, CRFC, CCURP, ". 
				  "CCalle, CNumero, CColonia, CDelegacion, CCodiPost,". 
				  "CMunicipio, CNombEsta, CCorreo, CContra,CPorcBrok ".
		   "FROM stcliente ".
		   "WHERE CConsecutivo = $ConsMovi AND ". 
		   		"CBroker = $ConsBrok "; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

	
//Valores de la tabla
$VC04 = ""; 
$VC05 = "";  $VC06 = ""; $VC07 = "";
$VC08 = ""; $VC09 = ""; $VC10 = ""; 
$VC11 = ""; $VC12 = ""; $VC13 = "";
$VC14 = ""; $VC15 = "";	
$VC03 = 1;  	
if ($ResuSql)
 {  $VC03 = $ResuSql['CNumeFoli'];
	$VC04 = $ResuSql['CNombRazon'];	 
	$VC05 = $ResuSql['CRFC'];  
	$VC06 = $ResuSql['CCURP']; 
	$VC07 = $ResuSql['CCalle'];
	$VC08 = $ResuSql['CNumero']; 
	$VC09 = $ResuSql['CColonia']; 
	$VC10 = $ResuSql['CDelegacion']; 
	$VC11 = $ResuSql['CCodiPost']; 
	$VC12 = $ResuSql['CMunicipio']; 
	$VC13 = $ResuSql['CNombEsta'];
	$VC14 = $ResuSql['CCorreo'];
	$VC15 = $ResuSql['CContra'];

 }
else
 { $InstSql = "SELECT CASE WHEN MAX(CNumeFoli) IS NULL ". 
				  	 "THEN 1 ". 
				  	 "ELSE MAX(CNumeFoli)+1 END AS NumeRegi ". 
			   "FROM  stcliente ". 
			   "WHERE CBroker = $ConsBrok AND ". 
				 	 "CEstado = 'A'"; 
	$EjInSql = $ConeBase->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();

	$VC03 = 1;  	
	if ($ResuSql)
	$VC03 = $ResuSql['NumeRegi'];	
  }	

$CRUD = "GET";
switch( $TipoMovi ){
	case "A":	$MesnTiMo = "Registrar";  
				$CRUD = "POST";         break;
	case "M":	$MesnTiMo = "Actualizar"; 
				$CRUD = "PUT";		  break;
	case "B":	$MesnTiMo = "Eliminar";
				$CRUD = "DELETE";		  break;
}  
?>