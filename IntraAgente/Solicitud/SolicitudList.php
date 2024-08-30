<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	  $RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraAgente/";
	  $TituEnca = "Solicitud";
	  include $RutaIntr.'Encabezado/EncaLiga.php';
	?>
</head>	
<body> 
<script language="JavaScript" src="SolicitudList.js"></script>	
 <header class="header">
   <?php include $RutaIntr.'Encabezado/EncaHead.php'?>
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
	<td width="29%">
	<?php //Catalogo de mes
	    $DatoList = "04";
		include ('SolicitudListVC.php'); ?></td>
	<td width="10%">&nbsp;</td>
	<td colspan="2" align="center">Detalle</td>
	<td width="4%"><?php 
	  if ($Alta == "A" && $EstaTrab == "01" ){ ?>
        <i class="bi bi-plus-lg Repa btn-Nuevo" title="AGREGAR" data-id='0'></i>

    <?php } ?></td>
	<td width="10%"><a href="/IntraClien/MenuIntranet.php" class="btn-Regresar">Regresar</a></td>
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
    <td><?=$VC14?>
	<?php if($VC13 == "01" || $VC13 == "02" ) { ?>
	    <a href="SolicitudList.php?Param4=<?= $VC03?>&Param5=<?= $VC13?>">Camb </a>
	<?php } ?>	
	</td>
	<!-- iconos dentro de la libreria font-awesome.min.css -->
	<td data-titulo="Eliminar:">
	 <?php if($Baja == "A" && $VC13 == "01" ) { ?>
		<i class="bi bi-x-square btn-Eliminar Elim"
		   data-CaBu='<?= $VC03?>' data-CaES='<?= $VC13?>' title="ELIMINAR"></i>
	 <?php } ?>
	</td>
	<td data-titulo="Editar: ">
	 <?php if($Modi == "A" && ( $VC13 == "01" || $VC13 == "02" ) ){ ?>
		<i class="bi bi-pencil-square btn-Modificar Modi" 
					data-CaBu="<?= $VC03?>" data-CaES='<?= $VC13?>' title="MODIFICAR"></i>
	 <?php } ?>
	 <a href="SoliDetaListInic.php?Param1=<?= $VC03?>&Param2=<?= $VC13?>">Detalle</a>
	</td>
  </tr>
  <?php	endforeach; ?> 
</table>
<?php include $RutaIntr.'Encabezado/EncaPie.php'; ?>
</body>
</html>