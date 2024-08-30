<?php
		//Carga las variables
	$ArCooki1 = $_COOKIE['CMenu'];
	$AMenu = explode("|", $ArCooki1);
	$ClavMenu = $AMenu[0];  
	$DescMenu = $AMenu[1];  
	$BaseDato = $AMenu[2]; 
	$TablBaDa = $AMenu[3];

	$TituArch = $AMenu[4];
	$RutaArch = $AMenu[5];

	$ArchList = $AMenu[6];
	$ArcRegLi = $AMenu[7];
	$ArcSigLi = $AMenu[8];

	$ArchMovi = $AMenu[9];
	$ArcRegMo = $AMenu[10];
	$ArcSigMo = $AMenu[11];

	
	$RutaEnca = $_SERVER['DOCUMENT_ROOT'].'/Intranet/'; 
	include($RutaEnca.'Archivos/Conexiones/conteinf.php');
		//Borrar datos de la tabla
	$sql = "DELETE FROM ptinstru WHERE INombre = '".$TablBaDa."' AND ITipoMovi = 'L'";
	$resultado = $cone->prepare($sql);
	$resultado->execute();

//----------------------------------------------------------------------------------
	$intruccion = array(
'<!DOCTYPE html>',
'<html lang="es">',
'<head>',
'  <?php',
'   $RutaEnca = $_SERVER[\'DOCUMENT_ROOT\'].\'/Intranet/\';',
'	$TituEnca = "ER-02 - Reglamento";', 
'	include ($RutaEnca.\'Encabezado/EncaLiga.php\');', 
'  ?> ',
'<head> ',
'<script src="InfoList.js"></script> ',
'<body> ',
'<header class="shadow mb-4 bg-white">',
'<?php include ($RutaEnca.'Encabezado/EncaPrin.php'); ?>',
'</header>',
'<?php include 'InfoListSERP.php'; ?>',
'<!--encabezado--> ',
'<div class="container table-responsive">',
'	<table width="70%" class="ListInfo tabla">',
'		<tr>',
'			<td colspan="9">Formato:<?=$ClavForm?> <?=$DescForm?>  </td>',
'			<td colspan="3">',
'				<a href="../Formato.php" ',
'					class="btn-Regresar"> Regresar',
'			    </a>',
'			</td>',
'		</tr>');
//insertar intrucciones a la tabla
for ($i=0, $NumeReng = 1; $i<=26; $i++, $NumeReng++){ 
	$sql = "INSERT INTO ptinstru (TNombre, TTipoMovi, TNumero, TInstruccion) VALUES ('".$TablBaDa."', 'L', '".$NumeReng."', '".$intruccion[$i]."' )";
	$resultado = $cone->prepare($sql);
	$resultado->execute();
}


//llamar los encabezados
$Sql = "SELECT CDescripcion, CComentario ".
	   "FROM   pdcampos ".
	   "WHERE CTabla='".$TablBaDa."' AND ".
	   		 "CDespLista = 'A' ";
$Resultado = $cone->prepare($Sql);
$Resultado->execute();
$row = $Resultado->fetchAll();//fetch ->una fila que coincida con la clausula

$No=0;
foreach ($row as $Fila):
	$NombCamp = $Fila['CDescripcion'];
	$ComeCamp = $Fila['CComentario'];
    
	$DescUtil = ( $ComeCamp ?? null ) ?  $NombCamp : $ComeCamp ; 
	$intruccion[$No] = '			<th>'.$DescUtil.'</th>';		
	  $No++;
endforeach;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$sql = "INSERT INTO ptinstru (TNombre, TTipoMovi, TNumero, TInstruccion) VALUES ('".$TablBaDa."', 'L', '".$NumeReng."', '".$intruccion[$i]."' )";
	$resultado = $cone->prepare($sql);
	$resultado->execute();
}

/*
//----------------------------------------------------------------------------------------
//query para traer los datos de la tabla y despues escribirlos
$sql = "SELECT * FROM pttabla WHERE TNombre = '".$TablBaDa."' AND TTipoMovi = 'L'";	   
	$resultado = $cone->prepare($sql);
	$resultado->execute();
	$row = $resultado->fetchAll();
	
		//escribir las instrucciones en el archivo
	$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/Intranet/".$RutaArch."/".$ArchList.".php";	
	$file = fopen($NombArch, "w");
	foreach ($row as $fila):
		fwrite($file, $fila['TInstruccion'].PHP_EOL);
	endforeach;
	fclose($file);

	header("location: VisualizarCampos.php");*/
?>
