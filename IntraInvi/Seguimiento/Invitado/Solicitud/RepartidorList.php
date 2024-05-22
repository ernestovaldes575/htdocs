<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/build/css/style.css">
</head>
<script language="JavaScript" src="RepartidorList.js"></script>
<body>
<header>
  <?php 
   //Varibales Globales
   include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaCook.php');
   //Encabezado	
   require_once($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaPrin.php'); 
  ?> 
 </header>
<?php
include 'RepartidorListSERP.php';
?>	
<!--encabezado-->
<table class="ListInfo">
  <tr>
	<td>
	</td>
	<td colspan="2">
    </td>
	<td>
		<a href="SolicitudList.php" class="btn-Regresar">Regresar</a>
	</td>
  </tr>
  <tr>
    <th>Mes</th>
    <th>Folio</th>
    <th>&nbsp;</th>
	<th></th>
  </tr>
  <?php 
	foreach ($ResuSql as $RegiTabl): 
		$VC03=$RegiTabl['CREConsecut'];
		$VC04=$RegiTabl['CREClave'];	
		$VC05=$RegiTabl['CREDescri'];	 
	?>
  <tr>
    <td><?=$VC04?></td>
    <td><?=$VC05?></td>
    <!-- iconos dentro de la libreria font-awesome.min.css -->
	<td data-titulo="Editar: ">
	 <?php if($Alta == "A" ){ ?>
			<i class="bi bi-pencil-square btn-Modificar Empr" 
					data-CaBu="<?= $VC03?>" title="Empresa"></i>
	 <?php } ?>
	</td>
  </tr>
  <?php	endforeach; ?> 
</table>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/PiePagi.php'); 
?>
</body>
</html>