<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/IntraInvi/Css/style.css">
</head>
<script language="JavaScript" src="DocumenList.js"></script>
<body>
<header>
  <?php 
   //Varibales Globales
   include($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Encabezado/EncaCook.php');
   //Encabezado	
   require_once($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Encabezado/EncaPrin.php'); 
  ?> 
 </header>
<?php
include 'DocumenListSERP.php';
?>	
<!--encabezado-->
<table class="ListInfo tabla">
  <tr>
	<td width="9%">&nbsp;</td>
	<td width="18%">&nbsp;</td>
	<td width="53%">&nbsp;</td>
	<td width="20%"><a href="/IntraRepa/MenuIntranet.php" class="btn-Regresar">Regresar</a></td>
  </tr>
  <tr>
    <th>Mes</th>
    <th>Folio</th>
    <th>Documento</th>
    <th>&nbsp;</th>
  </tr>
  <?php 
	foreach ($ResuSql as $RegiTabl):
		$DatoList = "03"; 
		include ('DocumenListVC.php'); 	
	?>
  <tr>
    <td><?=$VC03?></td>
    <td><?=$VC04?></td>
    <td>
      <!-- Subir imagen -->
      <a href="#" onclick="CarImgPa(<?=$VC03?>)"> <i class="bi bi-file-arrow-up-fill text-dark fs-1"></i> </a>
      <!-- Visualizar Image -->
      <?php 
	 	if ( $VC05 != '' ) { ?>
      <a href="javascript:window.open('<?=$RutaArch.$VC05?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0"> <i class="bi bi-eye-fill fs-1 text-success"></i>
    <?php  echo "</a> "; } ?></td>
    <!-- iconos dentro de la libreria font-awesome.min.css -->
	<td data-titulo="Editar: ">&nbsp;</td>
  </tr>
  <?php	endforeach; ?> 
</table>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/PiePagi.php'); 
?>
</body>
</html>