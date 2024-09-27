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
				  "TCampModi, TCampFech, TCampEsta ".
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
   $CampModi = $ResuSql['TCampModi'];	
   $CampFech = $ResuSql['TCampFech'];	
   $CampEsta = $ResuSql['TCampEsta'];
 }  

 /*
 TipoMpovi: L: Lista
 			U: Archivo CRUD
			A: Archivo Alta Lista
			M: Archivo Modi Lista 

 */
//----------------------------------------------------------------------------------------
//  Crear el archvio php
//----------------------------------------------------------------------------------------

//Borrar datos de la tabla
$InstSql = "DELETE FROM ptinstru ". 
		   "WHERE INombre = '".$TablBaDa."' AND ". 
		   		 "ITipoMovi = 'L' ";
if ($BandInst) echo "2)<br>  $InstSql <br>";		      
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$tot_rows = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetch();

//----------------------------------------------------------------------------------
$intruccion = array(
'<!DOCTYPE html>',
'<html lang="es">',
'<head>',
'  <?php',
'   $RutaEnca = $_SERVER["DOCUMENT_ROOT"]."/Intranet/";',
'	$TituEnca = "'.$Titulo.'";', 
'	include ($RutaEnca."Encabezado/EncaLiga.php");', 
'  ?> ',
'<head> ',
'<script src="'.$ListList.'.js"></script> ',
'<body> ',
'<header class="shadow mb-4 bg-white">',
'<?php include ($RutaEnca."Encabezado/EncaPrin.php"); ?>',
'</header>',
'<?php include "'.$ListList.'SERP.php"; ?>',
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
'		</tr>',
'		<tr align="center">');

//insertar intrucciones a la tabla
for ($i=0, $NumeReng = 1; $i<27; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
		   	   "VALUES ('$TablBaDa', 'L', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
//llamar los encabezados
$InstSql = "SELECT CDescripcion, CComentario ".
		   "FROM   pdcampos ".
		   "WHERE CTabla='".$TablBaDa."' AND ".
					"CListDesp = 'A' ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No=0;
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];
	$ComeCamp = $RegiTabl['CComentario'];
    
	$DescUtil = ( $ComeCamp ?? null ) ?  $NombCamp : $ComeCamp ; 
	$intruccion[$No] = '			<th>'.$ComeCamp.'</th>';		
	  $No++;
endforeach;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'L', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br> ";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
$intruccion = array(
'	<th>',
'	<?php ',
'	  if ($Alta == "A"){ ?>',
'	  <i class="bi bi-plus-lg btn-Nuevo NuevUno" title="Alta de Uno" data-id="0"></i>',
'	 <?php } ?> </th>',
'   <th>',
'   <?php ',
'	  if ($Alta == "A"){ ?>',
'	  <i class="bi bi-align-middle btn-Nuevo NuevList" title="Alta de Lista" data-id="0"></i>',
'	 <?php } ?>	',
'   </th>',
'</tr>',
'<?php ',
' foreach($ResuSql as $RegiTabl){ ');

for ($i=0; $i < 14; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'L', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
//Carga el campo del CRUD y los de desplegados
$InstSql = "SELECT CDescripcion, CComentario ".
		   "FROM   pdcampos ".
		   "WHERE CTabla='".$TablBaDa."' AND ".
					"CListCampCRUD = 'A' ". 
		   "UNION ".			 
		   "SELECT CDescripcion, CComentario ".
		   "FROM   pdcampos ".
		   "WHERE CTabla='".$TablBaDa."' AND ".
					"CListDesp = 'A' ";
if ($BandInst) echo "4)<br>  $InstSql <br>";					
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No=0; $NumeCamp = 3;
foreach ($CampTabl as $RegiTabl):
    $NumCamCa = ($NumeCamp < 10 ) ? "0$NumeCamp": $NumeCamp;

	$DescUtil = ( $ComeCamp ?? null ) ?  $NombCamp : $ComeCamp ; 
	$intruccion[$No] = '			  $VC'.$NumCamCa.' = $RegiTabl['.$No.'];';	
	echo "$intruccion[$No]";	
	$No++; $NumeCamp++;
endforeach;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'L', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
$intruccion = array(
'			  $RutaArch = "/ExpeElectroni/$ClavAyun/Transparen".',
'				  		 "/$ClavForm/";',
'		?>',
'		<tr>');

for ($i=0; $i < 4; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'L', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
$InstSql = "SELECT CDescripcion, CComentario ".
		   "FROM   pdcampos ".
		   "WHERE CTabla='".$TablBaDa."' AND ".
					"CListDesp = 'A' ";
if ($BandInst) echo "4)<br>  $InstSql <br>";					
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$No=0; $NumeCamp = 4;
foreach ($CampTabl as $RegiTabl):
    $NumCamCa = ($NumeCamp < 10 ) ? "0$NumeCamp": $NumeCamp;

	$DescUtil = ( $ComeCamp ?? null ) ?  $NombCamp : $ComeCamp ; 
	$intruccion[$No] = '			<td><?=$VC'.$NumCamCa.'?></td>';	
	echo "$intruccion[$No]";	
	$No++; $NumeCamp++;
endforeach;

for ($i=0; $i < $No; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'L', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------
$intruccion = array(
'			<td></td>',
'			<td data-titulo="Eliminar:">',
'	  			<?php if($Baja == "A"  ) { ?>',
'				<i class="bi bi-x-square btn-Eliminar ElimUno "',
'				data-CaBu="<?= $VC03?>" title="Eliminar"></i>',
'				<?php } ?>',
'			</td>',
'			<td data-titulo="Editar: ">',
'				<?php if($Modi == "A" ){ ?>',
'					<i class="bi bi-pencil-square btn-Modificar ModiUno" ',
'					data-CaBu="<?= $VC03?>" title="Modificar uno"></i>',
'				<?php } ?>',
'			</td>',
'			<td data-titulo="Editar: ">',
'				<?php if($Modi == "A" ){ ?>',
'					<i class="bi bi-file-earmark-ruled btn-Modificar ModiList" ',
'					data-CaBu="<?= $VC03?>" title="Modificar Lista"></i>',
'				<?php } ?>',
'			</td>',
'		</tr>',
'		<?php	} ?> ',
'	</table>',
'</div>	',
'',
'<?php',
'//require_once($_SERVER["DOCUMENT_ROOT"]."Intranet/Encabezado/PiePagi.php"); ',
'?>',
'</body>',
'</html>');

for ($i=0; $i < 31; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'L', 'L', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//----------------------------------------------------------------------------------------
//  Crear el archvio JS
//----------------------------------------------------------------------------------------
$intruccion = array(
'//-------------------------------------------------------------------------',
'',
'//Funcion de alta ',
'document.addEventListener("click", ',
'function (event) { ',
'//------------------------------------------------------------------',
'//Registra uno  ',
'	 if (event.target.classList.contains("NuevUno")) {',
'        window.location.href = "'.$ListCRUD.'.php?PaAMB01=A&PaAMB02=0";',
'      }',
'else if (event.target.classList.contains("NuevList")) { ',
'        window.location.href = "'.$ListAltaL.'.php";',
'       }',
'else if (event.target.classList.contains("ModiUno")) {',
'        CampBusq = event.target.getAttribute("data-CaBu");',
'        window.location.href = "'.$ListCRUD.'.php?PaAMB01=M&PaAMB02="+CampBusq;',
'      } ',
'else if (event.target.classList.contains("ModiList")) {',
'        CampBusq = event.target.getAttribute("data-CaBu");',					
'        window.location.href = "'.$ListModiL.'.php?PaAMB01="+CampBusq;',
'      } ',      
'else if (event.target.classList.contains("ElimUno"))',
'	  if (confirm("¿Estás seguro de que deseas eliminar el registro?")) ',
'      { CampBusq = event.target.getAttribute("data-CaBu");',					
'        window.location.href = "'.$ListCRUD.'.php?PaAMB01=B&PaAMB02="+CampBusq;',
'	  } ',
'',
'});');
	
for ($i=0,$NumeReng =1; $i < 30; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'L', 'J', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}
	
//----------------------------------------------------------------------------------------
//  Crear el archvio SERP
//----------------------------------------------------------------------------------------
//Datos de la tabla
$InstSql = "SELECT TTitulo, TRutaArch, ". 
  		   		  "TListList, TListRegre,". 
				  "TListCRUD, TListAltaL, TListModiL, ". 
				  "TCRUD, TCRUDRegr, TCRUDTerm, TCRUDTerB, ".
				  "TCampModi, TCampFech, TCampEsta, TCampOrde ".
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
   $CampEsta = $ResuSql['TCampEsta'];
   $CampOrde = $ResuSql['TCampOrde'];
 }  

//---------------------------------------------------------
//Recupera el campo llave 
$InstSql = "SELECT CNumero, CDescripcion ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CListCampCRUD = 'A' ". 
		   "ORDER BY CNumero ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$CampCRUD = ""; $NumeCamp = 1;
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];
	$CampCRUD .= ($NumeCamp > 1) ? "," : "";
	$CampCRUD .= $NombCamp;
	$NumeCamp ++;
endforeach;
$CampCRUD .= ",";

//---------------------------------------------------------
//Recupera los campos
$InstSql = "SELECT CNumero, CDescripcion, CComentario ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CListDesp = 'A' ". 
		   "ORDER BY CNumero ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$CampCRUD = ""; $NumeCamp = 1;
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];
	$CampCRUD .= ($NumeCamp > 1) ? "," : "";
	$CampCRUD .= $NombCamp;
	$NumeCamp ++;
endforeach;

//---------------------------------------------------------
//Recupera el campo de condicion 
$InstSql = "SELECT CNumero, CDescripcion, CTipo, CListCondVari ".
		   "FROM   pdcampos ".
		   "WHERE  CTabla='".$TablBaDa."' AND ".
				  "CListCondCamp = 'A' ". 
		   "ORDER BY CNumero ";
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$TotaCamp = $EjInSql->rowCount();
$CampTabl = $EjInSql->fetchAll();//fetch ->una fila que coincida con la clausula

$CondVari = ""; $NumeCamp = 1;
foreach ($CampTabl as $RegiTabl):
	$NombCamp = $RegiTabl['CDescripcion'];
	$Tipocamp = $RegiTabl['CTipo'];
	$VariCond = $RegiTabl['CListCondVari'];
	$CondVari .= ($NumeCamp > 1) ? " AND " : "";

	if ( $Tipocamp == "char" || $Tipocamp == "varchar"  )
	  $CondVari .= ' '.$NombCamp.' = \\\''.$VariCond.'\\\' ';
	else
	  $CondVari .= ' '.$NombCamp.' = '.$VariCond.' '; 
	$NumeCamp ++;
endforeach;

//------------------------------------------------------
//Campo de Estado
if ( $CampEsta ?? null)
  $CondVari .= ' AND '.$CampEsta.' = \\\'A\\\' ';

  
//Campo Orden
$OrdeQuer = "";
if ( $CampOrde ?? null)
  $OrdeQuer .= ' ORDER BY '.$CampOrde.' ';

$intruccion = array(
'<?php',
'	include("../EncaCone.php");',
'',
'//********************************************************************',
'$BandMens = false;',
'if ( isset($_GET["Param0"]) )',
'	$BandMens = true;',
'',
'//Carga el registro para Consulta',
'$InstSql = "SELECT '.$CampCRUD.' ". ',
' 			"FROM   '.$TablBaDa.' ". ',
'			"WHERE  '.$CondVari.' ". ',
'			"'.$OrdeQuer.'"; ',
'			',
'if ($BandMens)  ',
'   echo "1) $InstSql <br>"; ',
'$EjInSql = $ConeBase->prepare($InstSql);',
'$EjInSql->execute();',
'$ResuSql = $EjInSql->fetchAll();',
'?>');
		
for ($i=0,$NumeReng =1; $i < 24; $i++, $NumeReng++){ 
	$InstSql = "INSERT INTO ptinstru ". 
	"VALUES ('$TablBaDa', 'L', 'S', '$NumeReng', '$intruccion[$i]' )";
	if ($BandInst) echo "$NumeReng)<br>  $InstSql <br>";		      
	$EjInSql = $cone->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
}

//**************************************************************
//Crea el archivo List
$InstSql = "SELECT INumero, IInstruccion ".
	   "FROM   ptinstru ". 
	   "WHERE  INombre = '".$TablBaDa."' AND ".  
	   		  "ITipoMovi = 'L' AND ". 
			  "IArchiCrea = 'L' ".
	   "ORDER BY INumero "	  ;	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//escribir las instrucciones en el archivo
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$ListList.php";	
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
	   		  "ITipoMovi = 'L' AND ". 
			  "IArchiCrea = 'J' ".
	   "ORDER BY INumero "	  ;	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();

//crea el archivo JS
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$ListList.js";	
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
	   		  "ITipoMovi = 'L' AND ". 
			  "IArchiCrea = 'S' ".
	   "ORDER BY INumero "	  ;	   
$EjInSql = $cone->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
	
//Crear el archivo SERP
$NombArch = $_SERVER['DOCUMENT_ROOT']. 
				"/$RutaArch/$ListList"."SERP.php";	
$file = fopen($NombArch, "w");
foreach ($ResuSql as $RegiTabl):
	fwrite($file, $RegiTabl['IInstruccion'].PHP_EOL);
endforeach;
fclose($file);


header("location: VisualizarCampos.php");
?>
