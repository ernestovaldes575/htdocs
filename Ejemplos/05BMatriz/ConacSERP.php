<?php
 include("Conexion.php");
$BandMens= false;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	

//Consulta
$InstSql =  "SELECT MConsecutivo, MAyuntam, MEjercicio, MFechInicio, MFechTerm, MHipervin, MAreaResp, MFechAct, MFechValid, MNota".  //Modifac Campos de tabla
				    " ".
			"FROM   tt9205bmatriz ".			//Modificxar Tabla
			"WHERE  MConsecutivo =  '$ClavBusq' ". //Modificar campo
			"ORDER BY MConsecutivo ";			//Modificar campo	
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetchall();

$VC03=""; 	$VC04="";	$VC05="";	$VC06="";	$VC07="";	$VC08="";	$VC09="";	$VC10="";	$VC11="";	$VC12="";	//Definir variables en base a los campos Linea 9
foreach ($ResuSql as $RegiTabl):
	$VC03=$RegiTabl['MConsecutivo'];	//campos en base s la base de linea 9
	$VC04=$RegiTabl['MAyuntam']; 
	$VC05=$RegiTabl['MEjercicio'];
	$VC06=$RegiTabl['MFechInicio'];
	$VC07=$RegiTabl['MFechTerm'];
	$VC08=$RegiTabl['MHipervin'];
	$VC09=$RegiTabl['MAreaResp'];
	$VC10=$RegiTabl['MFechAct'];
	$VC11=$RegiTabl['MFechValid'];
	$VC12=$RegiTabl['MNota'];
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
