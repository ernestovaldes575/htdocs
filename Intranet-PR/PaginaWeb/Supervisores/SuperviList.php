<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	   $TituEnca = "Listado de Supervisores";
	   include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaLiga.php'); ?>
</head>
<body>
<script language="JavaScript" src="SuperviList.js"></script>	
<header>
<?php 
  //Varibales Globales
  include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
  //Encabezado	
  require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
  ?> 
 </header>  
<?php
$CRUD = "GET";
include 'SuperviListSERP.php';
?>	
<table width="70%" class="ListInfo tabla">
  <thead>
	<tr>
		<th width="15%">No Empleado</th>
		<th width="28%">Nombre</th>
		<th width="25%">Categoria</th>
		<th width="13%">Foto</th>	
		<th width="7%">
		<?php 
		   if ($Alta == "A"){ ?>
             <i class="bi bi-plus-lg Nuev btn-Nuevo" title="Agregar"></i>
        <?php } ?>   	  
		</th>
		<th width="12%">
			<i class="bi bi-arrow-bar-left btn-Regresar Regr">Regresar</i>
		</th>	
	</tr>
  </thead>
  <tbody>
	<?php 
	foreach ($ListSupe as $RegiTabl): 
		    $VC03=$RegiTabl[0];		//SConsecut
			$VC04=$RegiTabl[1];		//SNumeEmpl
			$VC05=$RegiTabl[2];		//SServPubli
			$VC06=$RegiTabl[3];		//SCategoria
			$VC07=$RegiTabl[4];		//SFoto
			$RutaArch = '/ExpeElectroni/'.$ClavAyun.'/Supervisor/'.$VC07;
	?>
	<tr>
		<td><?=$VC04?></td>				<!--Cambiar-->
		<td><?=$VC05?></td>				<!--Cambiar-->
		<td><?=$VC06?></td>				<!--Cambiar-->
		<td>
		  <a href="#" onclick="CargImag(<?= $VC03?>)">
		  Doc</a>
		<? if ( $VC10 != "" ) { ?>
		  <a href="javascript:window.open('<?=$RutaArch?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
		  img </a>  
		<? } ?>					
		</td>	
		<td data-titulo="Eliminar:">
	  	  <?php if ($Baja == "A"  ) { ?>
				<i class="bi bi-x-square btn-Eliminar Elim"
				data-CaBu='<?= $VC03?>' title="Eliminar"></i>
		  <?php } ?>
		</td>
		<td data-titulo="Eliminar:"><?php if ($Modi == "A" ){ ?>
          <i class="bi bi-pencil-square btn-Modificar Modi" 
					data-CaBu="<?= $VC03?>" title="Modificar"></i>
        <?php } ?></td>
	</tr>
	<?php endforeach ?>
  </tbody>
</table>
</body>
</html>