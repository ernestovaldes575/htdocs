<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/IntraInvi/Css/style.css">
</head>
<script language="JavaScript" src="SolicitudList.js"></script>
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
$CRUD = "GET";
include 'SolicitudListSERP.php';
?>	
<!--encabezado-->
<table class="ListInfo tabla">
  <tr>
	<td width="10%">
	 <?php //Catalogo de Ejercicio
	    $DatoList = "01";
		include ('SolicitudListVC.php');
	 ?>
	</td>
	<td width="11%">
	<?php //Catalogo de mes
	    $DatoList = "02";
		include ('SolicitudListVC.php'); ?>	
	</td>
	<td width="17%">&nbsp;</td>
	<td width="15%">&nbsp;</td>
	<td width="27%">&nbsp;</td>
	<td width="10%"><?php 
	  if ($Alta == "A"){ ?>
      <i class="bi bi-plus-lg Repa btn-Nuevo" title="AGREGAR" data-id='0'></i>
    <?php } ?></td>
	<td width="10%"><a href="/IntraInvi/MenuIntranet.php" class="btn-Regresar">Regresar</a></td>
  </tr>
  <tr>
    <th>Mes</th>
    <th>Folio</th>
    <th>Importe</th>
    <th>Estado</th>
    <th>&nbsp;</th>
    <th colspan="2">&nbsp;</th>
  </tr>
  <?php 
	foreach ($ResuSql as $RegiTabl):
		$DatoList = "03"; 
		include ('SolicitudListVC.php'); 	
	?>
  <tr>
    <td><?=$VC04?></td>
    <td><?=$VC05?></td>
    <td><?=$VC09?></td>
    <td><?=$VC10?></td>
    <td><?=$VC11?></td>
	<!-- iconos dentro de la libreria font-awesome.min.css -->
	<td data-titulo="Eliminar:">
	 <?php if($Baja == "A"  ) { ?>
		<i class="bi bi-x-square btn-Eliminar Elim"
		   data-CaBu='<?= $VC03?>' title="ELIMINAR"></i>
	 <?php } ?>
	</td>
	<td data-titulo="Editar: ">
	 <?php if($Modi == "A" ){ ?>
		<i class="bi bi-pencil-square btn-Modificar Modi" 
					data-CaBu="<?= $VC03?>" title="MODIFICAR"></i>
	 <?php } ?>
		<a href="SoliDetaListInic.php?Param1=<?= $VC03?>">Detalle</a>
	</td>
  </tr>
  <?php	endforeach; ?> 
</table>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/PiePagi.php'); 
?>
</body>
</html>