<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	  $RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraAgente/";
      $TituEnca= "Lista de Clientes";
   	  include $RutaIntr.'Encabezado/EncaLiga.php'; ?>
</head>
<script language="JavaScript" src="ClienList.js"></script>
<body>
<header class="header">
   <?php include $RutaIntr.'Encabezado/EncaHead.php'?>
</header>
<?php include 'ClienListSERP.php'; ?>	
<!--encabezado-->
<table width="464" class="ListInfo tabla">
  <tr>
	<td width="14%">
	  <?php //Catalogo de Broker
	    $DatoList = "02";
		include ('ClienListVC.php');
	 ?>
    </td>
	<td width="49%">&nbsp;</td>
	<td width="19%">&nbsp;</td>
	<td width="5%"><?php 
	  if ($Alta == "A"){ ?>
      <i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='0'></i>
    <?php } ?></td>
	<td width="13%"><a href="/IntraAgente/MenuIntranet.php" class="btn-Regresar">Regresar</a></td>
  </tr>
  <tr>
    <th>Folio</th>
    <th>RaZon social</th>
    <th>RFC</th>
    <th colspan="2">&nbsp;</th>
  </tr>
  <?php 
	foreach ($ResuSql as $RegiTabl):
		$DatoList = "01"; 
		include ('ClienListVC.php'); 	
	?>
  <tr>
    <td><?=$VC04?></td>
    <td><?=$VC05?></td>
    <td><?=$VC06?></td>
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
	
	</td>
  </tr>
  <?php	endforeach; ?> 
</table>
<?php require_once($RutaIntr.'Encabezado/PiePagi.php'); ?>
</body>
</html>