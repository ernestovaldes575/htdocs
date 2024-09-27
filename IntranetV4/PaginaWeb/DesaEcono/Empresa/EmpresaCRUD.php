<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//*****************************************************************
//Para operacion A B C
if ( isset($_POST['C00']) ) 
 {  $CRUD =  $_POST['C00'];
	$TipoMovi = $_POST['C01'];
	$ConsBusq = $_POST['C02']; 

	$NombEmpr = $_POST['C03']; 
	$Represen = $_POST['C04'];
	$DatoCont = $_POST['C05']; 
	$TeleCont = $_POST['C06']; 
	$HoraAten = $_POST['C07']; 
	$CorrAcce = $_POST['C08']; 
	$ContAcce = $_POST['C09']; 
 }	

switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO etempresa ". 
					   "VALUES (Null,'".$ClavAyun."',". 
							  "'" .$NombEmpr. "', '".$Represen."', ". 
							  "'" .$DatoCont. "', '".$TeleCont."', '".$HoraAten."', ".
							  "'" .$CorrAcce. "', '".$ContAcce."', ". 
							  "'" .$ConsUsua. "', date(now()),'A') ";
		break;
	case "PUT":  #Modificacion
			$InstSql = "UPDATE etempresa ". 
					   "SET EEmpresa = '".$NombEmpr."', ".
							"ERespresentante = '".$Represen."', ".
							"EContacto = '".$DatoCont."', ".
							"ETeleCont = '".$TeleCont."', ".
							"EHoraAten = '".$HoraAten."', ". 
							"ECorreo = '".$CorrAcce."', ".
							"EContra = '".$ContAcce."' ".
						"WHERE EAyuntamiento = '".$ClavAyun."' AND ".
							  "EConsecut = ".$ConsBusq." ";
		break;
	case "DELETE": #Baja
			$InstSql = "UPDATE etempresa ". 
						"SET   EEstado = 'B' ".
						"WHERE EAyuntamiento = '".$EAyuntamiento."' AND ".
							  "EConsecut = ".$ConsBusq." ";
		break;	

}		

//Ejecuta la instruccion
if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
  echo '<script>alert("'.$MensResp.'");</script>'; 

$PagiRegr = "EmpresaLista.php";
if (!$BandMens)	 
  { $PagiRegr = "location: $PagiRegr";
    header($PagiRegr); } 
?>	
