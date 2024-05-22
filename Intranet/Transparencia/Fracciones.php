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
			<td colspan="5"></td>
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
			<th>Fracción</th>
			<th width="62%">Normatividad</th>
			<th width="6%">Trim01</th>
			<th width="6%">Trim02</th>
			<th width="12%">Trim03</th>
			<th width="12%">Trim04</th>
			<th width="14%">&nbsp;</th>
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
				 <i class="bi bi-x-square btn-Modificar Inciso"
				 data-Cons='<?= $VC03?>' data-Trim='1' title="Facción"></i>
			  <?php } ?>	
			</td>
			<td>
			 <?php if ($VC09) {?>
				 <i class="bi bi-x-square btn-Modificar Inciso"
				 data-Cons='<?= $VC03?>' data-Trim='2' title="Facción"></i>
			  <?php } ?>	
			</td>
			<td>
			 <?php if ($VC10) {?>
				 <i class="bi bi-x-square btn-Modificar Inciso"
				 data-Cons='<?= $VC03?>' data-Trim='3' title="Facción"></i>
			  <?php } ?>	 
			</td>
			<td>
			 <?php if ($VC11) {?>
				 <i class="bi bi-x-square btn-Modificar Inciso"
				 data-Cons='<?= $VC03?>' data-Trim='4' title="Facción"></i>
			  <?php } ?>	
			</td>
			<td data-titulo="Inciso:">
	  		  <i class="bi bi-x-square btn-Modificar Inciso"
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