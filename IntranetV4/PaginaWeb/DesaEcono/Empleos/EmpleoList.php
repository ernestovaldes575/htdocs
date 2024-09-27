<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" type="text/css" href="/Intranet/Encabezado/EstiIntr.css">
</head>
<body>
<script language="JavaScript" src="Empresa.js"></script>	
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
include 'EmpleoApi.php';
?>	
<table class="ListInfo">
	<thead>
		<tr>
		  <td width="11%">&nbsp;</td>
		  <td width="18%"><?=$NombEmpr?></td>
		  <td width="18%">&nbsp;</td>
		  <td width="22%">&nbsp;</td>
		  <td colspan="2"><a href="EmpresaList.php">Regresar</a></td>
	  </tr>
		<tr>
			<td>No</td>				<!--Cambiar-->
			<td>Puesto</td>		<!--Cambiar-->
			<td>Sueldo</td>	<!--Cambiar-->
			<td>Contacto</td>
			<td colspan="2">
			<?php if($Alta == "A" ){ ?>
              <a href="Empleos.php?PaAMB01=A&PaAMB02=0" class="btn_update"> <i class="fa fa-pencil-square-o" aria-hidden="true" title="Editar Registro"></i></a>
            <?php } ?></td>
		</tr>
	</thead>
	<tbody>
	<?php 
		$NumeRegi = 1;
		foreach ($ResuSql as $RegiTabl):
			$VC03=$RegiTabl['PConsecut'];
			$VC04=$RegiTabl['PPuesto'];
			$VC05=$RegiTabl['PSueldo'];
			$VC06=$RegiTabl['PEscolaridad'];	?>
		<tr>
			<td><?=$NumeRegi?></td>	
			<td><?=$VC04?></td>	
			<td><?=$VC05?></td>	
			<td><?=$VC06?></td>	
			<!-- iconos dentro de la libreria font-awesome.min.css -->
		  <td width="10%" data-titulo="Editar: ">
			<?php if($Modi == "A" ){ ?>
			  <a href="Empleos.php?PaAMB01=M&PaAMB02=<?= $VC03?>" class="btn_update">
			  <i class="fa fa-pencil-square-o" aria-hidden="true" title="Editar Registro"></i></a>
			<?php } ?>
			</td>
			<td width="21%" data-titulo="Editar: "><?php if($Modi == "A" ){ ?>
              <a href="Empleos.php?PaAMB01=B&PaAMB02=<?= $VC03?>" class="btn_update"> <i class="fa fa-pencil-square-o" aria-hidden="true" title="Editar Registro"></i></a>
            <?php } ?></td>
		</tr>
		<?php 
		  $NumeRegi ++;
		  endforeach ?>
	</tbody>
</table>	
<!--encabezado-->
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>