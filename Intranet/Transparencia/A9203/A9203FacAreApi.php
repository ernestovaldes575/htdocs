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

switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO pcestapagi ".
				   "VALUES ('$ClavCata','$DescCata')";
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE pcestapagi ". 
					"SET    CEPClave = '$ClavCata', ".
							"CEPDescri = '$DescCata' ". 
					"WHERE CEPClave = '$CampBusq'  ";
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM pcestapagi ". 
				   "WHERE CEPClave = '$CampBusq'  ";
	break;	
}		

//Ejecuta la instruccion
if ($BandMens)  echo '1)'.$InstSql.'<br>';
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();
$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
	echo '<script>alert("'.$MensResp.'");</script>'; 

$PagiRegr = "location: EstaPagiList.php";
header($PagiRegr);	
?>