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
<script src="ArtiLista.js"></script>
<header class="shadow mb-4 bg-white">
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
	include 'ArtiListaSERP.php';
?>	
<!--encabezado--> 
<div class="container table-responsive">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td width="14%"></td>
			<td></td>
			<td class="text-end">
				<a href="/Intranet/MenuIntranet.php" class="btn-Regresar">
					Regresar
				</a>
			</td>
		</tr>
		<tr>
			<th class="text-center">Fracción</th>
			<th class="text-center" width="39%">Total</th>
		</tr>
		<?php 
			foreach($ResuSql as $RegiTabl){
					$VC03 = $RegiTabl[0];	
					$VC04 = $RegiTabl[1];	
		?>
		<tr>
			<td class="text-center"><?=$VC03?></td>
			<td class="text-center"><?=$VC04?></td>
			<td class="text-center">
				<i class="bi bi-file-arrow-down btn-Modificar ArtiTrab"
					data-Arti='<?= $VC03?>' title="Articulo"></i>
			</td>
		</tr>
		<?php } ?> 
	</table>
</div>	

<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>