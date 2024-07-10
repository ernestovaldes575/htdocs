<!DOCTYPE html>
<html lang="es">
<head>
	<title>Fraccion 20B-Recursos Públicos</title>
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
			<td colspan="2">Inciso:
<?=$NumeInci?>
              <?=$NumeSubi?>
            <?=$Nomativi?></td>
			<td></td>
			<td colspan="2">
			  <a href="../Fracciones.php" 
					class="btn-Regresar">
			    Regresar
			    </a>		    </td>
		</tr>
		<tr>
			<th>No</th>
			<th>Fecha Inicio del periodo que se informa</th>
			<th>Fecha de termino del periodo que se informa</th>
			<th>Total de plazas de base</th>
			<th>Total de plazas de confianza</th>
			<th width="6%">
			 <?php 
			   if ($Alta == "A"){ ?>
               <i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='0'></i>
              <?php } ?>            </th>
			<th width="12%">&nbsp;</th>
		</tr>
		<?php 
		  foreach($ResuSql as $RegiTabl){
			  $VC03 = $RegiTabl['TConsecutivo'];
			  $VC06 = $RegiTabl['TFechInicio'];
			  $VC07 = $RegiTabl['TFechTerm'];
			  $VC08 = $RegiTabl['TTotPlazBas'];
			  $VC11 = $RegiTabl['TTotPlazConf'];
			  
			  $RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen".
				  		 "/$NumeFrac/$TrimTrab/";
		?>
		<tr>
			<td><?php echo ($VC03); ?></td>
			<td width="13%"><?=$VC06?></td>
			<td width="13%"><?=$VC07?></td>
			<td><?=$VC08?></td>
			<td><?=$VC11?></td>
			
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
</div>	

<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>