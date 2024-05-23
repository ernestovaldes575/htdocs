<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$ConsFrac = $ABusqMae[1];
$TrimTrab = $ABusqMae[2];
$NumeFrac = $ABusqMae[3];
$NumeInci = $ABusqMae[4];
$NumeSubi = $ABusqMae[5];
$Nomativi = $ABusqMae[6];

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
$VC03 = $_POST['C03'];
$VC04 = $_POST['C04'];
$VC05 = $_POST['C05'];
$VC06 = $_POST['C06'];
$VC07 = $_POST['C07'];
$VC08 = $_POST['C08'];
$VC09 = $_POST['C09'];
$VC10 = $_POST['C10'];
$VC11 = $_POST['C11'];

/*
`AConsecutivo`, `AAyuntamiento`, `AEjercicio`, `AConsFrac`, `ANumeTrim`, `ANumeRegi`, `AFechaInicio`, `AFechaTermino`, `AArea`, `ADenominacion`, `AFunadamento`, `AHipervinculo`, `AAreaRespon`, `ANota`
*/
//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO tt9203facare ".	//Cambiar tabla
				   "VALUES ('$ClavAyun',$EjerTrab,$ConsFrac,'$TrimTrab'".
						    "$VC03,$VC04,$VC05,$VC06,'$VC07',".
							"'$VC08','$VC09',$VC10,'$VC11')";
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE pcestapagi ". 	//Cambiar tabla
					"SET    CEPClave = '$ClavCata', ". //Cambiar campo
							"CEPDescri = '$DescCata' ".  //Cambiar campo
					"WHERE CEPClave = '$CampBusq'  ";  //Cambiar campo
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM pcestapagi ". //Cambiar tabla
				   "WHERE CEPClave = '$CampBusq'  "; //Cambiar campo
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
$PagiRegr = "location: InformaList.php";
header($PagiRegr);	
?>