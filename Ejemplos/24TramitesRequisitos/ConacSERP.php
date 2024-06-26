<?php
 include("Conexion.php");
$BandMens= false;
if ( isset($_GET["Param2"]) ){	
  $TipoMovi = $_GET["Param2"];
  $ClavBusq = $_GET["Param3"]; }	

//Consulta
$InstSql =  "SELECT TRConsecutivo, TRAyuntam, TREjercicio, TRFechInicio, TRFechTerm, TRDenom, TRTipoUsu, TRDesc, TRModalidad, TRHipervRequ, TRDocReque, TRHipervForm, TRTiempoRes, TRVigencia, TRAreaContact, TRCosto, TRSustento, TRLugarPago, TRFundJuri, TRDerech, TRLugarRepor, TROtros, TRHipervInf, TRHipervSist, TRAreaResp, TRNota".  //Modifac Campos de tabla
				    " ".
			"FROM   tt9224tramreq  ".			//Modificxar Tabla
			"WHERE  TRConsecutivo =  '$ClavBusq' ". //Modificar campo
			"ORDER BY TRConsecutivo ";			//Modificar campo	
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetchall();

$VC03=""; 	$VC04="105";	$VC05="2024";	$VC06="";	$VC07="";	$VC08="";	$VC09="";	$VC10="";	$VC11="";	$VC12="";		$VC13="";		$VC14="";	$VC15="";	$VC16="";	$VC17="";	$VC18="";		 $VC19="";	 $VC20="";		 $VC21="";		 $VC22="";	 $VC23="";	 $VC24="";	 $VC25="";	 $VC26="";$VC27="";	  $VC28="";//Definir variables en base a los campos Linea 9
foreach ($ResuSql as $RegiTabl):
	$VC03=$RegiTabl['TRConsecutivo'];	//campos en base s la base de linea 9
	$VC04="105"; 
	$VC05="2024";
	$VC06=$RegiTabl['TRFechInicio'];
	$VC07=$RegiTabl['TRFechTerm'];
	$VC08=$RegiTabl['TRDenom'];
	$VC09=$RegiTabl['TRTipoUsu'];
	$VC10=$RegiTabl['TRDesc'];
	$VC11=$RegiTabl['TRModalidad'];
	$VC12=$RegiTabl['TRHipervRequ'];
	$VC13=$RegiTabl['TRDocReque'];
	$VC14=$RegiTabl['TRHipervForm'];
	$VC15=$RegiTabl['TRTiempoRes'];
	$VC16=$RegiTabl['TRVigencia'];
	$VC17=$RegiTabl['TRAreaContact'];
	$VC18=$RegiTabl['TRCosto'];
	$VC19=$RegiTabl['TRSustento'];
	$VC20=$RegiTabl['TRLugarPago'];
	$VC21=$RegiTabl['TRFundJuri'];
	$VC22=$RegiTabl['TRDerech'];
	$VC23=$RegiTabl['TRLugarRepor'];
	$VC24=$RegiTabl['TROtros'];
	$VC25=$RegiTabl['TRHipervInf'];
	$VC26=$RegiTabl['TRHipervSist'];
	$VC27=$RegiTabl['RPAreaResp'];
	$VC28=$RegiTabl['RPNota'];
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
