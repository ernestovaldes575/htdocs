<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/build/css/style.css">
</head>
<script src="Fracciones.js"></script>
<body>
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
			<td colspan="2"></td>
			<td>
			  <a href="/Intranet/menuintranet.php" 
					class="btn-Regresar">
			    Regresar
			    </a>		    
				<i class="bi bi-x-square btn-01 Regre"
				   title="Regresar">Regresar</i>	
			</td>
		</tr>
		<tr>
			<th>Ejercicio</th>
			<th width="62%">Descripción</th>
			<th width="12%">Registros</th>
			<th width="14%">&nbsp;</th>
		</tr>
		<?php 
		  foreach($ResuSql as $RegiTabl){
			  $VC03 = $RegiTabl[0];	
			  $VC04 = $RegiTabl[1];	
			  $VC05 = $RegiTabl[2];
			  $VC06 = $RegiTabl[3];
			  $VC07 = $RegiTabl[3];
			  $Frac = "$VC04-$VC05";
			  $Frac = ($VC06 != "" )? $Frac."-$VC06": $Frac;  
		?>
		<tr>
			<td><?=$Frac?></td>
			<td><?=$VC07?> </td>
			<td></td>
			<td data-titulo="Inciso:">
	  		  <i class="bi bi-x-square btn-Modificar Inciso"
				 data-CaBu='<?= $Frac?>' title="Facción"></i>
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