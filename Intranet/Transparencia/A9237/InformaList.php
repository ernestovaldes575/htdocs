<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Convenios de coordinación, de concentración con el sector privado o público</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/Intranet/Css/style.css">
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
		<tr>
			<th>No</th>
			<th>Tipo de Convenio</th>
			<th>Denominacion del Convenio</th>
			<th colspan="2">Fecha de firma del Convenio</th>
			<th width="6%">
			 <?php 
			   if ($Alta == "A"){ ?>
               <i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='0'></i>
              <?php } ?>            </th>
			<th width="12%">&nbsp;</th>
		</tr>
		<?php 
		  foreach($ResuSql as $RegiTabl){
			  $VC03 = $RegiTabl['CCConsecutivo'];
			  $VC08 = $RegiTabl['CCTipoConv'];
			  $VC09 = $RegiTabl['CCDenom'];
			  $VC10 = $RegiTabl['CCFechFirma'];
			  
			  $RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen".
				  		 "/$NumeFrac/$TrimTrab/";
		?>
		<tr>
			<td><?php echo ($VC03); ?></td>
			<td width="13%"><?=$VC08?></td>
			<td width="13%"><?=$VC09?></td>
			<td><?=$VC10?></td>
			
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