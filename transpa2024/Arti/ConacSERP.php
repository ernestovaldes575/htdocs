<?php
 include("Conexion.php");
$BandMens= false;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	
 
//Consulta
$ClavAyun = "105";
$EjerTrab = 2024;

$InstSql =  "SELECT  AFechaInicio,AFechaTermino,AArea ".  //Modifac Campos de tabla
				    "ADenominacion, AFundamento, AHipervinculo ".
					"AAreaResp,ANota ".
			"FROM   art92_iii ".			//Modificxar Tabla
			"WHERE  AAyuntamiento = '$ClavAyun' AND ".
			       "AEjercicio = $EjerTrab AND ". 
				   "AConsecutivo = $ClavBusq "; 		//Modificar campo	
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03=""; 	$VC04="";	$VC05="";   $VC06="";	
$VC07="";   $VC08="";	$VC09="";	$VC10="";		   	//Definir variables en base a los campos Linea 9
if ($ResuSql)
 {	$VC03=$ResuSql['AFechaInicio'];	//campos en base s la base de linea 9
	$VC04=$ResuSql['AFechaTermino'];
	$VC05=$ResuSql['AArea']; 
	$VC06=$ResuSql['ADenominacion']; 
	$VC07=$ResuSql['AFundamento']; 
	$VC08=$ResuSql['AHipervinculo'];  
	$VC09=$ResuSql['AAreaResp'];  
	$VC10=$ResuSql['ANota'];  

	
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
