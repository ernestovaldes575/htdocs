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
			<td colspan="2">Inc
		    iso:
<?=$NumeInci?>
              <?=$NumeSubi?>
            <?=$Nomativi?></td>
			<td colspan="2">
			  <a href="../Fracciones.php" 
					class="btn-Regresar">
			    Regresar
			    </a>		    </td>
		</tr>
		<th>No</th>
			<th>Fecha Inicio</th>
			<th width="15%">Fecha Termino</th>
			<th width="16%">
			 <?php 
			   if ($Alta == "A"){ ?>
               <i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='0'></i>
              <?php } ?>            </th>
			<th width="13%">&nbsp;</th>
		</tr>
		<?php 
		 foreach($ResuSql as $RegiTabl){
			$VC03 = $RegiTabl['AConsecutivo'];
			$VC04 = $RegiTabl['AFechaInicio'];
			$VC05 = $RegiTabl['AFechaTermino'];
			
			$RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen".
						 "/$NumeFrac/$TrimTrab/";
	  ?>
	  <tr>
		  <td width="13%"><?=$VC03?></td>
		  <td width="13%"><?=$VC04?></td>
		  <td width="13%"><?=$VC05?></td>
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