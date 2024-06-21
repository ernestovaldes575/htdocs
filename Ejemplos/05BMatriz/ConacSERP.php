<?php
 include("Conexion.php");
$BandMens= false;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	

//Consulta
$InstSql =  "SELECT TConsecutivo, TAyuntam, TEjercicio, TFechInicio, TFechTerm, TTotPlazBas, TTotPBOcup, TTotPBVacan, TTotPlazConf, TTotPCOcup, TTotPCVacan, TAreaResp, TFechAct, TFechValid, TNota".  //Modifac Campos de tabla
				    " ".
			"FROM    tt9210btotalplazvac ".			//Modificxar Tabla
			"WHERE  TConsecutivo =  '$ClavBusq' ". //Modificar campo
			"ORDER BY TConsecutivo ";			//Modificar campo	
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetchall();

$VC03=""; 	$VC04="105";	$VC05="2024";	$VC06="";	$VC07="";	$VC08="";	$VC09="";	$VC10="";	$VC11="";	$VC12="";	$VC13="";
$VC14="";	$VC15="";	$VC16="";	$VC17="";//Definir variables en base a los campos Linea 9
foreach ($ResuSql as $RegiTabl):
	$VC03=$RegiTabl['TConsecutivo'];	//campos en base s la base de linea 9
	$VC04="105"; 
	$VC05="2024";
	$VC06=$RegiTabl['TFechInicio'];
	$VC07=$RegiTabl['TFechTerm'];
	$VC08=$RegiTabl['TTotPlazBas'];
	$VC09=$RegiTabl['TTotPBOcup'];
	$VC10=$RegiTabl['TTotPBVacan'];
	$VC11=$RegiTabl['TTotPlazConf'];
	$VC12=$RegiTabl['TTotPCOcup'];
	$VC13=$RegiTabl['TTotPCVacan'];
	$VC14=$RegiTabl['TAreaResp'];
	$VC15=$RegiTabl['TFechAct'];
	$VC16=$RegiTabl['TFechValid'];
	$VC17=$RegiTabl['TNota'];
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
