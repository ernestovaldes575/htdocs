<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$Titulo = 'Conac Lista';
		include 'Componentes/LigasEnca.php';
	?>
</head>
<?php
	include("ConacListSERP.php");	
?>
<body>
	<div class="container">
		<table class="tabla table-bordered table border-secondary">
			<thead class="">
				<tr>
					<th class="text-uppercase fw-semibold text-center">
						Clave
					</th><!-- Cambiar campo de acuerdoa ConacListSERP Linea 7 -->
					<th class="text-uppercase fw-semibold text-center">
						Descripcion
					</th><!-- Cambiar campo de acuerdoa ConacListSERP Linea 7 -->
					<th colspan="2" class="text-center">
						<a href="Conac.php?Param2=A&Param3=0" class="btn-Nuevo">
							<i class="bi bi-plus-lg"></i>
						</a>
					</th>
				</tr>
			</thead>
				<tbody>
				</tr>
				<?php
					foreach($ResuSql as $RegiTabl):
							$VC03=$RegiTabl['CTCClave']; 	//Mod. campos ConacListSERP Linea 7
							$VC04=$RegiTabl[1];				//Mod. campos ConacListSERP Linea 7
				?>			
				<tr>
					<td class="text-center"><?=$VC03?></td>
					<td class="text-center"><?=$VC04?></td>
					<td class="text-center">
						<a href="Conac.php?Param2=M&Param3=<?=$VC03?>" class="btn-Modificar">
							<i class="bi bi-pencil-square"></i>
						</a>
					</td> 
					<td class="text-center">
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