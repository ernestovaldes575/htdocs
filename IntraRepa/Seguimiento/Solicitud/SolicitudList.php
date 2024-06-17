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
   include($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Encabezado/EncaCook.php');
   //Encabezado	
   require_once($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Encabezado/EncaPrin.php'); 
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
	    $DatoList = "02";
		include ('SolicitudListVC.php');
	 ?>
	</td>
	<td width="11%">
	<?php //Catalogo de mes
	    $DatoList = "03";
		include ('SolicitudListVC.php'); ?>	
	</td>
	<td width="29%"><?php //Catalogo de mes
	    $DatoList = "04";
		include ('SolicitudListVC.php'); ?></td>
	<td width="10%">&nbsp;</td>
	<td colspan="2" align="center">Detalle</td>
	<td width="4%"><?php 
	  if ($Alta == "A"){ ?>
      <i class="bi bi-plus-lg Repa btn-Nuevo" title="AGREGAR" data-id='0'></i>
    <?php } ?></td>
	<td width="10%"><a href="/IntraRepa/MenuIntranet.php" class="btn-Regresar">Regresar</a></td>
  </tr>
  <tr>
    <th>Mes</th>
    <th>Folio</th>
    <th>Repartidos</th>
    <th>Articulo</th>
    <th width="10%">Importe</th>
    <th width="16%">Edo Solicitud</th>
    <th colspan="2">&nbsp;</th>
  </tr>
  <?php 
	foreach ($ResuSql as $RegiTabl):
		$DatoList = "01"; 
		include ('SolicitudListVC.php'); 	
	?>
  <tr>
    <td><?=$VC04?></td>
    <td><?=$VC05?></td>
    <td><?=$VC07?></td>
    <td><?=$VC15?></td>
    <td><?=$VC16?></td>
    <td><?=$VC14?></td>
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