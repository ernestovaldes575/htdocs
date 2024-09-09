<!DOCTYPE html>
<html lang="es">
<head>
<?php
	   $TituEnca = "Supervisores por área";
	   include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaLiga.php'); ?>
</head>
<body>
<?php 
  //Varibales Globales
  include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
  //Encabezado	
  require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
  ?> 
 </header>  
<?php
  include 'SuperviSERP.php';
?>
<br>
<!--formulario de Actualizacion-->
<form method="post" name="PideDato" action="SuperviCRUD.php">
	<!-- opciones de crud-->
	<input type="hidden" name="C00" value="<?=$CRUD?>">
	<input type="hidden" name="C01" value="<?=$TipoMovi?>">
	<input type="hidden" name="C02" value="<?=$ConsBusq?>">
	<table class="ListInfo">
		<tr>
			<td></td>
			<td><i class="bi bi-arrow-bar-left btn-Regresar Regr">Regresar</i></td>
		</tr>	
		<tr>
			<th>No empleado</th>
			<td><input type="text" name="C03" value="<?=$VC03?>" ></td>
		</tr>
		<tr>
			<th>Nombre</td>
			<td><input type="text" name="C04" placeholder="Digitar Nombre" value="<?=$VC04?>">
			</td>
		</tr>
		<tr>
			<th>Categoria</td>
			<td><input type="text" name="C05" placeholder="Digitar Categoria" value="<?=$VC05?>">
		</tr>
		<tr>
			<td></td>	
			<td><input type="submit" name="Enviar" class="registrar" value="<?=$MesnTiMo?>" ></td>	
		</tr>	
	</table>
</form>
</body>
</html>