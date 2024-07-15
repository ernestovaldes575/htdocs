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
		<tr>
			<th>No</th>
			<th>Fecha Inicio del periodo que se informa</th>
			<th>Fecha Termino del periodo que se informa</th>
			<th>Tipo de Recursos Públicos</th>
			<th>Fecha de Entrega de Recurso Público</th>
			<th colspan="2">
			 <?php 
			   if ($Alta == "A"){ ?>
               <i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='0'></i>
              <?php } ?>            </th>
		</tr>
		<?php 
		  $NumeReng = 1;
		  foreach($ResuSql as $RegiTabl){
			  $VC03 = $RegiTabl['RPConsecutivo'];
			  $VC04 = $RegiTabl['RPFechInicio'];
			  $VC05 = $RegiTabl['RPFechTerm'];
			  $VC06 = $RegiTabl['RPTipoRec'];
			  $VC07 = $RegiTabl['RPFechEntr'];
			  
			  $RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen".
				  		 "/$NumeFrac/$TrimTrab/";
		?>
		<tr>
			<td><?=$NumeReng?></td>
			<td><?=$VC04?></td>
			<td><?=$VC05?></td>
			<td><?=$VC06?></td>
			<td><?=$VC07?></td>
			
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
			$NumeReng ++;	
		} ?> 
	</table>
</div>	

<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>