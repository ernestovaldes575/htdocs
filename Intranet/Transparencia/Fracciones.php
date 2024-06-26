<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/Intranet/Css/style.css">
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
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td width="12%"></td>
			<td></td>
			<td></td>
			<td></td>
			<td colspan="2">
				<a href="Ejercicio.php" class="btn-Regresar">
					Regresar
				</a>
			</td>
		</tr>
		<tr>
			<th>Fracción</th>
			<th width="62%">Normatividad</th>
			<th width="6%">Trim01</th>
			<th width="6%">Trim02</th>
			<th width="12%">Trim03</th>
			<th width="12%">Trim04</th>
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
			  
			  $VC08 = ($RegiTabl[5] == -1 ) ? false: true;
			  $VC09 = ($RegiTabl[6] == -1 ) ? false: true;
			  $VC10 = ($RegiTabl[7] == -1 ) ? false: true;
			  $VC11 = ($RegiTabl[8] == -1 ) ? false: true;
		?>
		<tr>
			<td><?=$Frac?></td>
			<td><?=$VC07?> </td>
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