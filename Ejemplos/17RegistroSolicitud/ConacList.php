<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registro solicitudes de acceso</title>
	<link rel="stylesheet" href="../../Intranet/build/css/style.css">
	<link rel="stylesheet" href="../../bootstrap-icons/font/bootstrap-icons.min.css">
</head>
<?php
	include("ConacListSERP.php");	
?>
<body>
	<div class="container">
		<table width="200" border="1" class="tabla">
			<tbody>
				<tr>
					<td>&nbsp;</td>
					<td colspan="3">
						<a href="Base04.php?Param2=I"></a>
						<a href="Base04.php?Param3=I"></a>
					</td>
				</tr>
				<tr>
					<td>No</td>				<!-- Cambiar campo de ConacListSERP Linea 7 -->
					<td>Fecha Inicio</td>
					<td>Fecha Termino</td>
					<td>Fecha Solicitud</td>
					<td colspan="2">
						<a href="Conac.php?Param2=A&Param3=0" class="btn-Nuevo">
							<i class="bi bi-bookmark-plus-fill"></i>
						</a>
					</td>
				</tr>
				<?php
					foreach($ResuSql as $RegiTabl):
							$VC03=$RegiTabl['RSConsecutivo']; 	//Mod. campos ConacListSERP Linea 7
							$VC04=$RegiTabl['RSFechInicio'];				//Mod. campos ConacListSERP Linea 7
							$VC05=$RegiTabl['RSFechTerm'];
							$VC06=$RegiTabl['RSFechSoli'];
				?>			
				<tr>
					<td><?php echo ($VC03); ?></td>
					<td><?=$VC04?></td>
					<td><?=$VC05?></td>
					<td><?=$VC06?></td>
					<td>
						<a href="Conac.php?Param2=M&Param3=<?=$VC03?>" class="btn-Modificar">
							<i class="bi bi-pencil-square"></i>
						</a>
					</td> 
					<td>
						<a href="Conac.php?Param2=B&Param3=<?=$VC03?>" class="btn-Eliminar">
							<i class="bi bi-trash"></i>
						</a>
					</td>
				</tr>
				<?php 
					endforeach 
				?>  	
			</tbody>
		</table>
	</div>

</body>
</html>