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
<script src="Formato.js"></script>
<header class="shadow mb-4 bg-white">
<?php
    $RutaEnca = $_SERVER['DOCUMENT_ROOT'].'/Intranet/';
	include($RutaEnca.'Encabezado/EncaCook.php');
	require_once($RutaEnca.'Encabezado/EncaPrin.php'); 
?>
</header>
<?php include 'FormatoSERP.php'; ?>	
<!--encabezado--> 
<div class="container table-responsive">
	<table class="ListInfo tabla">
		<tr>
			<td colspan="6" class="text-end">
				<a href="/Intranet/MenuIntranet.php" class="btn-Regresar">
					Regresar
				</a>
			</td>
		</tr>
		<tr class="text-center">
			<th width="25%">No.</th>
			<th width="75%">Normatividad</th>
			<th width="10%">Mod</th>
		</tr>
		<?php 
		  foreach($ResuSql as $RegiTabl){
			  $VC03 = $RegiTabl[0];	
			  $VC04 = $RegiTabl[1];	
			  $VC05 = $RegiTabl[2];	
		?>
		<tr class="text-center">
			<td><?=$VC04?></td>
			<td><?=$VC05?></td>
			<td>
			  <i class="bi bi-file-arrow-down btn-Modificar Entrega"
				 data-Cons='<?= $VC03?>' title="Entrega"></i>
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