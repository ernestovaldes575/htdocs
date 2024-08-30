<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CargaCampos</title>
	<link rel="stylesheet" href="../../Archivos/CSS/Consu.css">
	<!--icono de la pestaña (logo)-->
	<link rel="shortcut icon" href="../../Archivos/Img/logoEnc.ico" />
	<!-- iconos -->
	<link rel="stylesheet" href="../../Archivos/CSS/font-awesome.min.css">
</head>
<body>	
<?php
//archivo de conexion a la bd
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Archivos/Conexiones/conteinf.php');

//Carga las variables
$ArCooki1 = $_COOKIE['CMenu'];
$AMenu = explode("|", $ArCooki1);
$ClavMenu = $AMenu[0];
$DescMenu = $AMenu[1];
$BaseDato = $AMenu[2];
$TablBaDa = $AMenu[3];

$BandInst = false;
	
if( isset($_POST['Enviar']) ){
	//Datos de la tabla
	$Titulo   = $_POST['Titulo'];
	$RutaArch = $_POST['RutaArch'];
	$ListList = $_POST['ListList']; 
	$ListRegre= $_POST['ListRegre'];
	$ListCRUD = $_POST['ListCRUD'];
	$ListAltaL= $_POST['ListAltaL'];
	$ListModiL= $_POST['ListModiL'];
	$CRUD     = $_POST['CRUD'];
	$CRUDRegr = $_POST['CRUDRegr']; 
	$CRUDTerm = $_POST['CRUDTerm']; 
	$CRUDTerb = $_POST['CRUDTerb']; 
    
	$InstSql = "UPDATE pttabla  ".
			   "SET TTitulo = '$Titulo',  TRutaArch= '$RutaArch', ". 
  		   		  "TListList= '$ListList', TListRegre= '$ListRegre',". 
				  "TListCRUD= '$ListCRUD', ".
				  "TListAltaL= '$ListAltaL', TListModiL= '$ListModiL',". 
				  "TCRUD= '$CRUD', TCRUDRegr= '$CRUDRegr', ".
				  "TCRUDTerm= '$CRUDTerm', TCRUDTerB= '$CRUDTerb' ".
			   "WHERE  TNombre = '$TablBaDa' ";	
	if ($BandInst) echo "1)<br>  $InstSql <br>";		      
	$EjecInst = $cone->prepare($InstSql);
	$EjecInst->execute();

	//---------------------------------------------------------
	//Capos de la tabla 
	$InstSQL = "SELECT CNumero  ".
			   "FROM pdcampos ".
			   "WHERE CTabla= '$TablBaDa' ". 
			   "ORDER BY cast(CNumero as int) ";	
	if ($BandInst) echo "2)<br>  $InstSQL <br>"; 	   
	$EjecInst = $cone->prepare($InstSQL);
	$EjecInst->execute();
	$tot_rows = $EjecInst->rowCount();
	$ResuInst = $EjecInst->fetchAll();

	foreach ($ResuInst as $RegiTabl):
		$NumeRegi  = $RegiTabl['CNumero'];
		
		//----------------------------------------------
		//Lista
		//						  Col, ren	
		$LisConCa = isset($_POST['C01'.$NumeRegi]) ? "A":"I";
		$LisConVa = $_POST['C2'.$NumeRegi];

		$LisCamCR = isset($_POST['C3'.$NumeRegi]) ? "A":"I";

		$ListDesp = isset($_POST['C4'.$NumeRegi]) ? "A":"I";
		$ListBusq = isset($_POST['C5'.$NumeRegi]) ? "A":"I";

		//----------------------------------------------	
		//Campo de Captura
		$CapConCa = isset($_POST['C6'.$NumeRegi]) ? "A":"I";
		$CapConVa = $_POST['C7'.$NumeRegi];

		$CaptCamp = isset($_POST['C8'.$NumeRegi]) ? "A":"I";

		$CataUtil = isset($_POST['C9'.$NumeRegi]) ? "A":"I";
		$Catalogo = $_POST['C10'.$NumeRegi];
		$CataClav = $_POST['C11'.$NumeRegi];
		$CataDesc = $_POST['C12'.$NumeRegi];		

		$InstSQL = "UPDATE pdcampos ".
				   "SET    CListCondCamp = '$LisConCa',".
						  "CListCondVari = '$LisConVa',". 
						  "CListCampCRUD = '$LisCamCR',". 
						  "CListDesp = '$ListDesp',".   
						  "CListaBusq= '$ListBusq',". 
						  "CCaptCondCamp = '$CapConCa',". 
						  "CCaptCondVari = '$CapConVa',". 
						  "CCaptCamp = '$CaptCamp',".  
						  "CCataUtil = '$CataUtil',".      
						  "CCatalogo = '$Catalogo',".      
						  "CCataClav = '$CataClav',".  
						  "CCataDesc = '$CataDesc' ".   
				   "WHERE  CTabla = '$TablBaDa' AND ".
						  "CNumero = $NumeRegi ";
		if ($BandInst) echo "3)<br>  $InstSql <br>";		      
		$resultado1 = $cone->prepare($InstSQL);
		$resultado1->execute();
	endforeach;		
  }

//Datos de la tabla
$InstSql = "SELECT TTitulo, TRutaArch, ". 
  		   		  "TListList, TListRegre,". 
				  "TListCRUD, TListAltaL, TListModiL, ". 
				  "TCRUD, TCRUDRegr, TCRUDTerm, TCRUDTerB ".
		   "FROM   pttabla  ".
		   "WHERE  TNombre = '$TablBaDa' ";	
if ($BandInst) echo "4)<br>  $InstSql <br>";		      
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
   $CRUDTerm = $ResuSql['TCRUDTerm']; 
   $CRUDTerb = $ResuSql['TCRUDTerB'];	
 }  


//query que reupera los campos de la tabla
$InstSql = "SELECT * ".
		   "FROM pdcampos ".
		   "WHERE CTabla= '$TablBaDa' ".
		   "Order by cast(CNumero as int) ";
if ($BandInst) echo "5)<br>  $InstSql <br>";		      		   	   
$EjecInst = $cone->prepare($InstSql);
$EjecInst->execute();
$tot_rows = $EjecInst->rowCount();
$ResuInst = $EjecInst->fetchAll();

?>	
<!--encabezado-->
<header> 
	 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Archivos/Files/header.php'); ?> 
</header>
<br>
<div class="tabla">
	<div class="titulo"><h2>Cargar Campos</h2></div>
	<div class="botones">
		<a href="MenuTabla.php" class="regresar">Regresar</a>
	</div>
<form action="" method="POST" name="formulario">
  <table width="200" border="1">
    <tbody>
      <tr>
        <td><table width="50%" border="1">
          <tbody>
            <tr>
              <td width="40%">Titulo</td>
              <td width="40%" ><input type="text" name="Titulo" style="width: 190px;" size="80" value="<?=$Titulo?>"></td>
              <td width="20%">&nbsp;</td>
              </tr>
            <tr>
              <td>Ruta de los archivo</td>
              <td><input type="text" name="RutaArch" style="width: 190px;" size="80" value="<?=$RutaArch?>">
                </td>
              <td><a href="javascript:window.open('2dir.php?carpeta=','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">Imagen</a></td>
            </tr>
            <tr>
              <td>1) Nombre del archivo</td>
              <td><input name="ListList" type="text" value="<?= $ListList ?>" style="background:#E1A2A3"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>2) Regr</td>
              <td><input name="ListRegre" type="text" value="<?= $ListRegre?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>3) ABC uno</td>
              <td><input name="ListCRUD" type="text" value="<?= $ListCRUD?>" style="background: #B19840"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>4) Alta Lista</td>
              <td><input name="ListAltaL" type="text" value="<?= $ListAltaL?>"></td>
              <td><a href="CrearMovi.php" class="nuevo">Crear</a></td>
            </tr>
            <tr>
              <td>5) Modi Lista</td>
              <td><input name="ListModiL" type="text" value="<?= $ListModiL?>"></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3"><img src="Imagen/Lista02.png"/></td>
              </tr>
          </tbody>
        </table></td>
        <td VALIGN="TOP"><table width="50%" border="1">
          <tbody>
            <tr>
              <td width="18%">ABC</td>
              <td width="66%">
              <input name="CRUD" type="text" value="<?= $CRUD ?>" style="background: #B19840">
               </td>
              <td width="16%"><a href="CrearMovi.php" class="nuevo">Crear</a></td>
            </tr>
            <tr>
              <td>Regr</td>
              <td>
                <input name="CRUDRegr" type="text" value="<?= $CRUDRegr ?>"    	style="background:#E1A2A3">
                </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Term Alta/Modi</td>
              <td><input name="CRUDTerm" type="text" value="<?= $CRUDTerm ?>" style="background:#B19840">
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Term Baja</td>
              <td>
                <input name="CRUDTerb" type="text" value="<?= $CRUDTerb ?>" style="background:#E1A2A3">
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3"><img src="Imagen/Captura02.png" alt=""/></td>
            </tr>
            </tbody>
        </table></td>
      </tr>
    </tbody>
  </table>
  <br>	
  <table>
    <thead>

			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="2">Condición</td>
			  <td colspan="3">Campo</td>
			  <td style="background-color: yellow;">&nbsp;</td>
			  <td style="background-color: yellow;">&nbsp;</td>
			  <td style="background-color: yellow;">&nbsp;</td>
			  <td style="background-color: yellow;">&nbsp;</td>
			  <td style="background-color: yellow;">&nbsp;</td>
			  <td style="background-color: yellow;">&nbsp;</td>
			  <td style="background-color: yellow;">&nbsp;</td>
		  </tr>
			<tr>
				<td>Tabla</td>
				<td>Número</td>
				<td>Descripción</td>
				<td>Tipo</td>
				<td>Ancho</td>
				<td>Campo </td>
				<td>Varia <!--(col 2)--></td>
				<td> Llave ABC<!--(col 3)--></td>
				<td>Desp. Lista<!--(col 3)--></td>
				<td>Busq. Lista<!--(col 4)--></td>
				<td style="background-color: yellow;">Campo Capt.<!--(col 6)--></td>
				<td style="background-color: yellow;">Campo Key<!--(col 7)--></td>
				<td style="background-color: yellow;">Campo Defa.<!--(col 8)--></td>
				<td style="background-color: yellow;">Útil Cata.<!--(col 9)--></td>
				<td style="background-color: yellow;">Catalogo<!--(col 10)--></td>
				<td style="background-color: yellow;">Clave Cata.<!--(col 11)--></td>
				<td style="background-color: yellow;">Desc. Cata.<!--(col 12)--></td>
			</tr>
	  </thead>
		<tbody>
		<?php 
			foreach ($ResuInst as $RegiTabl):
				//Datos del campo
			  	$Tabla    = $RegiTabl['CTabla'];
				$NumeRegi = $RegiTabl['CNumero'];
				$Descrip  = $RegiTabl['CDescripcion'];
				$Tipo     = $RegiTabl['CTipo'];
				$Ancho    = $RegiTabl['CAncho'];
				$Comenta  = $RegiTabl['CComentario'];

				//----------------------------------------------
				//Lista
				$LisConCa = $RegiTabl['CListCondCamp'];
				$EstaLCCa = ($LisConCa == "A") ? "checked":"";

				$LisConVa = $RegiTabl['CListCondVari'];

				$LisCamCR = $RegiTabl['CListCampCRUD'];
				$EstaLCCR = ($LisCamCR == "A") ? "checked":"";

				$ListDesp = $RegiTabl['CListDesp'];
				$EstaLiDe = ($ListDesp == "A") ? "checked":"";

				$ListBusq = $RegiTabl['CListaBusq'];
				$EstaLiBu = ($ListBusq == "A") ? "checked":"";

				//----------------------------------------------	
				//Campo de Captura
				$CapConCa = $RegiTabl['CCaptCondCamp'];
				$EstaCCCa = ($CapConCa == "A") ? "checked":"";

				$CapConVa = $RegiTabl['CCaptCondVari'];

				$CaptCamp = $RegiTabl['CCaptCamp'];
				$EstaCaCa = ($CaptCamp == "A") ? "checked":"";

				$CataUtil = $RegiTabl['CCataUtil'];
				$EstaCaUt = ($CataUtil == "A") ? "checked":"";

				$Catalogo = $RegiTabl['CCatalogo'];
				$CataClav = $RegiTabl['CCataClav'];
				$CataDesc = $RegiTabl['CCataDesc'];		

			?>
			<tr>
				<td><?=$Tabla?></td>
				<td><?=$NumeRegi?></td>
				<td><?=$Descrip?></td>
				<td><?=$Tipo?></td>
				<td><?=$Ancho?></td>
				<td><input name="C01<?=$NumeRegi?>" type="checkbox" <?= $EstaLCCa ?>></td>
				<td><input name="C2<?=$NumeRegi?>" type="text" value = "<?= $LisConVa ?>" style="width: 55px;"></td>
				<td><input name="C3<?=$NumeRegi?>" type="checkbox" <?= $EstaLCCR ?>></td>
				<td><input name="C4<?=$NumeRegi?>" type="checkbox" <?= $EstaLiDe ?>></td>
				<td><input name="C5<?=$NumeRegi?>" type="checkbox" <?= $EstaLiBu ?>></td>
				<td><input name="C6<?=$NumeRegi?>" type="checkbox" <?= $EstaCCCa ?>></td>
				<td><input name="C7<?=$NumeRegi?>" type="text" value = "<?= $CapConVa ?>" style="width: 55px;"></td>
				<td><input name="C8<?=$NumeRegi?>" type="checkbox" <?= $EstaCaCa ?>></td>
				<td><input name="C9<?=$NumeRegi?>" type="checkbox" <?= $EstaCaUt ?>></td>
				<td><input name="C10<?=$NumeRegi?>" type="text" value = "<?= $Catalogo ?>" style="width: 55px;"></td>
				<td><input name="C11<?=$NumeRegi?>" type="text" value = "<?= $CataClav ?>" style="width: 55px;"></td>
				<td><input name="C12<?=$NumeRegi?>" type="text" value = "<?= $CataDesc ?>" style="width: 55px;"></td>
			</tr>
		<?php endforeach ?>
	</tbody>
	</table>
	<input type="submit" name="Enviar" value="Guardar">
	</form>
	</div>
</body>
</html>