<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/Intranet/CSS/Estilos/style.css">
</head>
<body>
<script src="Fracciones.js"></script>
<header class="shadow mb-4 bg-white">
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
	include 'FraccionesSERP.php';
?>	
<!--encabezado--> 
<div class="container table-responsive">
	<table class="ListInfo tabla">
		<tr>
			<td colspan="6" class="text-end">
				<a href="Ejercicio.php" class="btn-Regresar">
					Regresar
				</a>
			</td>
		</tr>
		<tr class="text-center">
			<th width="15%">Fracción</th>
			<th width="15%">Normatividad</th>
			<th width="15%">Trim01</th>
			<th width="15%">Trim02</th>
			<th width="15%">Trim03</th>
			<th width="15%">Trim04</th>
		</tr>
		<?php 
		  foreach($ResuSql as $RegiTabl){
			  $VC03 = $RegiTabl[0];	
			  $VC04 = $RegiTabl[1];	
			  $VC05 = $RegiTabl[2];
			  $VC06 = $RegiTabl[3];
			  $Frac = "$VC04-$VC05";
			  $Frac = ($VC06 != "" )? $Frac."-$VC06": $Frac;  
			  
			  $VC07 = $RegiTabl[4];
			  
			  $VC08 = ($RegiTabl[5] == -1 ) ? true: false;
			  $VC09 = ($RegiTabl[6] == -1 ) ? true: false;
			  $VC10 = ($RegiTabl[7] == -1 ) ? true: false;
			  $VC11 = ($RegiTabl[8] == -1 ) ? true: false;
			  $VC12 = $RegiTabl[9] 
		?>
		<tr class="text-center">
			<td><?=$Frac?></td>
			<td><?=$VC07?>-<?=$VC12?> </td>
			<td>
			  <?php if ($VC08) {?>
				 <i class="bi bi-file-arrow-down btn-Modificar NumeTrim"
				 data-Cons='<?= $VC03?>' data-Trim='01' title="1er Trimestre"></i>
			  <?php } else { ?>	
				<i class="bi bi-file-earmark-break btn-Eliminar" title="1er trimestre"></i>
			  <?php } ?>	
			</td>
			<td>
			 <?php if ($VC09) {?>
				 <i class="bi bi-file-arrow-down btn-Modificar NumeTrim"
				 data-Cons='<?= $VC03?>' data-Trim='02' title="2do Trimestre"></i>
			  <?php } else { ?>	
				<i class="bi bi-file-earmark-break btn-Eliminar" title="2do trimestre"></i>
			  <?php } ?>	
			</td>
			<td>
			 <?php if ($VC10) {?>
				 <i class="bi bi-file-arrow-down btn-Modificar NumeTrim"
				 data-Cons='<?= $VC03?>' data-Trim='03' title="3er Trimestre"></i>
			  <?php } else { ?>	
				<i class="bi bi-file-earmark-break btn-Eliminar" title="3er trimestre"></i>
			  <?php } ?>	 
			</td>
			<td>
			 <?php if ($VC11) {?>
				 <i class="bi bi-file-arrow-down btn-Modificar NumeTrim"
				 data-Cons='<?= $VC03?>' data-Trim='04' title="4to Trimestre"></i>
			  <?php } else { ?>	
				<i class="bi bi-file-earmark-break btn-Eliminar" title="4to trimestre"></i>
			  <?php } ?>	
			</td>
		</tr>
		<?php	} ?> 
	</table>
</div>	

<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>