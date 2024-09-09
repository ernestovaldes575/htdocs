<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	   $TituEnca = "Supervisores por área";
	   include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaLiga.php'); ?>
</head>
<body>
<script language="JavaScript" src="SuperviDepe.js"></script>	
<header>
<?php 
  //Varibales Globales
  include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
  //Encabezado	
  require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
  ?> 
 </header> 
<?php	
  include 'SuperviDepeSERP.php';
?>	
<br>
<table width="70%" class="ListInfo tabla">
	<thead>
		<tr>
			<td width="35">Clave</td>				<!--Cambiar-->
			<td width="138">Descripcion</td>		<!--Cambiar-->
			<td width="79">
			 <i class="bi bi-arrow-bar-left btn-8 btn-Regresar Regr">Regresar</i>
			</td>
		</tr>
	</thead>
	<tbody>
	<?php 
		foreach ($UnidSupe as $RegiTabl): 
		    $VC03=$RegiTabl[0];		//SUnidad
			$VC04=$RegiTabl[1];		//CUNClaveUnidad
			$VC05=$RegiTabl[2];		//CUNDescripcion
				?>
		<tr>
			<td><?=$VC04?></td>				<!--Cambiar-->
			<td><?=$VC05?></td>				<!--Cambiar-->
			<td>
			<?php if($Modi == "A" ){ ?>
				<i class="bi bi-pencil-square btn-Modificar Modi" 
					data-CoUn="<?= $VC03?>" title="Supervisor"></i>
			<?php } ?>
			</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>
</body>
</html>