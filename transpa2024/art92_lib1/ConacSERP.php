<?php
 include("Conexion.php");
$BandMens= false;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	
 
//Consulta
$ClavAyun = "105";
$EjerTrab = 2024;

$InstSql =  "SELECT  AEjercicio, AFechaInicio, AFechaTermino, AArea ".  //Modifac Campos de tabla
				    "AFechaActualizacion, AFechaValidacion ".		
		        "FROM   art92_lib ".			//Modificxar Tabla
		        "WHERE  AAyuntamiento = '$ClavAyun' AND ".
			        "AEjercicio = $EjerTrab AND ". 
				    "AConsecutivo = $ClavBusq "; 	//Modificar campo	

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03=""; 	$VC04="";	$VC05="";   $VC06="";	
$VC07="";   $VC08="";   $VC09="";   $VC10="";                	   	//Definir variables en base a los campos Linea 9
if ($ResuSql)
 {	$VC03=$ResuSql['AEjercicio'];	//campos en base s la base de linea 9
	$VC04="105";
	$VC05="2024";
	$VC06=$ResuSql['AFechaInicio']; 
	$VC07=$ResuSql['AFechaTermino']; 
	$VC08=$ResuSql['AAArea']; 
	$VC09=$ResuSql['AAFechaActualizacion']; 
	$VC10=$ResuSql['AFechaValidacion']; 
	
	
	
	
	
	
	
	
	
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
