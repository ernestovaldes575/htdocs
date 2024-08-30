<?php
$RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraClien/";
include($RutaIntr.'Encabezado/EncaCook.php');
include($RutaIntr.'Conexion/ConBasCliente.php');

$BandMens = true;

//*****************************************************************
$CRUD =  $_POST['C00'];
$TipoMovi = $_POST['C01'];
$ConsBusq = $_POST['C02']; 

$NumeFoli = $_POST['C03']; 
$NombRazo = $_POST['C04'];
$RFCInvit = $_POST['C05']; 
$CURPInvi = $_POST['C06']; 
$CallInvi = $_POST['C07']; 	//Imagen, PDF o Liga
$NumeInvi = $_POST['C08']; 
$ColoInvi = $_POST['C09'];	//Ventana, Pagina 
$DeleInvi = $_POST['C10'];	//Ventana, Pagina 
$CoPoInvi = $_POST['C11'];	//Ventana, Pagina 
$MuniInvi = $_POST['C12'];	//Ventana, Pagina 
$EstaInvi = $_POST['C13'];	//Ventana, Pagina 

$CorrInvi = $_POST['C14'];	//Ventana, Pagina 
$ContInvi = $_POST['C15'];	//Ventana, Pagina 

$InstSql = "UPDATE STCliente ". 
		   "SET    CNumeFoli = '$NumeFoli', ".
				  "CNombRazon = '$NombRazo',". 
				  "CRFC = '$RFCInvit',". 
				  "CCURP = '$CURPInvi',". 
				  "CCalle = '$CallInvi',".  
				  "CNumero = '$NumeInvi',". 
				  "CColonia = '$ColoInvi',". 
				  "CDelegacion = '$DeleInvi',". 
				  "CCodiPost= '$CoPoInvi',". 
				  "CMunicipio = '$MuniInvi',". 
				  "CNombEsta= '$EstaInvi',". 
				  "CCorreo= '$CorrInvi',". 
				  "CContra = '$ContInvi' ".
		   "WHERE CConsecutivo = $ConsClie ";

		   //Ejecuta la instruccion
$BandMens = true;
if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
  echo '<script>alert("'.$MensResp.'");</script>'; 

$PagiRegr = "/IntraClien/MenuIntranet.php";
$PagiRegr = "location: $PagiRegr";
header($PagiRegr); 

?>	
