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
				  "TCRUDCampLlav, TCRUDVarCamLla, TCampOrde,".
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

   $CamLlaCr = $ResuSql['TCRUDCampLlav'];
   $VaCaLlCr = $ResuSql['TCRUDVarCamLla'];
   $CampOrde = $ResuSql['TCampOrde'];

   $CampModi = $ResuSql['TCampModi'];	
   $VariCaMo = $ResuSql['TVariCamMod'];
   $CampFech = $ResuSql['TCampFech'];	
   $CampEsta = $ResuSql['TCampEsta'];

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
		   		 "ITipoMovi = 'M' ";
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
'    $RutaEnca = $_SERVER["DOCUMENT_ROOT"]."/Intranet/";',
'	include($RutaEnca."Encabezado/EncaCook.php");',
'	require_once($RutaEnca."Encabezado/EncaPrin.php"); ',
'?>',
'</header>',
'<?php',
'	include "'.$ListModiL.'SERP.php";',
'?>	',
'<!--encabezado--> ',
'<form id="PideDato" method="post" name="formulario" action="'.$ListModiL.'CRUD.php">',
'    <input name="C02" id="VC02" type="hidden" value="<?=$CampBusq?>">',
'	<table width="70%" class="ListInfo tabla">',
'		<tr>',
'			<td colspan="3">Formato:<?=$ClavForm?> <?=$DescForm?>  </td>',
'			<td colspan="6">',
'				<a href="'.$ListList.'.php" class="btn-Regresar">',
'			       Regresar ',
'			    </a>',
'			</td>',
'		</tr>',
'		<tr align="center">');

//insertar intrucciones a la tabla
for ($i=0, $NumeReng = 1; $i<33; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
		   	   "VALUES ('$TablBaDa', 'M', 'L', '$NumeReng', '$intruccion[$i]' )";
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
$intruccion[$No] = '			foreach($ResuSql as $RegiTabl){'; $No++;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'M', 'L', '$NumeReng', '$intruccion[$i]' )";
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
				  "CListCampCRUD  = 'A' ".
		   "UNION ".
		   "SELECT CNumero, CDescripcion, CTipo ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A' ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No=0; $NumeVari = 3;
foreach ($CampTabl as $RegiTabl):
	$NumeCara =  ($NumeVari < 10 ) ? "0".$NumeVari : $NumeVari;

	$intruccion[$No] = '			  $VC'.$NumeCara.' = $RegiTabl['.$No.'];'; 

	$No++; $NumeVari++;
endforeach; 
$intruccion[$No] = '			  '; $No++;
$intruccion[$No] = '			  $RutaArch = "/ExpeElectroni/$ClavAyun/Entrega/".'; $No++;
$intruccion[$No] = '				  		 "/$ClavForm/";'; $No++;
$intruccion[$No] = '		?>'; $No++;
$intruccion[$No] = '		<tr>'; $No++;
for ($i=1; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'M', 'L', '$NumeReng', '$intruccion[$i]' )";
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

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'M', 'L', '$NumeReng', '$intruccion[$i]' )";
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
				  "VALUES ('$TablBaDa', 'M', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
// Crear el codigo SERP
//----------------------------------------------------------------------------------
//Recupera el campo de condicion 
$InstSql = "SELECT CNumero, CDescripcion, CTipo ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CListCampCRUD  = 'A' ".
		   "UNION ".
		   "SELECT CNumero, CDescripcion, CTipo ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A' ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$CampQuer = ""; $NumeCamp = 0;
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];

	$NumeCamp .= ( $NumeCamp > 0 ) ? "," : "";
	$CampQuer .= $NombCamp; 

	$NumeCamp ++;
endforeach;

//Recupera el campo de condicion 
$InstSql = "SELECT CNumero, CDescripcion, CTipo, CCaptCondVari ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCondCamp = 'A'  ". 
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

	if ( $NumeCamp == 1 ) {
		$CondVari .= ' '.$NombCamp.' >= '.$VariCond.' ';
	} 
	else
	 {if ( $Tipocamp == "char" || $Tipocamp == "varchar"  )
	  $CondVari .= ' '.$NombCamp.' = \\\''.$VariCond.'\\\' ';
	 else
	  $CondVari .= ' '.$NombCamp.' = '.$VariCond.' '; }
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
'$InstSql = "SELECT '.$CampQuer.' ". ',
'	    	"FROM   '.$TablBaDa.' ". ',
'           "WHERE  '.$CondVari.' AND ". ',
'				   "'.$CampEsta.' = \\\'A\\\' "; ',
'			"LIMIT 0, 9 ";',
'if ($BandMens) echo "1)$InstSql<br>"; ',
'$EjInSql = $ConeBase->prepare($InstSql); ',
'$EjInSql->execute(); ',
'$ToReSql = $EjInSql->rowCount();',
'$ResuSql = $EjInSql->fetchAll();',
' ',
'?>');
	
//insertar intrucciones a la tabla
	for ($i=0, $NumeReng = 1; $i<21; $i++, $NumeReng++){ 
		$InstSql = "INSERT INTO ptinstru ". 
					  "VALUES ('$TablBaDa', 'M', 'S', '$NumeReng', '$intruccion[$i]' )";
		if ($BandInst) echo "$NumeReng)<br>";		      
		$EjInSql = $cone->prepare($InstSql);
		$EjInSql->execute();
		$ResuSql = $EjInSql->fetch();
	}
	
//----------------------------------------------------------------------------------
// Crear el codigo CRUD
//----------------------------------------------------------------------------------

$intruccion = array(
'<?php',
'include("../EncaCone.php");',
'',
'//********************************************************************',
'//Informacion de la Lista',
'//Bandera de visualizar msg',
'$BandMens = false;',
'if ( isset($_GET["Param0"]) )',
'	$BandMens = true;',
' ',
'$CampBusq = $_POST["C02"]; ',
'//*****************************************************************',
'//Para operacion A B C ',
'$InstSql = "SELECT '.$CamLlaCr.','.$CampOrde.' ". ',
'	    	"FROM   '.$TablBaDa.' ". ',
'           "WHERE  '.$CondVari.' AND ". ',
'				   "'.$CampEsta.' = \\\'A\\\' "; ',
'			"LIMIT 0, 9 ";',
'if ($BandMens) echo "1) $InstSql <br>"; ',
'$EjInSql = $ConeBase->prepare($InstSql);',
'$EjInSql->execute();',
'$ToReSql = $EjInSql->rowCount();',
'$ResuSql = $EjInSql->fetchAll();',
' ',
'foreach($ResuSql as $RegiTabl){',
'	$VC03 = $RegiTabl[0];'); 
		
//insertar intrucciones a la tabla
for ($i=0, $NumeReng = 1; $i<26; $i++, $NumeReng++) { 
	$InstSql = "INSERT INTO ptinstru ". 
			  "VALUES ('$TablBaDa', 'M', 'C', '$NumeReng', '$intruccion[$i]' )";
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
	$intruccion[$No] = '	$ValoCamp = "C".$VC03."'.$NumeCara.'"; $VC'.$NumeCara.' = $_POST[$ValoCamp];'; 
	$No++; $NumeVari++;
endforeach; 

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'M', 'C', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br> ";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//---------------------------------------------------------
// UPDATE
//Recupera los campo del UPDATE
$InstSql = "SELECT CNumero, CDescripcion, CTipo ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A' ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No =0;  $NumeVari = 3;
$intruccion[$No] = '		$InstSql = 	"UPDATE '.$TablBaDa.' ". ';  $No++;
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];
	$Tipocamp = $RegiTabl['CTipo'];

	$NumeCara =  ($NumeVari < 10 ) ? "0".$NumeVari : $NumeVari;
	$intruccion[$No] = ( $NumeVari == 3 ) ? '						"SET ' : 
											'							"';

	if ( $Tipocamp == "int" )
	  $intruccion[$No]  .= ''.$NombCamp.' = $VC'.$NumeCara.',".  ';
    else
	  $intruccion[$No]  .= ''.$NombCamp.' = \\\'$VC'.$NumeCara.'\\\',".  '; 

	  $No++; $NumeVari++; 
endforeach; 

$intruccion[$No] = '							"'.$CampModi.' = '.$VariCaMo.', ".';  $No++;
$intruccion[$No] = '							"'.$CampFech.' = DATE(NOW()) ".'; $No++;		

//---------------------------------------------------------
//Recupera el campo de condicion para el UPDATE
$InstSql = "SELECT CNumero, CDescripcion, CTipo, CCaptCondVari ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCondCamp = 'A'  ". 
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

	$intruccion[$No] = ( $NumeCamp == 1 ) ?'					"WHERE ' : 
										   '							"';   

	if ( $Tipocamp == "char" || $Tipocamp == "varchar"  )
	 $intruccion[$No] .= ' '.$NombCamp.' = \\\''.$VariCond.'\\\' ';
	else
	 $intruccion[$No] .= ' '.$NombCamp.' = '.$VariCond.' '; 

	$intruccion[$No] .=  ( $NumeCamp == $TotaCamp ) ? '";': ' AND ".'; 

	$NumeCamp ++; $No++;
endforeach;


for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'M', 'C', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//------------------------------------------------------
$intruccion = array(
'	//Ejecuta la instruccion ',
'	if ($BandMens) echo "1) $InstSql <br>"; ',
'	$ResuSql = $ConeBase->prepare($InstSql); ',
'	$ResuSql->execute(); ',
'	$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente"; ',
'	if (!$ResuSql) ',
'	  echo "<script> alert( $MensResp ); </script>"; ',
'	  ',
' } ',
'$PagiRegr = "location: '.$ListList.'.php"; ',
'if (!$BandMens) header($PagiRegr);	',
'?>');
			
//insertar intrucciones a la tabla
for ($i=0; $i<12; $i++, $NumeReng++) { 
	$InstSql = "INSERT INTO ptinstru ". 
			  "VALUES ('$TablBaDa', 'M', 'C', '$NumeReng', '$intruccion[$i]' )";
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
	   		  "ITipoMovi = 'M' AND ". 
			  "IArchiCrea = 'L' ".
	   "ORDER BY INumero ";
echo 	"1) $InstSql ";    	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//escribir las instrucciones en el archivo
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$ListModiL.php";	
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
	   		  "ITipoMovi = 'M' AND ". 
			  "IArchiCrea = 'S' ".
	   "ORDER BY INumero "	  ;	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//Crear el archivo SERP
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$ListModiL"."SERP.php";	
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
	   		  "ITipoMovi = 'M' AND ". 
			  "IArchiCrea = 'C' ".
	   "ORDER BY INumero "	  ;	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//Crear el archivo SERP
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$ListModiL"."CRUD.php";	
$file = fopen($NombArch, "w");
foreach ($ResuSql as $RegiTabl):
	fwrite($file, $RegiTabl['IInstruccion'].PHP_EOL);
endforeach;
fclose($file);

//header("location: VisualizarCampos.php");

?>
