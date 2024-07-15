<!DOCTYPE html>
<html lang="es">
<head> 
	<?php
		include'../NormApli/Componente/LigasHTML.php';
	?>
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
	<table width="70%" class="ListInfo tabla" id="tblRegistros">
		<tr>
			<td width="5%"></td>
			<td colspan="2"></td>
			<td class="text-center">
				<a href="ArtiLista.php" class="btn-Regresar">
					Regresar
				</a>
			</td>
		</tr>
		<tr>
			<th>Inciso</th>
			<th width="10%" class="text-center">Subinciso</th>
			<th width="70%" class="text-center">Normatividad</th>
			<th width="20%" class="text-center">&nbsp;</th>
		</tr>
		<?php 
			foreach($ResuSql as $RegiTabl){
					$VC03 = $RegiTabl[0];	
					$VC04 = $RegiTabl[1];
					$VC05 = $RegiTabl[2];
					$VC06 = $RegiTabl[3];
		?>
		<tr>
			<td class="text-center"><?=$VC03?></td>
			<td class="text-center"><?=$VC04?></td>
			<td class="text-center"><?=$VC05?></td>
			<td class="text-center">			 	
				<i class="bi bi-file-arrow-down btn-Modificar NumeTrim"
					data-Inciso='<?= $VC03?>' data-SubInc='<?= $VC04?>' 
					data-Normat='<?= $VC05?>' data-Period='<?= $VC06?>' 	
					title="3er Trimestre">
				</i>
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