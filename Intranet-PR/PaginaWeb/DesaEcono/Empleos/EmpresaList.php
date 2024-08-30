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
include 'EmpresaApi.php';
?>	
<table class="ListInfo">
  <thead>
	<tr>
		<th>No Empleado</th>
		<th>Nombre</th>
		<th>Foto</th>	
	</tr>
  </thead>
  <tbody>
  <?php 
	$NumeRegi = 1;
	foreach ($ResuTabl as $RegiTabl): 
	    $VC03=$RegiTabl[0];		//EConsecut
		$VC04=$RegiTabl[1];		//EEmpresa,
		$VC05=$RegiTabl[2];		//ERespresentante,
	    $VC06=$RegiTabl[3];		//EContacto
	    $VC07=$RegiTabl[4];		//ETeleCont
		$VC08=$RegiTabl[5];		//LFecEHoraAtenhAlta
		$VC09=$RegiTabl[6]; 	//PlazActi 	?>
	<tr>
		<td><?=$VC04?></td>				<!--Cambiar-->
		<td><?=$VC05?></td>				<!--Cambiar-->
		<td><?=$VC06?></td>				<!--Cambiar-->
		<!-- iconos dentro de la libreria font-awesome.min.css -->
		<td>
		  <?php if($Modi == "A" ){ ?>
			<button class='Deta' data-id='<?= $VC03?>' 
			style="cursor: pointer; background-color:#EB6320; border-color:blue; color:white; border-radius: 5px;" 
			class="flex-1 shadow-2xl transition-all opacity-50 bg-green-500 text-white flex justify-center gap-2 items-center p-3 focus:bg-black"
			onMouseOver="this.style.background='#FF8000';" onMouseOut="this.style.background = '#EB6320';">			
			 Modificar </button>
		  <?php } ?>
		</td>
	</tr>
	<?php endforeach ?>
  </tbody>
</table>
</body>
</html>