<?php
$RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraClien/";
include($RutaIntr.'Encabezado/EncaCook.php');
include($RutaIntr.'Conexion/ConBasCliente.php');

//********************************************************************
//Carga las variables
$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0];
$MesTrab  = $ABusqMae[1];
$EstaTrab = $ABusqMae[2];
$ConSolBu = $ABusqMae[3];

$BandMens = false;

//*****************************************************************
//Para operacion A B C
$CRUD     = $_POST['C00'];
$TipoMovi = $_POST['C01'];
$NumeBusq = $_POST['C02']; 

$NumeArti = $_POST['C04']; 
$DescArti = $_POST['C05'];
$CantArti = $_POST['C06']; 
$ClavUnid = $_POST['C07'];
$DescUnid = $_POST['C08'];
$ClavProd = $_POST['C09'];

$ImpoArti = $_POST['C10']; 

switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO sdsolideta ". 
				   "VALUES ($ConSolBu, $NumeArti, '$DescArti', $CantArti, ".
						   "'$ClavUnid','$DescUnid','$ClavProd', ".
						   "$ImpoArti, 'A') "; 
		break;
	case "PUT": //Cambio
		$InstSql = "UPDATE sdsolideta ". 
				   "SET    DNumero = $NumeArti, ".
						  "DDescri = '$DescArti',". 
						  "DCatindad = $CantArti,". 
						  "DClavUnidMedi = '$ClavUnid',".
						  "DDescUnidMedi = '$DescUnid',".
						  "DClaveProdu = '$ClavProd',".
						  "DImporte =  $ImpoArti ".
				   "WHERE  DConseSoli = $ConSolBu AND ".
						  "DNumero  = $NumeBusq ";
		break;
	case "DELETE": //Eliminar
		$InstSql = "UPDATE sdsolideta ". 
				   "SET    DEstado = 'B' ".
				   "WHERE  DConseSoli = $ConSolBu AND ".
						  "DNumero  = $NumeBusq ";
		break;	

}		

//Para las altas bajas y modificaciones
if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
  echo '<script>alert("'.$MensResp.'");</script>'; 

$PagiRegr = "SoliDetaList.php"; 
if (!$BandMens)	 
 { $PagiRegr = "location: $PagiRegr";
   header($PagiRegr); } 

?>	
