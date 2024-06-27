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
<script src="FracAreaList.js"></script>
<header class="shadow mb-4 bg-white">
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
	include 'FracAreaListSERP.php';
?>	
<!--encabezado--> 
<div class="container table-responsive">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td width="5%"></td>
			<td colspan="2"><a href="FracLista.php" 
					class="btn-Regresar">Regresar</a></td>
		</tr>
		<tr>
			<th>Clave</th>
			<th width="72%">Subinciso</th>
			<th width="23%"></th>
		</tr>
		<?php 
		  foreach($ResSql1 as $RegiTabl){
			  $VC03 = $RegiTabl[0];	
			  $VC04 = $RegiTabl[1];
			  $VC05 = $RegiTabl[2];
			  
		?>
		<tr>
			<td><?=$VC04?></td>
			<td><?=$VC05?></td>
			<td>			 
				 <i class="bi bi-file-arrow-down btn-Modificar ElimArea "
				 data-ConsUnid='<?= $VC03?>' 	
				 title="3er Trimestre"></i>
			</td>
		</tr>
		<?php	} ?> 
	</table>
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td width="5%"></td>
			<td colspan="2"><a href="FracLista.php" 
					class="btn-Regresar">Regresar</a></td>
		</tr>
		<tr>
			<th>Clave</th>
			<th width="72%">Subinciso</th>
			<th width="23%"></th>
		</tr>
		<?php 
		  foreach($ResSql2 as $RegiTabl){
			  $VC03 = $RegiTabl[0];	
			  $VC04 = $RegiTabl[1];
			  $VC05 = $RegiTabl[2];
			  
		?>
		<tr>
			<td><?=$VC04?></td>
			<td><?=$VC05?></td>
			<td>			 
				 <i class="bi bi-file-arrow-down btn-Modificar AltaArea"
				 data-ConsUnid='<?= $VC03?>' 	
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