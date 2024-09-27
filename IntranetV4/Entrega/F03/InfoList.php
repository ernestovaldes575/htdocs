<!DOCTYPE html>
<html lang="es">
<head>
  <?php
   $RutaEnca = $_SERVER["DOCUMENT_ROOT"]."/Intranet/";
	$TituEnca = "Estructura Programatica";
	include ($RutaEnca."Encabezado/EncaLiga.php");
  ?> 
<head> 
<script src="InfoList.js"></script> 
<body> 
<header class="shadow mb-4 bg-white">
<?php include ($RutaEnca."Encabezado/EncaPrin.php"); ?>
</header>
<?php include "InfoListSERP.php"; ?>
<!--encabezado--> 
<div class="container table-responsive">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td colspan="9">Formato:<?=$ClavForm?> <?=$DescForm?>  </td>
			<td colspan="3">
				<a href="../Formato.php" 
					class="btn-Regresar"> Regresar
			    </a>
			</td>
		</tr>
		<tr align="center">
			<th>Numero Progresivo</th>
			<th>Número de Acta</th>
			<th>Fecha de Aprobación</th>
			<th>Número de Gaceta Municipal</th>
			<th>Fecha de Publicación</th>
			<th>Última revisión</th>
			<th>Medios de Difusión</th>
			<th>Dependencia/Unidad Administrativa Responsable del Resguardo</th>
			<th>Observaciones</th>
	<th>
	<?php 
	  if ($Alta == "A"){ ?>
	  <i class="bi bi-plus-lg btn-Nuevo NuevUno" title="Alta de Uno" data-id="0"></i>
	 <?php } ?> </th>
   <th>
   <?php 
	  if ($Alta == "A"){ ?>
	  <i class="bi bi-align-middle btn-Nuevo NuevList" title="Alta de Lista" data-id="0"></i>
	 <?php } ?>	
   </th>
</tr>
<?php 
 foreach($ResuSql as $RegiTabl){ 
			  $VC03 = $RegiTabl[0];
			  $VC04 = $RegiTabl[1];
			  $VC05 = $RegiTabl[2];
			  $VC06 = $RegiTabl[3];
			  $VC07 = $RegiTabl[4];
			  $VC08 = $RegiTabl[5];
			  $VC09 = $RegiTabl[6];
			  $VC10 = $RegiTabl[7];
			  $VC11 = $RegiTabl[8];
			  $VC12 = $RegiTabl[9];
			  $RutaArch = "/ExpeElectroni/$ClavAyun/Transparen".
				  		 "/$ClavForm/";
		?>
		<tr>
			<td><?=$VC04?></td>
			<td><?=$VC05?></td>
			<td><?=$VC06?></td>
			<td><?=$VC07?></td>
			<td><?=$VC08?></td>
			<td><?=$VC09?></td>
			<td><?=$VC10?></td>
			<td><?=$VC11?></td>
			<td><?=$VC12?></td>
			<td></td>
			<td data-titulo="Eliminar:">
	  			<?php if($Baja == "A"  ) { ?>
				<i class="bi bi-x-square btn-Eliminar ElimUno "
				data-CaBu="<?= $VC03?>" title="Eliminar"></i>
				<?php } ?>
			</td>
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
		</tr>
		<?php	} ?> 
	</table>
</div>	

<?php
//require_once($_SERVER["DOCUMENT_ROOT"]."Intranet/Encabezado/PiePagi.php"); 
?>
</body>
</html>


