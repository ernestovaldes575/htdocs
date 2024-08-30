<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraAnfi/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraAnfi/Conexion/ConBasInvita.php');

$BandMens = false;

//*****************************************************************
$CRUD =  $_POST['C00'];
$TipoMovi = $_POST['C01'];
$ConsBusq = $_POST['C02']; 

$DescAnfi = $_POST['C03']; 
$CorrAnfi = $_POST['C04'];	//Ventana, Pagina 
$ContAnfi = $_POST['C05'];	//Ventana, Pagina 

$InstSql = "UPDATE stanfitrion ". 
		   "SET    AAnfitrion = '$DescAnfi', ".
				  "Aclave = '$CorrAnfi',". 
				  "AContra = '$ContAnfi' ". 
			"WHERE  AConsecutivo = $ConsAnfi ";
//Ejecuta la instruccion
$BandMens = true;
if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
  echo '<script>alert("'.$MensResp.'");</script>'; 

$PagiRegr = "/IntraAnfi/MenuIntranet.php";	 
$PagiRegr = "location: $PagiRegr";
header($PagiRegr); 

?>	
