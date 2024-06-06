<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Conexion/ConBasInvita.php');

$BandMens = false;

//*****************************************************************
$CRUD =  $_POST['C00'];
$TipoMovi = $_POST['C01'];
$ConsBusq = $_POST['C02']; 

$ClavRepa = $_POST['C03']; 
$DescRepa = $_POST['C04'];
$EstaRepa = $_POST['C05']; 
$CorrRepa = $_POST['C06'];	//Ventana, Pagina 
$ContRepa = $_POST['C07'];	//Ventana, Pagina 

$InstSql = "UPDATE screpartidor ". 
		   "SET    CREClave = '$ClavRepa', ".
				  "CREDescri = '$DescRepa',". 
				  "CREEstado = '$EstaRepa',". 
				  "CRECorreo = '$CorrRepa',". 
				  "CREContra = '$ContRepa' ".
			"WHERE  CREConsecut = $ConsRepa ";
//Ejecuta la instruccion
$BandMens = true;
if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
  echo '<script>alert("'.$MensResp.'");</script>'; 

$PagiRegr = "/IntraRepa/MenuIntranet.php";	 
$PagiRegr = "location: $PagiRegr";
header($PagiRegr); 

?>	
