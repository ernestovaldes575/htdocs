<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	  $RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraClien/";
	  $TituEnca = "Proveedor";
	  include $RutaIntr.'Encabezado/EncaLiga.php';
	?>
</head>	
<body> 
<script language="JavaScript" src="ProveedorList.js"></script>	
 <header class="header">
   <?php include $RutaIntr.'Encabezado/EncaHead.php'?>
 </header>
<?php include 'ProveedorListSERP.php'; ?>	
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
			   data-CoRe="<?= $VC03?>"  title="Empresa"></i>
		
	 <?php } ?>
	</td>
  </tr>
  <?php	endforeach; ?> 
</table>
<?php include $RutaIntr.'Encabezado/EncaPie.php'?>
</body>
</html>