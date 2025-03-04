<!DOCTYPE html>
<html lang="es">
<head> 
	<title>Fraccion 02B-Organigrama</title>
	<?php include "../Encabezado/Ligas.php"?>
</head>
<script src="InformaList.js"></script>
<body>
<header class="shadow mb-4 bg-white">
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
	include 'InformaListSERP.php';
?>	
<!--encabezado--> 
<div class="container table-responsive">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td>Ejercicio: <?=$EjerTrab?></td>
			<td>Fraccion: <?=$NumeFrac?></td>
			<td>Trimestre:
            <?=$TrimTrab?></td>
			<td>Inciso:
				<?=$NumeInci?>
              	<?=$NumeSubi?>
            	<?=$Nomativi?></td>
			<td colspan="3">
			  <a href="../Fracciones.php" 
					class="btn-Regresar">
			    Regresar
			  </a>		    
			</td>
		</tr>
		<tr align="center">
			<th>No</th>
			<th>Fecha Inicio</th>
			<th>Fecha Termino</th>
			<th>Fecha de validación de la información</th>
			<th>
			 <?php 
			   if ($Alta == "A"){ ?>
               <i class="bi bi-plus-lg btn-Nuevo NuevUno" title="Alta de Uno" data-id='0'></i>
              <?php } ?> </th>
			<th>
			<?php 
			   if ($Alta == "A"){ ?>
               <i class="bi bi-align-middle btn-Nuevo NuevList" title="Alta de Lista" data-id='0'></i>
              <?php } ?>	
			</th>
			<!-- <th width="12%">&nbsp;</th> -->
		</tr>
		<?php 
		  $NumeReng = 1;
		  foreach($ResuSql as $RegiTabl){
			  $VC03 = $RegiTabl['OConsecutivo'];
			  $VC06 = $RegiTabl['OFechInicio'];
			  $VC07 = $RegiTabl['OFechTerm'];
			  $VC11 = $RegiTabl['OFechValid'];
			  
			  $RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen".
				  		 "/$NumeFrac/$TrimTrab/";
		?>
		<tr>
			<td><?=$NumeReng?></td> 
			<td><?=$VC06?></td>
			<td><?=$VC07?></td>
			<td><?=$VC11?></td>
			<td data-titulo="Editar: ">
				<?php if($Modi == "A" ){ ?>
					<i class="bi bi-pencil-square btn-Modificar ModiUno" 
					data-CaBu="<?= $VC03?>" title="Modificar uno"></i>
				<?php } ?>
			</td>
			<td data-titulo="Editar: ">
				<?php if($Modi == "A" ){ ?>
					<i class="bi bi-file-earmark-ruled btn-Modificar ModiList" 
					data-CaBu="<?= $VC03?>" title="Modificar Lista"></i>
				<?php } ?>
			</td>
			<td data-titulo="Eliminar:">
	  			<?php if($Baja == "A"  ) { ?>
				<i class="bi bi-x-square btn-Eliminar ElimUno "
				data-CaBu='<?= $VC03?>' title="Eliminar"></i>
				<?php } ?>
			</td>
		</tr>
		<?php
			$NumeReng ++;
	    } ?> 
	</table>
</div>	

<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>