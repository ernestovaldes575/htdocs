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

$CRUD = "";
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
//  Genera el codigo php
//----------------------------------------------------------------------------------------

//Borrar datos de la tabla
$InstSql = "DELETE FROM ptinstru ". 
		   "WHERE INombre = '".$TablBaDa."' AND ". 
		   		 "ITipoMovi = 'U' ";
if ($BandInst) echo "2)<br>  $InstSql <br>";		      
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$tot_rows = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetch();

//----------------------------------------------------------------------------------
$intruccion = array(
'<!DOCTYPE html>',
'<html lang="es">',
'<head>  ',
'	<meta charset="UTF-8">',
'	<meta name="viewport" content="width=device-width, initial-scale=1.0">',
'	<title>'.$Titulo.'</title>',
'	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">',
'	<link rel="stylesheet" href="/Intranet/CSS/Estilos/style.css">',
'</head>',
'<script language="JavaScript" src="'.$ListCRUD.'.js"></script>',
' ',
'<body> ',
'<header class="shadow mb-4 bg-white">',
'<?php',
'   $RutaEnca = $_SERVER["DOCUMENT_ROOT"]."/Intranet/";',
'	include($RutaEnca."Encabezado/EncaCook.php");',
'	require_once($RutaEnca."Encabezado/EncaPrin.php"); ',
'?>',
'</header>',
'<?php include "'.$ListCRUD.'SERP.php";  ?>',
'<div>',
'	<form id="PideDato" method="post" name="formulario" action="'.$ListCRUD.'CRUD.php">',
'		<input type="hidden" name="C00" id="SV01" value="<?=$CRUD?>">',
'		<input type="hidden" name="C01" id="SV02" value="<?=$TipoMovi?>">',
'		<input type="hidden" name="C02" id="SV03" value="<?=$CampBusq?>">',
'		',
'		<div class="contenedor-tabla">',
'			<div class="contenedor-tabla-sec">',
'			<table class="ListInfo01 tabla">',
'				<tr class="">',
'					<td width="29%" class="text-uppercase" scope="row">',
'						Campo',
'					</td>',
'					<td width="71%">',
'						<a class="btn-Regresar container" href="'.$CRUDRegr.'.php">',
'							Regresar',
'						</a>',
'					</td>',
'				</tr>',
'				<!-- Inicia campos -->');

//insertar intrucciones a la tabla
for ($i=0, $NumeReng = 1; $i<40; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
		   	   "VALUES ('$TablBaDa', 'U', 'U', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
//llamar los encabezados
$InstSql = "SELECT CDescripcion,  CComentario, CTipo  ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A' ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED)";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$NumeCamp = 3; $No = 0;  
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];
	$ComeCamp = $RegiTabl['CComentario'];
	$TipoCamp = $RegiTabl['CTipo'];
    $NumCamTe = ( $NumeCamp < 10  ) ? "0".$NumeCamp : $NumeCamp;
    
	$ClasTiCa = "text";
	switch ($TipoCamp)
	 { case "date":	$ClasTiCa = "date"; break;
	   case "int":	$ClasTiCa = "text"; break;
	 }	

	$intruccion[$No] = '	  <tr>'; 						$No++;
	$intruccion[$No] = '	  <th>'.$ComeCamp.'</th>'; 		$No++;
	$intruccion[$No] = '	  <td>'; 						$No++;
	$intruccion[$No] = '		  <input name="C'.$NumCamTe.'" id="VC'.$NumCamTe.'" type="'.$ClasTiCa.'" value="<?=$VC'.$NumCamTe.'?>"'; 					 $No++;
	$intruccion[$No] = '		  class="form-control" placeholder="'.$ComeCamp.'">'; $No++;
	$intruccion[$No] = '	  </td>'; 						$No++;
	$intruccion[$No] = '  </tr>'; 							$No++;
	$NumeCamp++; 
endforeach;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'U', 'U', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br> ";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}
$intruccion = array(
'			<!-- Termina  campos -->',
'				<tr>',
'				  <td></td>',
'				  <td><button type="submit" name="Enviar" placeholder="Registrar"',
'						value="<?=$MesnTiMo?>" class="btn-Submit container opacity-50" disabled>',
'							Registrar',
'						</button></td>',
'			  </tr>',
'			</table>',
'	</form>	',
'</div>',
'<script src="/Intranet/Js/ValiForm.js"></script>',
'</body>',
'</html>');
//insertar intrucciones a la tabla
for ($i=0; $i<14; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
		   	   "VALUES ('$TablBaDa', 'U', 'U', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------------
//  Genera el codigo JS
//----------------------------------------------------------------------------------------
$intruccion = array(
'//-------------------------------------------------------------------------',
'',
'//Funcion de alta ',
'document.addEventListener("click", ',
'function (event) { ',
'	 if (event.target.classList.contains("Nuev")) {',
'        window.location.href = "EstaPagi.php?PaAMB01=A&PaAMB02=0";',
'      }',
'else if (event.target.classList.contains("Modi")) {',
'        ClaEsPa = event.target.getAttribute("data-id");',					
'        window.location.href = "EstaPagi.php?PaAMB01=M&PaAMB02="+ClaEsPa;',
'      } ',
'else if (event.target.classList.contains("Elim")) {',
'        ClaEsPa = event.target.getAttribute("data-id");',					
'        window.location.href = "EstaPagi.php?PaAMB01=B&PaAMB02="+ClaEsPa;',
'    }    ',
'});',
'',
'//-------------------------------------------------------------------------',
'function CarImgPa(Param1,Param2,Param3,Param4)',
'{ ',
'  Ruta = "URLSubiArch.php?Param1="+Param1+',
'						 "&Param2="+Param2+',
'						 "&Param3="+Param3+',
'						 "&Param4="+Param4; ',
'  Dime = "width=450 height=350 top=10 left=10 scrollbars";',
'  Cata = window.open(Ruta,"Carga documento",Dime);',
'}',
'',
'');
	
for ($i=0,$NumeReng =1; $i < 28; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'U', 'J', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

	
//----------------------------------------------------------------------------------------
//  Genera el codigo SERP
//----------------------------------------------------------------------------------------
//Recupera los campos
$InstSql = "SELECT CNumero, CDescripcion, CTipo ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A' ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$CampCRUD = ""; $VariCRUD = ""; 
$NumeCamp = 1;  $NumeVari = 3;
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];
	$Tipocamp = $RegiTabl['CTipo'];

	//Crea los campos del Select
	$CampCRUD .= ($NumeCamp > 1) ? "," : "";
	$CampCRUD .= " $NombCamp ";

	$NumeCara =  ($NumeVari < 10 ) ? "0".$NumeVari : $NumeVari; 
	if ( $Tipocamp == "int" )
	  $VariCRUD  .= ' $VC'.$NumeCara.' = 0; ';
    else
	  $VariCRUD  .= ' $VC'.$NumeCara.' = ""; '; 

	$NumeCamp ++; $NumeVari++;
endforeach; 

//---------------------------------------------------------
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

	if ( $Tipocamp == "char" || $Tipocamp == "varchar"  )
	  $CondVari .= ' '.$NombCamp.' = \\\''.$VariCond.'\\\' ';
	else
	  $CondVari .= ' '.$NombCamp.' = '.$VariCond.' '; 
	$NumeCamp ++;
endforeach;

//------------------------------------------------------
$intruccion = array(
'<?php',
'include("../EncaCone.php");',
'',
'//********************************************************************',
'//Informacion de la Lista',
'$BandMens = false;',
'if ( isset($_GET["Param0"]) )',
'	$BandMens = true;',
'',
'',
'if( isset($_GET["PaAMB01"]) != ""){	',
'	$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento ',
'	$CampBusq = $_GET["PaAMB02"];	#Campo de busqueda ',
' }',
'',
'$CRUD = "GET";',
'//Carga el registro para Consulta',
'$InstSql = "SELECT '.$CampCRUD.' ". ',
' 			"FROM   '.$TablBaDa.' ". ',
'			"WHERE  '.$CondVari.' "; ',
'			',
'if ($BandMens)  ',
'   echo "1) $InstSql <br>"; ',
'$EjInSql = $ConeBase->prepare($InstSql);',
'$EjInSql->execute();',
'$ToReSql = $EjInSql->rowCount();',
'$ResuSql = $EjInSql->fetch();',
' ',
' '.$VariCRUD.' ',
' ',
'if ($ResuSql) ',
' { //Carga los campos');

for ($i=0,$NumeReng =1; $i < 32; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'U', 'S', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//---------------------------------------------------------
//Define las variables
$InstSql = "SELECT CNumero, CDescripcion ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A'  ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No = 0; $NumeVari = 3;
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];

	$NumeCara =  ($NumeVari < 10 ) ? "0".$NumeVari : $NumeVari; 
    $intruccion[$No] = '   $VC'.$NumeCara.' = $ResuSql["'.$NombCamp.'"];	'; 
	$No++; $NumeVari ++;
endforeach;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'U', 'S', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//------------------------------------------------------
//Recupera el campo de condicion del Orden
$InstSql = "SELECT CNumero, CDescripcion, CTipo, CCaptCondVari ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCampOrdeCond = 'A'  ". 
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

//---------------------------------------------------------
//Recupera el campo Orden
$InstSql = "SELECT CNumero, CDescripcion, CTipo ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCampOrdeNume = 'A' ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$CampOrde = ""; $NumeCamp = 1;  
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];
	$Tipocamp = $RegiTabl['CTipo'];

	//Crea los campos del Select
	$CampOrde .= ($NumeCamp > 1) ? "," : "";
	$CampOrde .= " $NombCamp ";

	$NumeCamp ++; 
endforeach; 


$intruccion = array(
' } ',
'else',
' { //Busca el sisguiente registro',
'	$InstSql = "SELECT CASE WHEN MAX('.$CampOrde.') IS  NULL ". ',
'                    "THEN 1 ". ',
'                    "ELSE MAX('.$CampOrde.') + 1 END  AS Clave ".',
'	 		   "FROM   '.$TablBaDa.' ".',
'              "WHERE  '.$CondVari.' ";',
'  if ($BandMens) echo "1) $InstSql <br>"; ',
'  $EjInSql = $ConeBase->prepare($InstSql);',
'  $EjInSql->execute();',
'  $ResuSql = $EjInSql->fetch();',
'  if ($ResuSql)',
'    $VC03 = $ResuSql["Clave"];',
'  }',
'',
'$RutaArch = "/ExpeElectroni/$ClavAyun/Transparen/";',
'	',
'$MesnTiMo = "";',
'switch( $TipoMovi ){',
'  case "A":	$MesnTiMo = "Registrar";',
'			$CRUD = "POST";       break;',
'  case "M":	$MesnTiMo = "Actualizar"; ',
'			$CRUD = "PUT";		  break;',
'  case "B":	$MesnTiMo = "Eliminar";',
'			$CRUD = "DELETE";	  break;',
' }	',	
'?>');

for ($i=0; $i < 28; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'U', 'S', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------------
//  Genera el archvio CRUD
//----------------------------------------------------------------------------------------
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
'',
'//*****************************************************************',
'//Para operacion A B C',
'$CRUD 	   = $_POST["C00"];',
'$TipoMovi = $_POST["C01"];',
'$CampBusq = $_POST["C02"];   ',
'',
'if ($BandMens)  ',
'  {  echo "CRUD)$CRUD<br>";',
'     echo "TipoMovi)$TipoMovi<br>";',
'     echo "CampBusq)$CampBusq<br>";',
'  }',
'',
'');

for ($i=0,$NumeReng=0; $i < 22; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'U', 'C', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//---------------------------------------------------------
//Leer las variables del form
$InstSql = "SELECT CNumero, CDescripcion ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CCaptCamp = 'A'  ". 
		   "ORDER BY CAST(CNumero AS UNSIGNED) ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No = 0; $NumeVari = 3;
foreach ($CampTabl as $RegiTabl):
	$NumeCara =  ($NumeVari < 10 ) ? "0".$NumeVari : $NumeVari; 
    $intruccion[$No] = '   $VC'.$NumeCara.' = $_POST["C'.$NumeCara.'"];	'; 
	$No++; $NumeVari ++;
endforeach;

$intruccion[$No] = '//Agregar campos'; $No++;
$intruccion[$No] = 'switch ( $CRUD )'; $No++;
$intruccion[$No] = '   { case "POST": //Alta'; $No++;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'U', 'C', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
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
$CamIns02 .= ',';
$CamIns03  = $VariCaMo.',DATE(NOW()),\\\'A\\\')'; 

$intruccion = array(
'		$InstSql = "INSERT INTO '.$TablBaDa.' ".',
'				   "'.$CamIns01.'".	',
'								 "'.$CamIns02.'". ',
'								 "'.$CamIns03.'"; ',
'		break;',
'	case "PUT": //Cambio');
for ($i=0; $i < 6; $i++, $NumeReng++){ 
		$InstSql = "INSERT INTO ptinstru ". 
		"VALUES ('$TablBaDa', 'U', 'C', '$NumeReng', '$intruccion[$i]' )";
		if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
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

$intruccion[$No] = '		break;'; 				 $No++;
$intruccion[$No] = '	case "DELETE": //Eliminar';  $No++;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'U', 'C', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//---------------------------------------------------------
// DELETE
$No =0;  $NumeVari = 3;
$intruccion[$No] = '		$InstSql = "UPDATE '.$TablBaDa.' ". ';  				$No++;
$intruccion[$No] = '				   "SET   '.$CampModi.' = '.$VariCaMo.', ". ';	$No++;
$intruccion[$No] = '						 "'.$CampFech.' = DATE(NOW()), ". ';	$No++;
$intruccion[$No] = '						 "'.$CampEsta.'  = \\\'B\\\' ".';			$No++;

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

	$intruccion[$No] .=  ( $NumeCamp == $TotaCamp ) ? '";' : ' AND ".';

	$NumeCamp ++; $No++;
endforeach;

$intruccion[$No] = '	break;'; 	$No++;
$intruccion[$No] = '} '; 			$No++;
$intruccion[$No] = '  '; 			$No++;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'U', 'C', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//---------------------------------------------------------
//Final del CRUD
$intruccion = array(
'//Ejecuta la instruccion',
'if ($BandMens)  echo "1)$InstSql<br>";',
'$ResuSql = $ConeBase->prepare($InstSql);',
'$ResuSql->execute();',
'$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";',
'if (!$ResuSql) ',
'	echo "<script>alert(\\\'$MensResp\\\');</script>"; ',
'',
'//Para la ALTA',
'if ($CRUD == "POST") ',
' { //Recupera la secuencia ',
'   $InstSql = "SELECT @@identity AS id "; 	',
'   if ($BandMens)  echo "1)$InstSql<br>";', 
'   $RespSql = $ConeBase->prepare($InstSql);',
'   $RespSql->execute();',
'   $ResuSql = $RespSql->fetch();',
'',
'   $CampBusq = 0;',		
'   if ($ResuSql)',
'	    $CampBusq = $ResuSql[0];',
'  }',
'',
'//Defina pagina de regreso',
'$PagiRegr = ($CRUD == "DELETE") ? "location: '.$CRUDBaja.'.php" :',
'								  "location: '.$CRUDAlMo.'.php?PaAMB01=M&PaAMB02=".$CampBusq ; ',
' ',
'if (!$BandMens) header($PagiRegr);	',
'?>');
for ($i=0; $i < 28; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'U', 'C', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}
//---------------------------------------------------------


//**************************************************************
//Crea el archivo List
$InstSql = "SELECT INumero, IInstruccion ".
	   "FROM   ptinstru ". 
	   "WHERE  INombre = '".$TablBaDa."' AND ".  
	   		  "ITipoMovi = 'U' AND ". 
			  "IArchiCrea = 'U' ".
	   "ORDER BY INumero ";
echo 	"1) $InstSql ";    	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//escribir las instrucciones en el archivo
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$CRUD.php";	
$file = fopen($NombArch, "w");
foreach ($ResuSql as $RegiTabl):
	fwrite($file, $RegiTabl['IInstruccion'].PHP_EOL);
endforeach;
fclose($file);

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

//-----------------------------------------------
//Informacion del archivo  SERP
$InstSql = "SELECT INumero, IInstruccion ".
	   "FROM   ptinstru ". 
	   "WHERE  INombre = '".$TablBaDa."' AND ".  
	   		  "ITipoMovi = 'U' AND ". 
			  "IArchiCrea = 'S' ".
	   "ORDER BY INumero "	  ;	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//Crear el archivo SERP
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$CRUD"."SERP.php";	
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
	   		  "ITipoMovi = 'U' AND ". 
			  "IArchiCrea = 'C' ".
	   "ORDER BY INumero "	  ;	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//Crear el archivo SERP
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$CRUD"."CRUD.php";	
$file = fopen($NombArch, "w");
foreach ($ResuSql as $RegiTabl):
	fwrite($file, $RegiTabl['IInstruccion'].PHP_EOL);
endforeach;
fclose($file);

//header("location: VisualizarCampos.php");

?>
