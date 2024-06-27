<?php
 include("Conexion.php");
$BandMens= false;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	

//Consulta
$InstSql =  "SELECT RSConsecutivo, RSAyuntam, RSEjercicio, RSFechInicio, RSFechTerm, RSFechSoli, RSFolioSoli, RSInfoReq, RSRespuesta, RSRecurrida, RSRecurrOtro, RSDocs, RSTipoSoli, RSTipoSoliOtro, RSAreaResp, RSNota".  //Modifac Campos de tabla
				    " ".
			"FROM    tt9217regisolic  ".			//Modificxar Tabla
			"WHERE  RSConsecutivo =  '$ClavBusq' ". //Modificar campo
			"ORDER BY RSConsecutivo ";			//Modificar campo	
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetchall();

$VC03=""; 	$VC04="105";	$VC05="2024";	$VC06="";	$VC07="";	$VC08="";	$VC09="";	$VC10="";	$VC11="";	$VC12="";		$VC13="";		$VC14="";	$VC15="";	$VC16="";	$VC17="";	$VC18="";//Definir variables en base a los campos Linea 9
foreach ($ResuSql as $RegiTabl):
	$VC03=$RegiTabl['RSConsecutivo'];	//campos en base s la base de linea 9
	$VC04="105"; 
	$VC05="2024";
	$VC06=$RegiTabl['RSFechInicio'];
	$VC07=$RegiTabl['RSFechTerm'];
	$VC08=$RegiTabl['RSFechSoli'];
	$VC09=$RegiTabl['RSFolioSoli'];
	$VC10=$RegiTabl['RSInfoReq'];
	$VC11=$RegiTabl['RSRespuesta'];
	$VC12=$RegiTabl['RSRecurrida'];
	$VC13=$RegiTabl['RSRecurrOtro'];
	$VC14=$RegiTabl['RSDocs'];
	$VC15=$RegiTabl['RSTipoSoli'];
	$VC16=$RegiTabl['RSTipoSoliOtro'];
	$VC17=$RegiTabl['RSAreaResp'];
	$VC18=$RegiTabl['RSNota'];
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
