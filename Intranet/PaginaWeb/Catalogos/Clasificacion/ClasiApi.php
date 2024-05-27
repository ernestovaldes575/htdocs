<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');

//Leer cookie
//campo de Tipo de Clas
$ArCooki1 = $_COOKIE['CBuscEnc'];
$ABuscEnc = explode("|", $ArCooki1);
$TipoClas = $ABuscEnc[0]; 
//********************************************************************
//Informacion de la Lista
//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;
//*****************************************************************
//Para operacion A B C
$CRUD 	  = $_POST['C00'];
$TipoMovi = $_POST['C01'];
$CampBusq = $_POST['C02']; 
$ClavCata = $_POST['C03'];
$DescCata = $_POST['C04'];

//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO ccclasifica ".	//Cambiar tabla
				   "VALUES ('$TipoClas','$ClavCata','$DescCata')";
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE ccclasifica ". 	//Cambiar tabla
					"SET    CCLClave = '$ClavCata', ". //Cambiar campo
							"CCLDescripcion = '$DescCata' ".  //Cambiar campo
							"CCLTipoDocu = '$DocuCata' ".  //Cambiar campo
					"WHERE CCTipoClas = '$TipoClas' AND "
						  "CCLClave = '$CampBusq'  ";  //Cambiar campo
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM ccclasifica ". //Cambiar tabla
				   "WHERE CCTipoClas = '$TipoClas' AND "
						  "CCLClave = '$CampBusq'  "; //Cambiar campo
	break;	
}		

//Ejecuta la instruccion
if ($BandMens)  echo '1)'.$InstSql.'<br>';
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();
$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
	echo '<script>alert("'.$MensResp.'");</script>'; 
//Cambiar archivo
$PagiRegr = "location: ClasiList.php";
header($PagiRegr);	
?>