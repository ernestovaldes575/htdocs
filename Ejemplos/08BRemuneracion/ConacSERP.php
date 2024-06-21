<?php
 include("Conexion.php");
$BandMens= false;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	

//Consulta
$InstSql =  "SELECT RConsecutivo, RAyuntam, REjercicio, RFechInicio, RFechTerm, RTipoInte, RTipoInteOtro, RClave, RDenomPuest, RDenomCarg, RAreaAds, RNombre, RPrimerApell, RSegunApell, RSexo, RSexoOtro,  RRemunBruta, RTipoMoneBrut, RRemunNeta, RTipoMoneNet, RPercepDinero, RPercepEspec, RIngresos, RCompensa, RGratifica, RPrimas, RComision, RDietas, RBonos, REstimulo, RApoyoEcon, RPrestaEcon, RPrestaEspecie,RAreaResp, RNota".  //Modifac Campos de tabla
				    " ".
			"FROM   tt9208bremun ".			//Modificxar Tabla
			"WHERE  RConsecutivo =  '$ClavBusq' ". //Modificar campo
			"ORDER BY RConsecutivo ";			//Modificar campo	
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetchall();

$VC03=""; 	$VC04="105";	$VC05="2024";	$VC06="";	$VC07="";	$VC08="";	$VC09="";	$VC10="";	$VC11="";	$VC12="";	$VC13="";	$VC14="";
$VC15="";	$VC16="";	$VC17="";	$VC18="";
$VC19="";	$VC20="";	$VC21="";	$VC22="";
$VC23="";	$VC24="";	$VC25="";	$VC26="";
$VC27="";	$VC28="";	$VC29="";	$VC30="";
$VC31="";	$VC32="";	$VC33="";	$VC34="";
$VC35="";	$VC36="";	$VC37="";	
//Definir variables en base a los campos Linea 9
foreach ($ResuSql as $RegiTabl):
	$VC03=$RegiTabl['RConsecutivo'];	//campos en base s la base de linea 9
	$VC04="105"; 
	$VC05="2024";
	$VC06=$RegiTabl['RFechInicio'];
	$VC07=$RegiTabl['RFechTerm'];
	$VC08=$RegiTabl['RTipoInte'];
	$VC09=$RegiTabl['RTipoInteOtro'];
	$VC10=$RegiTabl['RClave'];
	$VC11=$RegiTabl['RDenomPuest'];
	$VC12=$RegiTabl['RDenomCarg'];
	$VC13=$RegiTabl['RAreaAds'];
	$VC14=$RegiTabl['RNombre'];
	$VC15=$RegiTabl['RPrimerApell'];
	$VC16=$RegiTabl['RSegunApell'];
	$VC17=$RegiTabl['RSexo'];
	$VC18=$RegiTabl['RSexoOtro'];
	$VC19=$RegiTabl['RRemunBruta'];
	$VC20=$RegiTabl['RTipoMoneBrut'];
	$VC21=$RegiTabl['RRemunNeta'];
	$VC22=$RegiTabl['RTipoMoneNet'];
	$VC23=$RegiTabl['RPercepDinero'];
	$VC24=$RegiTabl['RPercepEspec'];
	$VC25=$RegiTabl['RIngresos'];
	$VC26=$RegiTabl['RCompensa'];
	$VC27=$RegiTabl['RGratifica'];
	$VC28=$RegiTabl['RPrimas'];
	$VC29=$RegiTabl['RComision'];
	$VC30=$RegiTabl['RDietas'];
	$VC31=$RegiTabl['RBonos'];
	$VC32=$RegiTabl['REstimulo'];
	$VC33=$RegiTabl['RApoyoEcon'];
	$VC34=$RegiTabl['RPrestaEcon'];
	$VC35=$RegiTabl['RPrestaEspecie'];
	$VC36=$RegiTabl['RAreaResp'];
	$VC37=$RegiTabl['RNota'];

endforeach;	
	
$DescTiMo = "";
switch( $TipoMovi)
{ case "A": $DescTiMo = "Alta";
 			break;
 case "M":  $DescTiMo = "Modificar";
 			break;
 case "B":  $DescTiMo = "Baja";
 			break;
}
?>	
