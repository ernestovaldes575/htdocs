<!DOCTYPE html>
<html lang="es">
<head>  
<?php
	  $RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraClien/";
	  $TituEnca = "Detalle de la Solicitud";
	  include $RutaIntr.'Encabezado/EncaLiga.php';
	?>
</head>
<script language="JavaScript" src="SoliDetaList.js"></script>
<body>
<header class="header">
   <?php include $RutaIntr.'Encabezado/EncaHead.php'?>
 </header>
<?php
$CRUD = "GET";
include 'SoliDetaListSERP.php';
?>	
<!--encabezado-->
<table class="ListInfo tabla">
  <tr>
	<td width="7%">
	</td>
	<td colspan="3" align="center">Listado de Articulos
    </td>
	<td colspan="2"><a href="SolicitudList.php" class="btn-Regresar">Regresar</a></td>
  </tr>
  <tr>
    <th>No</th>
    <th width="40%">Descripcion</th>
    <th width="23%">Cantidad</th>
    <th width="15%">Importe</th>
    <th width="6%">&nbsp;</th>
    <th width="9%"><?php 
	  if ($Alta == "A"){ ?>
      <i class="bi bi-plus-lg Repa btn-Nuevo" title="AGREGAR" data-id='0'></i>
      <?php } ?>    </th>
  </tr>
  <?php 
	foreach ($ResuSql as $RegiTabl):
		//Valores de la tabla
  		$VC04 = $RegiTabl['DNumero'];	
   		$VC05 = $RegiTabl['DDescri'];	
   		$VC06 = $RegiTabl['DCatindad'];	 
   		$VC07 = $RegiTabl['DImporte'];	
	?>
  <tr>
    <td><?=$VC04?></td>
    <td><?=$VC05?></td>
    <td><?=$VC06?></td>
    <td><?=$VC07?></td>
	<!-- iconos dentro de la libreria font-awesome.min.css -->
	<td data-titulo="Eliminar:">
	 <?php if($Baja == "A" && ( $EstaSoli == "01" || $EstaSoli == "02")  ) { ?>
		<i class="bi bi-x-square btn-Eliminar Elim"
		   data-CaBu='<?= $VC04?>' title="ELIMINAR"></i>
	 <?php } ?>
	</td>
	<td data-titulo="Editar: ">
	 <?php if($Modi == "A" ){ ?>
			<i class="bi bi-pencil-square btn-Modificar Modi" 
					data-CaBu="<?= $VC04?>" title="MODIFICAR"></i>
	 <?php } ?>
	</td>
  </tr>
  <?php	endforeach; ?> 
</table>
<?php include $RutaIntr.'Encabezado/EncaPie.php'; ?>
</body>
</html>