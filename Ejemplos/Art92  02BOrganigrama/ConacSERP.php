<?php
 include("Conexion.php");
$BandMens= false;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	

//Consulta
$InstSql =  "SELECT OConsecutivo, OFechInicio, OHipervin ".  //Modifac Campos de tabla
				    " ".
			"FROM   tt9202borgan ".			//Modificxar Tabla
			"WHERE  OConsecutivo =  '$ClavBusq' ". //Modificar campo
			"ORDER BY OConsecutivo ";			//Modificar campo	
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetchall();

$VC03=""; 	$VC04="";	$VC05="";			//Definir variables en base a los campos Linea 9
foreach ($ResuSql as $RegiTabl):
	$VC03=$RegiTabl['OConsecutivo'];	//campos en base s la base de linea 9
	$VC04=$RegiTabl['OFechInicio']; 
	$VC05=$RegiTabl['OHipervin'];
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
