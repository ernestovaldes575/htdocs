<?php
 include("Conexion.php");
$BandMens= true;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	
 
//Consulta
//$ClavAyun = "105";
//$EjerTrab = 2024;



$InstSql =  "SELECT  AConsecutivo, AFechaInicio, AFechaTermino, AArea, ADenominacion,". 
            "AFundamento,AHipervinculo,AAreaResp, ANota ".   //modificar
					
			"FROM   art92_iii ".			//Modificxar Tabla
			//"WHERE  AAyuntamiento = '$ClavAyun' AND ".
			       //"AEjercicio = $EjerTrab AND ". 
				   //"AConsecutivo = $ClavBusq "; 		//Modificar campo	
			"ORDER BY AConsecutivo";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03=""; 	$VC04="105";	$VC05="2024";   $VC06="";	$VC07="";    $VC08="";   $VC09="";		$VC10=""; $VC11="";   $VC12="";       $VC13="";          	   	//Definir variables en base a los campos Linea 9
if ($ResuSql)
 {	$VC03=$ResuSql['AConsecutivo'];	//campos en base s la base de linea 9
	$VC04="105";
	$VC05="2024";
	$VC06=$ResuSql['AFechaInicio']; 
	$VC07=$ResuSql['AFechaTermino']; 
	$VC08=$ResuSql['AArea']; 
	$VC09=$ResuSql['ADenominacion']; 
	$VC10=$ResuSql['AFundamento']; 
	$VC11=$ResuSql['AHipervinculo']; 
	$VC12=$ResuSql['AAreaResp']; 
	$VC13=$ResuSql['ANota']; 
	
	
	
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
