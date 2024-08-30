<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/IntraAten/Css/style.css">
</head>
<script language="JavaScript" src="ClientesList.js"></script>
<body>
<header>
  <?php 
   //Varibales Globales
   include($_SERVER['DOCUMENT_ROOT'].'/IntraAten/Encabezado/EncaCook.php');
   //Encabezado	
   require_once($_SERVER['DOCUMENT_ROOT'].'/IntraAten/Encabezado/EncaPrin.php'); 
  ?> 
 </header>
<?php
$CRUD = "GET";
include 'ClientesListSERP.php';
?>	
<!--encabezado-->
<table class="ListInfo tabla">
  <tr>
	<td width="10%">
	<?php 
	    $DatoList = "02";
		include ('ClientesListVC.php'); ?>
	</td>
	<td width="11%">
	</td>
	<td width="29%"></td>
	<td width="4%"><?php 
	  if ($Alta == "A"){ ?>
      <i class="bi bi-plus-lg Nuevo btn-Nuevo" title="AGREGAR" data-id='0'></i>
    <?php } ?></td>
	<td width="10%"><a href="/IntraAten/MenuIntranet.php" class="btn-Regresar">Regresar</a></td>
  </tr>
  <tr>
    <th>Razon</th>
    <th>RFC</th>
    <th>Municipio</th>
    <th colspan="2">&nbsp;</th>
  </tr>
  <?php 
	foreach ($ResuSql as $RegiTabl):
		$DatoList = "01"; 
		include ('ClientesListVC.php'); 	
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
		<a href="SoliDetaListInic.php?Param1=<?= $VC03?>">Detalle</a>
	</td>
  </tr>
  <?php	endforeach; ?> 
</table>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/IntraAten/Encabezado/PiePagi.php'); 
?>
</body>
</html>