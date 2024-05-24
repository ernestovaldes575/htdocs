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
$CRUD 	  = $_POST['C00'];
$TipoMovi = $_POST['C01'];
$CampBusq = $_POST['C02']; 
$ClavCata = $_POST['C03'];
$DescCata = $_POST['C04'];
//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO cctipoclas ".	//Cambiar tabla
				   "VALUES ('$ClavCata','$DescCata')";
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE cctipoclas ". 	//Cambiar tabla
					"SET    CTCClave = '$ClavCata', ". //Cambiar campo
							"CTCDescri = '$DescCata' ".  //Cambiar campo
					"WHERE CTCClave = '$CampBusq'  ";  //Cambiar campo
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM cctipoclas ". //Cambiar tabla
				   "WHERE CTCClave = '$CampBusq'  "; //Cambiar campo
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
$PagiRegr = "location: EstaPagiList.php";
header($PagiRegr);	
?>