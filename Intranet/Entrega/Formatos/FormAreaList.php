<!DOCTYPE html>
<html lang="es">
<head> 
	<?php 
		include '../NormApli/Componente/LigasHTML.php';
	?>
</head>
<body>
<script src="FormAreaList.js"></script>
<header class="shadow mb-4 bg-white">
<?php
    $RutaEnca = $_SERVER['DOCUMENT_ROOT'].'/Intranet/'; 
	include($RutaEnca.'Encabezado/EncaCook.php');
	require_once($RutaEnca.'/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
	include 'FormAreaListSERP.php';
?>	
<!--encabezado--> 
	<div class="container table-responsive">
		<table class="ListInfo tabla">
			<tr>
				<td width="5%"></td>
				<td colspan="2" class="text-end">
					<a href="FormatoLista.php" class="btn-Regresar">
						Regresar
					</a>
				</td>
			</tr>
			<tr>
				<th width="10%">Clave</th>
				<th width="70%">Subinciso</th>
				<th width="20%"></th>
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
				<td class="text-center">			 
					<i class="bi bi-file-arrow-down btn-Modificar ElimArea "
					data-ConsUnid='<?=$VC03?>' 	
					title="3er Trimestre"></i>
				</td>
			</tr>
			<?php } ?> 
		</table>
		<table class="ListInfo tabla">
			<tr>
				<td width="5%"></td>
				<td colspan="2" class="text-end">
					<a href="FormatoLista.php" class="btn-Regresar">
						Regresar
					</a>
				</td>
			</tr>
			<tr>
				<th width="10%">Clave</th>
				<th width="70%">Subinciso</th>
				<th width="20%"></th>
			</tr>
			<?php 
				foreach($ResSql2 as $RegiTabl){
						$VC03 = $RegiTabl[0];	
						$VC04 = $RegiTabl[1];
						$VC05 = $RegiTabl[2];
			?>
			<tr>
				<td class="fw-bold"><?=$VC04?></td>
				<td><?=$VC05?></td>
				<td class="text-center">			 
					<i 	class="bi bi-file-arrow-down btn-Modificar AltaArea"
						data-ConsUnid='<?= $VC03?>' 	
						title="3er Trimestre">
					</i>
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