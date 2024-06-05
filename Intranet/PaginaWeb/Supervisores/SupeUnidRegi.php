<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	   $TituEnca = "Unidad";
	   include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaLiga.php'); ?>
</head>
<script language="JavaScript" src="SupeUnidRegi.js"></script>
<body>
<header>
<?php 
  //Varibales Globales
  include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
  //Encabezado	
  require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
  ?> 
 </header> 
<?php
	include 'SupeUnidRegiSERP.php';
?>	
<br>
<table width="50%" class="ListInfo tabla">
  <thead>
	<tr>
		<th width="34">Titulo</th>
		<th width="72">Descripcion</th>
		<th width="31"><span class="botones"><a href="/Intranet/menuintranet.php" class="regresar">Regresar</a></span></th>		
	</tr>
  </thead>
  <tbody>
  <?php 
	foreach ($UnidSupe as $RegiTabl): 
 			 $VC03=$RegiTabl[0];		//SUnidad, , 
			 $VC04=$RegiTabl[1];		//CUNClaveUnidad,
			 $VC05=$RegiTabl[2];		//CUNDescripcion,
	?>
	<tr>
		<td><?=$VC04?></td>				<!--Cambiar-->
		<td><?=$VC05?></td>
		<td>
		<?php if($Baja == "A" ){ ?>
			<i class="bi bi-x-square Elim btn-Eliminar"
				data-id='<?= $VC03?>' title="ELIMINAR"></i>
		<?php } ?>
        </td>				
	</tr>
	<?php endforeach ?>
  </tbody>
</table>
<br>
<table width="50%" class="ListInfo tabla">
  <thead>
	<tr>
		<th width="34">Titulo</th>
		<th width="72">Descripcion</th>
		<th width="31">&nbsp;</th>
	</tr>
  </thead>
  <tbody>
	<?php 
	foreach ($CataUnid as $RegiTabl): 
		    $VC03=$RegiTabl[0];		//CUNConsecutivo
			$VC04=$RegiTabl[1];		//CUNClaveUnidad
			$VC05=$RegiTabl[2];		//CUNDescripcion
	?>
	<tr>
		<td><?=$VC04?></td>				<!--Cambiar-->
		<td><?=$VC05?></td>
		<td>
		 <?php if($Baja == "A"  ){ ?>
			<i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='<?= $VC03?>'></i> 
		  <?php } ?>		
		</td>				
	</tr>
	<?php endforeach ?>
  </tbody>
</table>
</body>
</html>