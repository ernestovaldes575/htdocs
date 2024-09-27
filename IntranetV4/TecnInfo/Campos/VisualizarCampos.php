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

    $CamLlaCr = $_POST['CamLlaCr'];
	$VaCaLlCr = $_POST['VaCaLlCr'];
	$CampOrde = $_POST['CampOrde'];

	$CampModi = $_POST['CampModi'];	
	$VariCaMo = $_POST['VariCaMo'];	
	$CampFech = $_POST['CampFech'];	
	$CampEsta = $_POST['CampEsta'];
	

	$InstSql = "UPDATE pttabla  ".
			   "SET TTitulo = '$Titulo',  TRutaArch= '$RutaArch', ". 
  		   		  "TListList= '$ListList', TListRegre= '$ListRegre',". 
				  "TListCRUD= '$ListCRUD', ".
				  "TListAltaL= '$ListAltaL', TListModiL= '$ListModiL',". 
				  "TCRUD= '$CRUD', TCRUDRegr= '$CRUDRegr', ".
				  "TCRUDTerm= '$CRUDTerm', TCRUDTerB= '$CRUDTerb', ".
				  "TCRUDCampLlav = '$CamLlaCr', TCRUDVarCamLla = '$VaCaLlCr', ".
				  "TCampOrde = '$CampOrde', ".
				  "TCampModi= '$CampModi', TVariCamMod = '$VariCaMo', TCampFech= '$CampFech', ".
				  "TCampEsta= '$CampEsta'".
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

		$CapOrdCa = isset($_POST['C8'.$NumeRegi]) ? "A":"I";

		$CapOrdCo = isset($_POST['C9'.$NumeRegi]) ? "A":"I";
		$CapOrdVa = $_POST['C10'.$NumeRegi];	

		$CaptCamp = isset($_POST['C11'.$NumeRegi]) ? "A":"I";

		$CataUtil = isset($_POST['C12'.$NumeRegi]) ? "A":"I";
		$Catalogo = $_POST['C13'.$NumeRegi];
		$CataClav = $_POST['C14'.$NumeRegi];
		$CataDesc = $_POST['C15'.$NumeRegi];		

		$InstSQL = "UPDATE pdcampos ".
				   "SET    CListCondCamp = '$LisConCa',".
						  "CListCondVari = '$LisConVa',". 
						  "CListCampCRUD = '$LisCamCR',". 
						  "CListDesp = '$ListDesp',".   
						  "CListaBusq= '$ListBusq',". 
						  "CCaptCondCamp = '$CapConCa',". 
						  "CCaptCondVari = '$CapConVa',". 
						  "CCampOrdeCond = '$CapOrdCo',". 
						  "CCampOrdeVari = '$CapOrdVa',".
						  "CCampOrdeNume= '$CapOrdCa',". 
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
				  "TCRUD, TCRUDRegr, TCRUDTerm, TCRUDTerB, ".
				  "TCRUDCampLlav, TCRUDVarCamLla, TCampOrde, ".
				  "TCampModi, TVariCamMod,TCampFech, TCampEsta ".
		   "FROM   pttabla ".
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

   $CamLlaCr = $ResuSql['TCRUDCampLlav'];
   $VaCaLlCr = $ResuSql['TCRUDVarCamLla'];
   $CampOrde = $ResuSql['TCampOrde'];

   $CampModi = $ResuSql['TCampModi'];
   $VariCaMo = $ResuSql['TVariCamMod'];	
   $CampFech = $ResuSql['TCampFech'];	
   $CampEsta = $ResuSql['TCampEsta'];
  	
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
  <div class="botones"></div>
<form action="" method="POST" name="formulario">
  <table width="200" border="1">
    <tbody>
      <tr>
        <td valign="top"><h2>Cargar Campos</h2></td>
        <td VALIGN="TOP"><a href="MenuTabla.php" class="regresar">Regresar</a></td>
      </tr>
      <tr>
        <td valign="top"><table width="50%" border="1">
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
              <td>1)Archivo Lista</td>
              <td><input name="ListList" type="text" value="<?= $ListList ?>" style="background:#E1A2A3"></td>
              <td><a href="CreaInfoList.php" class="nuevo">
			  <img src="/Intranet/TecnInfo/imagen/Crear03.png" width="20" height="20" title="Crear ale archivo Lista" /></td>
            </tr>
            <tr>
              <td>2) Regresar</td>
              <td><input name="ListRegre" type="text" value="<?= $ListRegre?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>3) CRUD para un reg</td>
              <td><input name="ListCRUD" type="text" value="<?= $ListCRUD?>" style="background: #B19840"></td>
              <td>
			   <a href="CreaInfoUno.php" class="nuevo">
			    <img src="/Intranet/TecnInfo/imagen/Crear01.jpg" width="20" height="20" title="Crear el archivo CRUD de un registro"/>
				</a>
			  </td>
            </tr>
            <tr>
              <td>4) Alta Lista</td>
              <td><input name="ListAltaL" type="text" value="<?= $ListAltaL?>"></td>
              <td>
				  <a href="CreaInfoAltList.php" class="nuevo">
				  <img src="/Intranet/TecnInfo/imagen/Crear04.png" width="20" height="20" title="Crear el archivo Alta de varios registro"/>
				  </a></td>
            </tr>
            <tr>
              <td>5) Modi Lista</td>
              <td><input name="ListModiL" type="text" value="<?= $ListModiL?>"></td>
              <td>
			  <a href="CreaInfoModList.php" class="nuevo">
                <img src="/Intranet/TecnInfo/imagen/Crear04.png" width="20" height="20" title="Crear el archivo Modi de varios registro" /></a>
                </td>
            </tr>
            <tr>
              <td colspan="3"><img src="Imagen/Lista02.png"/></td>
            </tr>
          </tbody>
        </table></td>
        <td VALIGN="TOP"><table width="50%" border="1">
          <tbody>
            <tr>
              <td colspan="2">1) CRUD</td>
              <td width="41%">
                <input name="CRUD" type="text" value="<?= $CRUD ?>" style="background: #B19840">
              </td>
              <td width="15%"><a href="CrearMovi.php" class="nuevo">Crear</a></td>
            </tr>
            <tr>
              <td colspan="2">2) Regresar</td>
              <td>
                <input name="CRUDRegr" type="text" value="<?= $CRUDRegr ?>"    	style="background:#E1A2A3">
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2">3) Term Alta/Modi</td>
              <td><input name="CRUDTerm" type="text" value="<?= $CRUDTerm ?>" style="background:#B19840">
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2">4) Terminar Baja</td>
              <td>
                <input name="CRUDTerb" type="text" value="<?= $CRUDTerb ?>" style="background:#E1A2A3">
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="38%">5) Campo PK Tabla</td>
              <td width="6%">&nbsp;</td>
              <td><input name="CamLlaCr" type="text" value="<?=$CamLlaCr ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>6)Variable Campo PK Tabla</td>
              <td>&nbsp;</td>
              <td><input name="VaCaLlCr" type="text" value="<?= $VaCaLlCr?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>7) Campo de orden Tabla</td>
              <td><img src="/Intranet/TecnInfo/imagen/BtnInfo01.jpg" width="15" height="15" /></td>
              <td><input name="CampOrde" type="text" value="<?= $CampOrde?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>8) Campo Modi Regis</td>
              <td>
			  <a href="javascript:window.open('Imagen/CampModiRegi.png','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">	
			    <img src="/Intranet/TecnInfo/imagen/BtnInfo01.jpg" width="15" height="15" />
				</a>

			  </td>
              <td><input name="CampModi" type="text" value="<?= $CampModi?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>9) Variable Modi Regi</td>
              <td>
			  <a href="javascript:window.open('Imagen/VariCampModiRegi.png','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">	
			    <img src="/Intranet/TecnInfo/imagen/BtnInfo01.jpg" width="15" height="15" />
				</a>
			  </td>
              <td><input name="VariCaMo" type="text" value="<?= $VariCaMo?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>10) Campo Fecha Mod Reg</td>
              <td>
			  <a href="javascript:window.open('Imagen/CampFechRegi.png','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">	
			    <img src="/Intranet/TecnInfo/imagen/BtnInfo01.jpg" width="15" height="15" />
				</a>
			  </td>
              <td><input name="CampFech" type="text" value="<?= $CampFech?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>11) Campo Edo Reg</td>
              <td>
                <a href="javascript:window.open('Imagen/CampEstaRegi.png','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">	
                  <img src="/Intranet/TecnInfo/imagen/BtnInfo01.jpg" width="15" height="15" />
                  </a>
                </td>
              <td><input name="CampEsta" type="text" value="<?= $CampEsta?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4"><img src="Imagen/Captura02.png" alt="" width="369" height="256"/></td>
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
			  <td bgcolor="#A3B0C8" colspan="2">Condición
			  <a href="javascript:window.open('Imagen/CondList.png','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
			  	  <img src="/Intranet/TecnInfo/imagen/BtnInfo02.jpg" width="15" height="15" />
				</a>
			  </td>
				
				<td>
				<a href="javascript:window.open('Imagen/LlaveCRUDList.png','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">	
			  	  <img src="/Intranet/TecnInfo/imagen/BtnInfo02.jpg" width="15" height="15" />
				</a>  
				</td>
				<td bgcolor="#C6CEDD">
				<a href="javascript:window.open('Imagen/DespList.png','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">	
			  	  <img src="/Intranet/TecnInfo/imagen/BtnInfo02.jpg" width="15" height="15" />
				  </a>  
				</td>
			  	
			  <td>Campo</td>
			  <td colspan="2" style="background-color: yellow;">Codicion CRUD
			  <a href="javascript:window.open('Imagen/CondiCRUD.png','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">	
			    <img src="/Intranet/TecnInfo/imagen/BtnInfo03.jpg" width="15" height="15" />
				</a>				  
			  </td>
			  <td colspan="3"style="background-color:#E0F413;">Orden CRUD No Exist</td>
			  <td bgcolor="#EBF867" style="background-color:#EBF867;">Campo</td>
			  <td colspan="5" bgcolor="#EBF867" style="background-color:#EBF867;">Catalogo</td>
		  </tr>
			<tr>
				<td>Tabla</td>
				<td>Número</td>
				<td>Descripción</td>
				<td>Tipo</td>
				<td>Ancho</td>
				<td bgcolor="#A3B0C8">Campo </td>
				<td bgcolor="#A3B0C8">Variable</td>
				<td>Llave CRUD<!--(col 3)--></td>
				<td bgcolor="#C6CEDD">Desp. Lista<!--(col 3)--></td>
				<td>Busq. Lista<!--(col 4)--></td>
				<td bgcolor="#E0F413" style="background-color: yellow;">Campo</td>
				<td style="background-color: yellow;">Variable</td>
				<td style="background-color:#E0F413;">Orden
				<a href="javascript:window.open('Imagen/CampOrdCRUDNoExiReg.png','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">	
			    <img src="/Intranet/TecnInfo/imagen/BtnInfo03.jpg" width="15" height="15" />
				</a>	
				</td>
				<td style="background-color:#E0F413;">Campo
				<a href="javascript:window.open('Imagen/CondOrdCRUDNoExiReg.png','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">	
			    <img src="/Intranet/TecnInfo/imagen/BtnInfo03.jpg" width="15" height="15" />
				</a>	
				</td>
				<td style="background-color:#E0F413;">Variable</td>
				<td style="background-color:#EBF867;">Captura</td>
				<td style="background-color:#EBF867">Útililzar</td>
				<td style="background-color:#EBF867">Catalogo<!--(col 10)--></td>
				<td style="background-color:#EBF867;">Clave<!--(col 11)--></td>
				<td style="background-color:#EBF867;">Descri<!--(col 12)--></td>
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
				//Condicion campo 
				$CapConCa = $RegiTabl['CCaptCondCamp'];
				$EstaCCCa = ($CapConCa == "A") ? "checked":"";

				$CapConVa = $RegiTabl['CCaptCondVari'];

				//Orden
				$CapOrdCa = $RegiTabl['CCampOrdeNume'];
				$EstaCOCa = ($CapOrdCa == "A") ? "checked":"";
									  
				$CapOrdCo = $RegiTabl['CCampOrdeCond'];
				$EstaCOCo = ($CapOrdCo == "A") ? "checked":"";
									  
				$CapOrdVa = $RegiTabl['CCampOrdeVari'];					  
									  
				//Campo de captura
				$CaptCamp = $RegiTabl['CCaptCamp'];
				$EstaCaCa = ($CaptCamp == "A") ? "checked":"";

				//Utilizar Catalgo					  		
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
				<td><input name="C8<?=$NumeRegi?>" type="checkbox" <?= $EstaCOCa ?>></td>
				<td><input name="C9<?=$NumeRegi?>" type="checkbox" <?= $EstaCOCo ?>></td>
				<td><input name="C10<?=$NumeRegi?>" type="text" value = "<?= $CapOrdVa ?>" style="width: 55px;"></td>
				<td><input name="C11<?=$NumeRegi?>" type="checkbox" <?= $EstaCaCa ?>></td>
				<td><input name="C12<?=$NumeRegi?>" type="checkbox" <?= $EstaCaUt ?>></td>
				<td><input name="C13<?=$NumeRegi?>" type="text" value = "<?= $Catalogo ?>" style="width: 55px;"></td>
				<td><input name="C14<?=$NumeRegi?>" type="text" value = "<?= $CataClav ?>" style="width: 55px;"></td>
				<td><input name="C15<?=$NumeRegi?>" type="text" value = "<?= $CataDesc ?>" style="width: 55px;"></td>
			</tr>
		<?php endforeach ?>
	</tbody>
	</table>
	<input type="submit" name="Enviar" value="Guardar">
  </form>
</div>
</body>
</html>