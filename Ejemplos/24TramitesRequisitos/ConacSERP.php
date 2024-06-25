<?php
 include("Conexion.php");
$BandMens= false;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	

//Consulta
$InstSql =  "SELECT RPConsecutivo, RPAyuntam, RPejercicio, RPFechInicio, RPFechTerm, RPTipoRec, RPTipoReOtro, RPDescr, RPMotivo, RPFechEntr, RPDenom, RPHipervOfic, RPHipervInf, RPHipervProg, RPHipervDonat, RPAreaResp, RPNota".  //Modifac Campos de tabla
				    " ".
			"FROM   tt9220brecurspublic ".			//Modificxar Tabla
			"WHERE  RPConsecutivo =  '$ClavBusq' ". //Modificar campo
			"ORDER BY RPConsecutivo ";			//Modificar campo	
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetchall();

$VC03=""; 	$VC04="105";	$VC05="2024";	$VC06="";	$VC07="";	$VC08="";	$VC09="";	$VC10="";	$VC11="";		$VC12="";		$VC13="";	$VC14="";	$VC15="";	$VC16="";$VC17="";	 $VC18="";		 $VC19="";//Definir variables en base a los campos Linea 9
foreach ($ResuSql as $RegiTabl):
	$VC03=$RegiTabl['RPConsecutivo'];	//campos en base s la base de linea 9
	$VC04="105"; 
	$VC05="2024";
	$VC06=$RegiTabl['RPFechInicio'];
	$VC07=$RegiTabl['RPFechTerm'];
	$VC08=$RegiTabl['RPTipoRec'];
	$VC09=$RegiTabl['RPTipoReOtro'];
	$VC10=$RegiTabl['RPDescr'];
	$VC11=$RegiTabl['RPMotivo'];
	$VC12=$RegiTabl['RPFechEntr'];
	$VC13=$RegiTabl['RPDenom'];
	$VC14=$RegiTabl['RPHipervOfic'];
	$VC15=$RegiTabl['RPHipervInf'];
	$VC16=$RegiTabl['RPHipervProg'];
	$VC17=$RegiTabl['RPHipervDonat'];
	$VC18=$RegiTabl['RPAreaResp'];
	$VC19=$RegiTabl['RPNota'];
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
