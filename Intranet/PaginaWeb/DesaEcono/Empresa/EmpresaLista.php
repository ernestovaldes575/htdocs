<!DOCTYPE html>
<html lang="es">
<head>  
  <?php
   $TituEnca = "Listado de Empresas";
   include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaLiga.php'); ?>
</head>
<script language="JavaScript" src="EmpresaList.js"></script>
<body>
<?php 
  //Varibales Globales
  include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
  //Encabezado	
  require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
  ?> 
 </header> 
<?php
include 'EmpresaListSERP.php';
?>	
<!--encabezado-->
<table width="70%" class="ListInfo tabla">
  <tr>
	<td width="11%"></td>
	<td></td>
	<td></td>
	<td></td>
	<td><a href="/Intranet/menuintranet.php" class="regresar">Regresar</a></td>
  </tr>
  <tr>
	<td>No</td>				<!--Cambiar-->
	<td width="20%">Empresa</td>		<!--Cambiar-->
	<td width="49%">Representante</td>	<!--Cambiar-->
	<td width="10%">
	  <?php if ($Alta == "A"){ ?>
       		 <i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='0'></i>
      <?php } ?></td>
	<td width="10%">&nbsp;</td>	
  </tr>
  <?php 
	$NumeRegi = 1;
	foreach ($ResuSql as $RegiTabl):
		$VC03=$RegiTabl[0];	
		$VC04=$RegiTabl[1];	
		$VC05=$RegiTabl[2];	

		$VC06=$RegiTabl[3];	
		$VC07=$RegiTabl[4];	
		$VC08=$RegiTabl[5];	
	?>
	<tr>
		<td><?=$VC04?></td>				<!--Cambiar-->
		<td><?=$VC05?></td>				<!--Cambiar-->
		<td><?=$VC06?></td>				<!--Cambiar-->

		<!-- iconos dentro de la libreria font-awesome.min.css -->
		<td data-titulo="Eliminar:">
	  	 <?php if ( $Baja == "A" ) { ?>
				<i class="bi bi-x-square btn-Eliminar Elim"
				data-CaBu='<?= $VC03?>' title="ELIMINAR"></i>
		 <?php } ?>
		</td>
		<td data-titulo="Editar: ">
		 <?php if ( $Modi == "A" ){ ?>
				<i class="bi bi-pencil-square btn-Modificar Modi" 
					data-CaBu="<?= $VC03?>" title="MODIFICAR"></i>
		 <?php } ?>
		</td>
	</tr>
  <?php	endforeach; ?> 
</table>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>