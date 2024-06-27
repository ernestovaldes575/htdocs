<?php
 include("Conexion.php");
$BandMens= true;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	
 
//Consulta
//$ClavAyun = "105";
//$EjerTrab = 2024;



$InstSql =  "SELECT  AConsecutivo, AFechaInicio, AFechaTermino, ANombrePrograma, AObjetivo,". "ANombreIndicador, ADimensionesAMedir, ADefinicionIndicador, AMetodoCalculo, AUnidadMedida,". "AFrecuenciaMedicion, ALineaBase, AMetasProgramadas, AMetasAjustadas, AAvance, ASentidoIndicador, "."ASentidoIndicadorOtro, AFuenteInformacion, AAreaResp, ANota ".
					
			"FROM   art92_via ".			//Modificxar Tabla
			//"WHERE  AAyuntamiento = '$ClavAyun' AND ".
			       //"AEjercicio = $EjerTrab AND ". 
				   //"AConsecutivo = $ClavBusq "; 		//Modificar campo	
			"ORDER BY AConsecutivo";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03=""; 	$VC04="105";	$VC05="2024";   $VC06="";	$VC07="";   $VC08="";	$VC09="";   	$VC10="";   $VC11="";       $VC12="";		$VC13="";   $VC14="";   $VC15="";   $VC16="";	
$VC17="";   $VC18="";       $VC19="";       $VC20="";	$VC21="";   $VC22="";   $VC23="";   $VC24="";  	   	//Definir variables en base a los campos Linea 9
if ($ResuSql)
 {	$VC03=$ResuSql['AConsecutivo'];	//campos en base s la base de linea 9
	$VC04="105";
	$VC05="2024";
	$VC06=$ResuSql['AFechaInicio']; 
	$VC07=$ResuSql['AFechaTermino']; 
	$VC08=$ResuSql['ANombrePrograma']; 
	$VC09=$ResuSql['AObjetivo']; 
	$VC10=$ResuSql['ANombreIndicador']; 
	$VC11=$ResuSql['ADimensionesAMedir']; 
	$VC12=$ResuSql['ADefinicionIndicador']; 
	$VC13=$ResuSql['AMetodoCalculo']; 
	$VC14=$ResuSql['AUnidadMedida']; 
	$VC15=$ResuSql['AFrecuenciaMedicion']; 
	$VC16=$ResuSql['ALineaBase']; 
	$VC17=$ResuSql['AMetasProgramadas']; 
	$VC18=$ResuSql['AMetasAjustadas']; 
	$VC19=$ResuSql['AAvance']; 
	$VC20=$ResuSql['ASentidoIndicador']; 
	$VC21=$ResuSql['ASentidoIndicadorOtro']; 
	$VC22=$ResuSql['AFuenteInformacion']; 
	$VC23=$ResuSql['AAreaResp']; 
	$VC24=$ResuSql['ANota']; 
	
	
 }	
	
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
