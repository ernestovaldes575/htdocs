<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fraccion 02B Organigrama</title>
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
			<th>No</th>
			<th>Fecha Inicio</th>
			<th width="15%">Fecha Termino</th>			 <!--Modificar--> 
			<!-- <th colspan="2">Descripción</th>-->	 <!--Modificar--> 
			<th width="6%">
			 <?php 
			   if ($Alta == "A"){ ?>
               <i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='0'></i>
              <?php } ?>            </th>
			<th width="12%">&nbsp;</th>
		</tr>
		<?php 
		  foreach($ResuSql as $RegiTabl){
			  $VC03 = $RegiTabl['OConsecutivo'];	 //Modificar
			  $VC04 = $RegiTabl['OFechInicio'];		 //Modificar
			  $VC05 = $RegiTabl['OFechTerm'];	 //Modificar
			  
			  //$RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen".
				  		 //"/$NumeFrac/$TrimTrab/";
		?>
		<tr>
			<td width="13%"><?=$VC03?></td>			 <!--Modificar--> 
			<td width="13%"><?=$VC04?></td>			 <!--Modificar--> 
			<td width="13%"><?=$VC05?></td>			 <!--Modificar--> 
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