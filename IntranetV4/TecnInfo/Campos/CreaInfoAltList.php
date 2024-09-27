<?php
//Carga las variables
$ArCooki1 = $_COOKIE['CMenu'];
$AMenu = explode("|", $ArCooki1);
$ClavMenu = $AMenu[0];  
$DescMenu = $AMenu[1];  
$BaseDato = $AMenu[2]; 
$TablBaDa = $AMenu[3];

$BandInst = true;
$RutaEnca = $_SERVER['DOCUMENT_ROOT'].'/Intranet/'; 
include($RutaEnca.'Archivos/Conexiones/conteinf.php');

//Datos de la tabla
$InstSql = "SELECT TTitulo, TRutaArch, ". 
  		   		  "TListList, TListRegre,". 
				  "TListCRUD, TListAltaL, TListModiL, ". 
				  "TCRUD, TCRUDRegr, TCRUDTerm, TCRUDTerB, ".
				  "TCampModi, TVariCamMod, TCampFech, TCampEsta, TCampOrde ".
		   "FROM   pttabla  ".
		   "WHERE  TNombre = '$TablBaDa' ";	
if ($BandInst) echo "1)<br>  $InstSql <br>";		      
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$tot_rows = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetch();

if ($ResuSql)
 { //Carga los campos
   $Titulo   = $ResuSql['TTitulo'];
   $RutaArch = $ResuSql['TRutaArch'];
   $ListList = $ResuSql['TListList']; 
   $ListRegre= $ResuSql['TListRegre'];
   $ListCRUD = $ResuSql['TListCRUD'];
   $ListAltaL= $ResuSql['TListAltaL'];
   $ListModiL= $ResuSql['TListModiL'];

   $CRUD     = $ResuSql['TCRUD'];
   $CRUDRegr = $ResuSql['TCRUDRegr'];
   $CRUDAlMo = $ResuSql['TCRUDTerm'];
   $CRUDBaja = $ResuSql['TCRUDTerB'];

   $CampModi = $ResuSql['TCampModi'];	
   $VariCaMo = $ResuSql['TVariCamMod'];
   $CampFech = $ResuSql['TCampFech'];	
   $CampEsta = $ResuSql['TCampEsta'];
   $CampOrde = $ResuSql['TCampOrde'];
 }  

 /*
 TipoMpovi: L: Lista
 			U: Archivo UNO
			A: Archivo Alta Lista
			M: Archivo Modi Lista 

 */
//----------------------------------------------------------------------------------------
//  Genera el codigo  php
//----------------------------------------------------------------------------------------

//Borrar datos de la tabla
$InstSql = "DELETE FROM ptinstru ". 
		   "WHERE INombre = '".$TablBaDa."' AND ". 
		   		 "ITipoMovi = 'A' ";
if ($BandInst) echo "2)<br>  $InstSql <br>";		      
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$tot_rows = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetch();

//----------------------------------------------------------------------------------
$intruccion = array(
'<!DOCTYPE html>',
'<html lang="es">',
'<head> ',
'	<meta charset="UTF-8">',
'	<meta name="viewport" content="width=device-width, initial-scale=1.0">',
'	<title>'.$Titulo.'</title>',
'	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">',
'	<link rel="stylesheet" href="/Intranet/CSS/Estilos/style.css">',
'</head>',
'<body>',
'<header class="shadow mb-4 bg-white">',
'<?php',
'   $RutaEnca = $_SERVER["DOCUMENT_ROOT"]."/Intranet/";',
'	include($RutaEnca."Encabezado/EncaCook.php");',
'	require_once($RutaEnca."Encabezado/EncaPrin.php"); ',
'?>',
'</header>',
'<?php include "'.$ListAltaL.'SERP.php";  ?>',
'<!--encabezado--> ',
'<form id="PideDato" method="post" name="formulario" action="'.$ListAltaL.'CRUD.php">',
'	<input name="C02" id="VC02" type="hidden" value="<?=$NumeRegi?>">',
'	<table width="70%" class="ListInfo tabla">',
'		<tr>',
'			<td colspan="3">Formato:<?=$ClavForm?> <?=$DescForm?>  </td>',
'			<td colspan="6">',
'				<a href="'.$CRUDRegr.'.php" ',
'					class="btn-Regresar">',
'			    Regresar ',
'			    </a>',
'			</td>',
'		</tr>',
'		<tr align="center">');

//insertar intrucciones a la tabla
for ($i=0, $NumeReng = 1; $i<32; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
		   	   "VALUES ('$TablBaDa', 'A', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
//llamar los encabezados de la tabla
$InstSql = "SELECT CDescripcion,  CComentario, CTipo  ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A' ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED)";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No = 0;  
foreach ($CampTabl as $RegiTabl):
	$ComeCamp = $RegiTabl['CComentario'];
	$intruccion[$No] = '			<th>'.$ComeCamp.'</th>'; 
	$No++;
endforeach;

$intruccion[$No] = '		</tr>'; $No++;
$intruccion[$No] = '		<?php '; $No++;
$intruccion[$No] = '			for ($i=1; $i<11; $i++) {'; $No++;
$intruccion[$No] = '			  $VC03 = $NumeRegi	+ $i;'; $No++;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'A', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br> ";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
//Inicializa variables
$InstSql = "SELECT CNumero, CDescripcion, CTipo ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A' ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No=0; $NumeVari = 4;
foreach ($CampTabl as $RegiTabl):
	$Tipocamp = $RegiTabl['CTipo'];

	$NumeCara =  ($NumeVari < 10 ) ? "0".$NumeVari : $NumeVari;
	$intruccion[$No] = '			  ';

	if ($NumeVari == 4)
	  $intruccion[$No] .= ' $VC'.$NumeCara.' = $VC03; '; 
	else
	  if ( $Tipocamp == "int" )
	    $intruccion[$No] .= ' $VC'.$NumeCara.' = 0; ';
      else
	    $intruccion[$No] .= ' $VC'.$NumeCara.' = ""; '; 

	$No++; $NumeVari++;
endforeach; 
$intruccion[$No] = '			  '; $No++;
$intruccion[$No] = '			  $RutaArch = "/ExpeElectroni/$ClavAyun/Entrega/".'; $No++;
$intruccion[$No] = '				  		 "/$ClavForm/";'; $No++;
$intruccion[$No] = '		?>'; $No++;
$intruccion[$No] = '		<tr>'; $No++;
for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'A', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br> ";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}
//----------------------------------------------------------------------------------
//Pide valores variables
$InstSql = "SELECT CNumero, CDescripcion, CComentario, CTipo ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A' ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No=0; $NumeVari = 4;
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];
	$ComeCamp = $RegiTabl['CComentario'];
	$TipoCamp = $RegiTabl['CTipo'];

	$ClasTiCa = "text";
	switch ($TipoCamp)
	 { case "date":	$ClasTiCa = "date"; break;
	   case "int":	$ClasTiCa = "text"; break;
	 }	

	$NumeCara =  ($NumeVari < 10 ) ? "0".$NumeVari : $NumeVari;

	$intruccion[$No]  = '			';
	$intruccion[$No] .='<td><input name="C<?=$VC03?>'.$NumeCara.'" id="VC'.$NumeCara.'" type="'.$$ClasTiCa.'" value="<?=$VC'.$NumeCara.'?>"';  $No++;

	$intruccion[$No]  = '					   ';
	$intruccion[$No] .=	'class="form-control" placeholder="'.$ComeCamp.'" title="'.$ComeCamp.'"></td>';

	$No++; $NumeVari++;
endforeach; 
$intruccion[$No]  = '			'; $No++;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'A', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br> ";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
$intruccion = array(
'		</tr>',
'		<?php	} ?> ',
'		<tr>',
'			<td colspan="3"></td>',
'			<td colspan="6">',
'			<button type="submit" name="Enviar" placeholder="Registrar"',
'						value="Guardar" >',
'							Registrar',
'						</button>',
'		</td>',
'		</tr>',		
'	</table>',
'</form>',
' ',
'<?php',
'//require_once($_SERVER["DOCUMENT_ROOT"]."/Intranet/Encabezado/PiePagi.php"); ',
'?>',
'</body>',
'</html>');	

//insertar intrucciones a la tabla
for ($i=0; $i<19; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
				  "VALUES ('$TablBaDa', 'A', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
// Crear el codigo SERP
//----------------------------------------------------------------------------------
//Recupera el campo de condicion 
$InstSql = "SELECT CNumero, CDescripcion, CTipo, CCaptCondVari ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CListCondCamp = 'A'  ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$CondVari = ""; $NumeCamp = 1;
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];
	$Tipocamp = $RegiTabl['CTipo'];
	$VariCond = $RegiTabl['CCaptCondVari'];
	$CondVari .= ($NumeCamp > 1) ? " AND " : "";

	if ( $Tipocamp == "char" || $Tipocamp == "varchar"  )
	  $CondVari .= ' '.$NombCamp.' = \\\''.$VariCond.'\\\' ';
	else
	  $CondVari .= ' '.$NombCamp.' = '.$VariCond.' '; 
	$NumeCamp ++;
endforeach;

$intruccion = array(
'<?php',
'	include("../EncaCone.php");',
' ',
'//********************************************************************',
'$BandMens = false;',
'if ( isset($_GET["Param0"]) )',
'	$BandMens = true;',
' ',
'//Carga el registro para Consulta ',
'$InstSql = "SELECT CASE WHEN MAX('.$CampOrde.') IS  NULL ". ',
'                    "THEN 0 ".  ',
'                    "ELSE MAX('.$CampOrde.')  END  AS NumeRegi ". ',
'	    	"FROM   '.$TablBaDa.' ". ',
'           "WHERE  '.$CondVari.' AND ". ',
'				   "'.$CampEsta.' = \\\'A\\\' "; ',
'if ($BandMens) echo "1).$InstSql.<br>"; ',
'$EjInSql = $ConeBase->prepare($InstSql); ',
'$EjInSql->execute(); ',
'$ToReSql = $EjInSql->rowCount(); ',
'$ResuSql = $EjInSql->fetch(); ',
'$NumeRegi = ($ResuSql) ? $ResuSql[0] : 0; ', 
'?>');
	
//insertar intrucciones a la tabla
	for ($i=0, $NumeReng = 1; $i<22; $i++, $NumeReng++){ 
		$InstSql = "INSERT INTO ptinstru ". 
					  "VALUES ('$TablBaDa', 'A', 'S', '$NumeReng', '$intruccion[$i]' )";
		if ($BandInst) echo "$NumeReng)<br>";		      
		$EjInSql = $cone->prepare($InstSql);
		$EjInSql->execute();
		$ResuSql = $EjInSql->fetch();
	}
	
//----------------------------------------------------------------------------------
// Crear el codigo CRUD
//----------------------------------------------------------------------------------
$intruccion = array(
'<?php ',
'include("../EncaCone.php"); ',
' ',
'//******************************************************************** ',
'//Informacion de la Lista ',
'//Bandera de visualizar msg ',
'$BandMens = false; ',
'if ( isset($_GET["Param0"]) ) ',
'	$BandMens = true; ',
' ',
'//***************************************************************** ',
'//Para operacion A B C ',
'$NumeRegi = $_POST[\\\'C02\\\'];  ',
'if ($BandMens)  echo "NumeRegi) $NumeRegi <br> "; ',
' ',
'for ($i=1; $i<11; $i++) { ',
'	$CaDa = 0; ',
'	$VC03 = $NumeRegi + $i;');
		
//insertar intrucciones a la tabla
for ($i=0, $NumeReng = 1; $i<18; $i++, $NumeReng++) { 
	$InstSql = "INSERT INTO ptinstru ". 
			  "VALUES ('$TablBaDa', 'A', 'C', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
  }

//----------------------------------------------------------------------------------
//Pide valores variables
$InstSql = "SELECT CNumero, CDescripcion, CComentario, CTipo ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A' ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No=0; $NumeVari = 4;
foreach ($CampTabl as $RegiTabl):
	$NumeCara =  ($NumeVari < 10 ) ? "0".$NumeVari : $NumeVari;

	$intruccion[$No] = '	$ValoCamp = "C".$VC03."'.$NumeCara.'"; $VC'.$NumeCara.' = $_POST[$ValoCamp];'; $No++;
	$intruccion[$No] = '	$CaDa += ( $VC'.$NumeCara.' ?? null ) ? 1 : 0;'; $No++;  
	$intruccion[$No] = '	'; 
	$No++; $NumeVari++;
endforeach; 
$intruccion[$No] = '	echo "CaDa) $CaDa <br>";';	$No++;
$intruccion[$No] = '	'; 							$No++;
$intruccion[$No] = '	if ( $CaDa > 1)'; 			$No++;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'A', 'C', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br> ";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//------------------------------------------------------
// INSERT
//Recupera el campo para el Insert 
$InstSql = "SELECT CNumero,  CTipo, CCaptCondVari ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCampOrdeCond = 'A'  ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$CamIns01 = 'VALUES (NULL,'; 
$NumeCamp = 1; 
foreach ($CampTabl as $RegiTabl):
	$Tipocamp = $RegiTabl['CTipo'];
	$VariCond = $RegiTabl['CCaptCondVari'];
	$CamIns01 .= ($NumeCamp > 1) ? " , " : "";

	if ( $Tipocamp == "char" || $Tipocamp == "varchar"  )
	  $CamIns01 .= ' \\\''.$VariCond.'\\\' ';
	else
	  $CamIns01 .= ' '.$VariCond.' '; 
	$NumeCamp ++;
endforeach;
$CamIns01 .= ',';

//Recupera los campos de captura para el insert
$InstSql = "SELECT CNumero, CTipo ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A'  ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$CamIns02='';
$NumeVari = 3; $NumeCamp = 1;
foreach ($CampTabl as $RegiTabl):
	$Tipocamp = $RegiTabl['CTipo']; 
	$CamIns02 .= ( $NumeCamp > 1 ) ? " , " : "";
	$CampInse  = ( $NumeVari < 10 ) ? "0$NumeVari" : $NumeVari;

	if ( $Tipocamp == "char" || $Tipocamp == "varchar" || $Tipocamp == 'date' )
	  $CamIns02 .= ' \\\'$VC'.$CampInse.'\\\' ';
	else
	  $CamIns02 .= ' $VC'.$CampInse.' '; 
	$NumeCamp ++; $NumeVari ++;
endforeach;
$CamIns03= $VariCaMo.',DATE(NOW()),\\\'A\\\')'; 

$intruccion = array(
'	 { $InstSql = 	"INSERT INTO '.$TablBaDa.' ".',
'				   "'.$CamIns01.'".	',
'								 "'.$CamIns02.'". ',
'								 "'.$CamIns03.'"; ');
for ($i=0; $i < 4; $i++, $NumeReng++){ 
		$InstSql = "INSERT INTO ptinstru ". 
		"VALUES ('$TablBaDa', 'A', 'C', '$NumeReng', '$intruccion[$i]' )";
		if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
		$EjInSql = $cone->prepare($InstSql);
		$EjInSql->execute();
		$ResuSql = $EjInSql->fetch();
}

//------------------------------------------------------
$intruccion = array(
'	  //Ejecuta la instruccion ',
'	  if ($BandMens)  echo "1)$InstSql<br>"; ',
'	  $ResuSql = $ConeBase->prepare($InstSql); ',
'	  $ResuSql->execute(); ',
'	  $MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente"; ',
'	  if (!$ResuSql) ',
'		echo "<script>alert("\\\'.$MensResp.\\\'");</script>"; ', 
'	  ',
'	} ',
' } ',
'$PagiRegr = "location: '.$ListList.'.php"; ',
'if (!$BandMens) header($PagiRegr);	',
'?>');
			
//insertar intrucciones a la tabla
for ($i=0; $i<13; $i++, $NumeReng++) { 
	$InstSql = "INSERT INTO ptinstru ". 
			  "VALUES ('$TablBaDa', 'A', 'C', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
  }
	

//******************************************************************************************
//  						Crear los a archvio php
//******************************************************************************************
//Crea el archivo List
$InstSql = "SELECT INumero, IInstruccion ".
	   "FROM   ptinstru ". 
	   "WHERE  INombre = '".$TablBaDa."' AND ".  
	   		  "ITipoMovi = 'A' AND ". 
			  "IArchiCrea = 'L' ".
	   "ORDER BY INumero ";
echo 	"1) $InstSql ";    	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//escribir las instrucciones en el archivo
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$ListAltaL.php";	
$file = fopen($NombArch, "w");
foreach ($ResuSql as $RegiTabl):
	fwrite($file, $RegiTabl['IInstruccion'].PHP_EOL);
endforeach;
fclose($file);

/*
//-----------------------------------------------
//Informacion del archivo  js
$InstSql = "SELECT INumero, IInstruccion ".
	   "FROM   ptinstru ". 
	   "WHERE  INombre = '".$TablBaDa."' AND ".  
	   		  "ITipoMovi = 'U' AND ". 
			  "IArchiCrea = 'J' ".
	   "ORDER BY INumero "	  ;	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();

//crea el archivo JS
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$CRUD.js";	
$file = fopen($NombArch, "w");
foreach ($ResuSql as $RegiTabl):
	fwrite($file, $RegiTabl['IInstruccion'].PHP_EOL);
endforeach;
fclose($file);
*/
//-----------------------------------------------
//Informacion del archivo  SERP
$InstSql = "SELECT INumero, IInstruccion ".
	   "FROM   ptinstru ". 
	   "WHERE  INombre = '".$TablBaDa."' AND ".  
	   		  "ITipoMovi = 'A' AND ". 
			  "IArchiCrea = 'S' ".
	   "ORDER BY INumero "	  ;	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//Crear el archivo SERP
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$ListAltaL"."SERP.php";	
$file = fopen($NombArch, "w");
foreach ($ResuSql as $RegiTabl):
	fwrite($file, $RegiTabl['IInstruccion'].PHP_EOL);
endforeach;
fclose($file);

//-----------------------------------------------
//Informacion del archivo  SERP
$InstSql = "SELECT INumero, IInstruccion ".
	   "FROM   ptinstru ". 
	   "WHERE  INombre = '".$TablBaDa."' AND ".  
	   		  "ITipoMovi = 'A' AND ". 
			  "IArchiCrea = 'C' ".
	   "ORDER BY INumero "	  ;	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//Crear el archivo SERP
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$ListAltaL"."CRUD.php";	
$file = fopen($NombArch, "w");
foreach ($ResuSql as $RegiTabl):
	fwrite($file, $RegiTabl['IInstruccion'].PHP_EOL);
endforeach;
fclose($file);

//header("location: VisualizarCampos.php");

?>
