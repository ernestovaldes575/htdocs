<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="../../build/css/style.css">
</head>	
<body>
<script src="EstaPagiList.js"></script>  <!-- -<-Modificar Nom  -->
<header class="shadow mb-4 bg-white">
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
	include 'EstaPagiListSERP.php';  //<- Modificar aarchivo
?>	
	<!--encabezado--> 
	<div class="container table-responsive">
		<table class="ListInfo tabla">
			<tr>
				<td></td>
				<td></td>
				<td colspan="2" class="text-end">
					<a href="/Intranet/menuintranet.php" class="btn-Regresar">
						Regresar
					</a>		    
				</td>
			</tr>
			<tr>
				<th class="text-center text-uppercase">Titulo</th>
				<th class="text-center text-uppercase">Descripción</th>
				<th class="text-center" colspan="2">
				<?php if ($Alta == "A"){ ?>
					<i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='0'></i>
				<?php } ?>
				</th>
			</tr>
			<?php 
				foreach($ResuSql as $RegiTabl){
			  			$VC03=$RegiTabl['CEPClave'];	//<- Modificar
			  			$VC04=$RegiTabl['CEPDescri'];	//<- Modificar
			 		 //<- Agregar 	
			?>
			<tr>
				<td class="text-center"><?=$VC03?></td>
				<td class="text-center"><?=$VC04?></td>			
				<!-- -<-agregar  -->
				<td data-titulo="Eliminar:" class="text-center">
					<?php if($Baja == "A"  ) { ?>
					<i class="bi bi-x-square btn-Eliminar Elim"
					data-CaBu='<?= $VC03?>' title="ELIMINAR"></i>
					<?php } ?>
				</td>
				<td data-titulo="Editar:" class="text-center">
				<?php if($Modi == "A" ){ ?>
					<i class="bi bi-pencil-square btn-Modificar Modi" 
					data-CaBu="<?= $VC03?>" title="MODIFICAR"></i>
				<?php } ?>
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