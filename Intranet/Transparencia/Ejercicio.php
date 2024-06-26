<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/Intranet/Css/style.css">
</head>
<script src="Ejercicio.js"></script>
<body>
<header class="shadow mb-4 bg-white">
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
	include 'EjercicioSERP.php';
?>	
<!--encabezado--> 
<div class="container table-responsive">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td width="12%"></td>
			<td colspan="2"></td>
			<td>
			  <a href="/Intranet/menuintranet.php" 
					class="btn-Regresar">
			    Regresar
			    </a>		    </td>
		</tr>
		<tr>
			<th>Ejercicio</th>
			<th width="62%">Descripción</th>
			<th width="12%">Registros</th>
			<th width="14%">&nbsp;</th>
		</tr>
		<?php 
		  		foreach($ResuSql as $RegiTabl){
			  $VC03=$RegiTabl[0];	
			  $VC04=$RegiTabl[1];	
			  $VC05=$RegiTabl[2];	
		?>
		<tr>
			<td><?=$VC03?></td>
			<td><?=$VC04?></td>
			<td><?=$VC05?></td>
			<td data-titulo="Modificar:">
	  		  <i class="bi bi-file-earmark-zip btn-Modificar Modi"
				 data-CaBu='<?= $VC03?>' title="Facción"></i>
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