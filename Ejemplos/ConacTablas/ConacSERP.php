<?php
	include("Conexion.php");
$BandMens= false;
if ( isset($_GET["Param2"]) ){	
	$TipoMovi = $_GET["Param2"];
	$ClavBusq = $_GET["Param3"]; }	

//Consulta
$InstSql =  "SELECT CTCClave, CTCDescri ".  //Modifac Campos de tabla
			" ".
			"FROM   cctipoclas ".			//Modificxar Tabla
			"WHERE  CTCClave =  '$ClavBusq' ". //Modificar campo
			"ORDER BY CTCClave ";			//Modificar campo	
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetch();

$VC03=""; 	$VC04="";				//Definir variables en base a los campos Linea 9
if ($ResuSql){
	$VC03=$ResuSql['CTCClave'];	//campos en base s la base de linea 9
	$VC04=$ResuSql[1];
}	 
else
{

   $InstSql = 	"SELECT  LPAD(MAX(CTCClave)+1,2,'0') AS NumeRegi ".  //Modifac Campos de tabla
				"FROM   cctipoclas ";			//Modificxar Tabla
				if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetch();
			$VC03=$ResuSql['NumeRegi'];
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
