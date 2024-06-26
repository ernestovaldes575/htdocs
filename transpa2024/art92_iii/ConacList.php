<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Documento sin</title>

<link rel="stylesheet" href="../../Intranet/build/css/style.css">

</head>

<?php
	include("ConacListSERP.php");	
?>
<body>
	<div class="container">
		<table width="200" border="1" class="tabla">
			<tbody>
				<tr>
				    <td>No</td>
					<td>Fecha Inicio</td>	<!-- Cambiar campo de acuerdoa ConacListSERP Linea 7 -->
					<td>Fecha Termino</td>

					<td colspan="2">
						<a href="Conac.php?Param2=A&Param3=0" class="btn-Nuevo">
							Alta
							<i class="bi bi-bookmark-plus-fill"></i>
						</a></td>	
				</tr>
	
				<?php
				   foreach($ResuSql as $RegiTabl):
							$VC03=$RegiTabl['AConsecutivo']; 	//Mod. campos ConacListSERP Linea 7
							$VC04=$RegiTabl['AFechaInicio'];	
							$VC05=$RegiTabl['AFechaTermino'];	
							
				?>		
				<tr>
					<td><?=$VC03?></td>
					<td><?=$VC04?></td>
					<td><?=$VC05?></td>
						
					
					<td> <a href="Conac.php?Param2=M&Param3=<?=$VC03?>" class="btn-Modificar">
							<i class="bi bi-pencil-square"></i>
							Modi
						</a>
					</td> 
					<td>
						<a href="Conac.php?Param2=B&Param3=<?=$VC03?>" class="btn-Eliminar">
							<i class="bi bi-trash"></i>
							Baja
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