<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Conexion/ConBasInvita.php');

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;


switch ( $CRUD )
{ 	case "GET": 
	    /*`IConsecutivo`, `INumeFoli`, `INombRazon`, `IRFC`, `ICURP`, `ICalle`, `INumero`, `IColonia`, `IDelegacion`, `ICodiPost`, `IMunicipio`, `INombEsta`, `ICorreo`, `IContra`, `IAnfitrion`, `IFechAlta`, `iEstado` 
		*/
		$VC03 = ""; //Nombre
		$VC04 = ""; //RFC
		$VC05 = ""; //ICURP
		$VC06 = ""; //ICalle
		$VC07 = ""; //INumero
		$VC08 = ""; //IColonia
		$VC09 = ""; //IDelegacion
		$VC10 = ""; //ICodiPost
		$VC11 = ""; //IMunicipio
		$VC12 = ""; //INombEsta
		$VC13 = ""; //ICorreo
		$VC14 = ""; //IContra


		break;
}		

?>	
