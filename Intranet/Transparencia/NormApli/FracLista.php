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
<script src="FracLista.js"></script>
<header class="shadow mb-4 bg-white">
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
	include 'FracListaSERP.php';
?>	
<!--encabezado--> 
<div class="container table-responsive">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td width="5%"></td>
			<td colspan="2"></td>
			<td><a href="ArtiLista.php" 
					class="btn-Regresar">Regresar </a></td>
		</tr>
		<tr>
			<th>Inciso</th>
			<th width="7%">Subinciso</th>
			<th width="78%">Normatividad</th>
			<th width="10%">&nbsp;</th>
			<th width="0%"></th>
		</tr>
		<?php 
		  foreach($ResuSql as $RegiTabl){
			  $VC03 = $RegiTabl[0];	
			  $VC04 = $RegiTabl[1];
			  $VC05 = $RegiTabl[2];
			  
		?>
		<tr>
			<td><?=$VC03?></td>
			<td><?=$VC04?></td>
			<td><?=$VC05?></td>
			<td>			 
				 <i class="bi bi-file-arrow-down btn-Modificar NumeTrim"
				 data-Inciso='<?= $VC03?>' data-SubInc='<?= $VC04?>' 
				 data-Normat='<?= $VC05?>'	
				 title="3er Trimestre"></i>
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