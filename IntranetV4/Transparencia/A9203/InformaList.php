<!DOCTYPE html>
<html lang="es">
<head> 
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
			<td colspan="2">
			  <a href="../Fracciones.php" 
					class="btn-Regresar">
			    Regresar
			    </a>		    </td>
		</tr>
		<tr>
<<<<<<< HEAD
			<th>No</th>
			<th>Fecha</th>
			<th width="15%">Fecha</th>			 <!--Modificar--> 
			<th colspan="2">Descripción</th>	 <!--Modificar--> 
			<th width="6%">
=======
		<th>No</th>
			<th>Fecha Inicio</th>
			<th>Fecha Termino</th>
			<th>Area</th>
			<th colspan="2">
>>>>>>> e5b162c508b56d18625f5506774a619ea33cb671
			 <?php 
			   if ($Alta == "A"){ ?>
               <i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='0'></i>
              <?php } ?>            </th>
			<!-- <th width="13%">&nbsp;</th> -->
		</tr>
		<?php 
<<<<<<< HEAD
		  foreach($ResuSql as $RegiTabl){
			  $VC03 = $RegiTabl['AConsecutivo'];	 //Modificar
			  $VC04 = $RegiTabl['ANumeRegi'];		 //Modificar
			  $VC05 = $RegiTabl['AFechaInicio'];	 //Modificar
			  $VC06 = $RegiTabl['AFechaTermino'];	 //Modificar
			  $VC07 = $RegiTabl['ADenominacion'];	 //Modificar 
			  $VC08 = $RegiTabl['AHipervinculo'];	 //Modificar
			  
			  $RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen".
				  		 "/$NumeFrac/$TrimTrab/";
		?>
		<tr>
			<td width="13%"><?=$VC04?></td>			 <!--Modificar--> 
			<td width="13%"><?=$VC05?></td>			 <!--Modificar--> 
			<td><?=$VC06?></td>						 <!--Modificar--> 
			<td width="34%"><?=$VC07?></td>
			<td width="7%">
			<?php if ( $VC08 != '' ) { ?> 
				<a href="javascript:window.open('<?=$RutaArch.$VC08?>','','width=300,height=200,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
				<i class="bi bi-eye-fill fs-1 text-success"></i>
				</a>	
			<?php 
				  } ?>
			</td>
			<td data-titulo="Eliminar:">
	  			<?php if($Baja == "A"  ) { ?>
				<i class="bi bi-x-square btn-Eliminar Elim"
				data-CaBu='<?= $VC03?>' title="ELIMINAR"></i>
				<?php } ?>
			</td>
			<td data-titulo="Editar: ">
				<?php if($Modi == "A" ){ ?>
					<i class="bi bi-pencil-square btn-Modificar Modi" 
					data-CaBu="<?= $VC03?>" title="MODIFICAR"></i>
				<?php } ?>
			</td>
		</tr>
		<?php	} ?> 
	</table>
=======
		$NumeReng = 1;
		 foreach($ResuSql as $RegiTabl){
			$VC03 = $RegiTabl['AConsecutivo'];
			$VC04 = $RegiTabl['AFechaInicio'];
			$VC05 = $RegiTabl['AFechaTermino'];
			$VC06 = $RegiTabl['AArea'];
			
			$RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen".
						 "/$NumeFrac/$TrimTrab/";
	  ?>
	  <tr>
		  <td><?=$NumeReng?></td>
		  <td><?=$VC04?></td>
		  <td><?=$VC05?></td>
		  <td><?=$VC06?></td>
		
		  
		  <td data-titulo="Editar: ">
			  <?php if($Modi == "A" ){ ?>
				  <i class="bi bi-pencil-square btn-Modificar Modi" 
				  data-CaBu="<?= $VC03?>" title="MODIFICAR"></i>
			  <?php } ?>
		  </td>

		  <td data-titulo="Eliminar:">
				<?php if($Baja == "A"  ) { ?>
			  <i class="bi bi-x-square btn-Eliminar Elim"
			  data-CaBu='<?= $VC03?>' title="ELIMINAR"></i>
			  <?php } ?>
		  </td>
	  </tr>
	  <?php
	$NumeReng++;
		} ?> 
  </table>
>>>>>>> e5b162c508b56d18625f5506774a619ea33cb671
</div>	

<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>