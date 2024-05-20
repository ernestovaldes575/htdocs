<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" type="text/css" href="/Intranet/Encabezado/EstiIntr.css">
</head>
<script language="JavaScript" src="PWRegistro.js"></script>
<body>
<header>
  <?php 
   //Varibales Globales
   include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
   //Encabezado	
   require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
  ?> 
 </header>
<?php
$CRUD = "GET";
include 'EmpresaApi.php';
?>	
<!--encabezado-->
<table class="ListInfo">
  <tr>
	<td></td>
	<td colspan="13"></td>
	<td></td>
	<td>
		<a href="/Intranet/menuintranet.php" class="regresar">Regresar</a>
	</td>
  </tr>
  <tr>
	<td>No</td>				<!--Cambiar-->
	<td>Empresa</td>		<!--Cambiar-->
	<td>Representante</td>	<!--Cambiar-->
	<td>Contacto</td>
	<td>Eliminar</td>	
	<td>Editar</td>
  </tr>
  <?php 
	$NumeRegi = 1;
	foreach ($ResuSql as $RegiTabl):
		$VC03=$RegiTabl[0];		//EConsecut, , ,,,
		$VC04=$RegiTabl[1];		//EEmpresa,
		$VC05=$RegiTabl[2];		//ERespresentante,

		$VC06=$RegiTabl[3];		//EContacto, , ,
		$VC07=$RegiTabl[4];		//ETeleCont
		$VC08=$RegiTabl[5];		//LFecEHoraAtenhAlta
	?>
	<tr>
		<td><?=$VC04?></td>				<!--Cambiar-->
		<td><?=$VC05?></td>				<!--Cambiar-->
		<td><?=$VC06?></td>				<!--Cambiar-->

		<!-- iconos dentro de la libreria font-awesome.min.css -->
		<td data-titulo="Eliminar: ">
		  <?php if($Baja == "A" ){ ?>
			<a href="Empresa.php?PaAMB01=B&PaAMB02=<?= $VC03?>" class="btn_delete">
			<i class="fa fa-close" aria-hidden="true" title="Eliminar Registro"></i></a>
		  <?php } ?>
		</td>
		<td data-titulo="Editar: ">
			<?php if($Modi == "A" ){ ?>
			<a href="Empresa.php?PaAMB01=M&PaAMB02=<?= $VC03?>" class="btn_update">
			<i class="fa fa-pencil-square-o" aria-hidden="true" title="Editar Registro"></i></a>
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