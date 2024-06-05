<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/IntraInvi/Css/style.css">
</head>	
<script language="JavaScript" src="Solicitud.js"></script>

<body> 
<header>
  <?php 
   //Varibales Globales
   include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaCook.php');
   //Encabezado	
   require_once($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaPrin.php'); 
  ?> 
 </header>
<?php 
include 'SoliDetaSERP.php';
?>
<form method="post" name="formulario" onsubmit="validarFormulario()" action="SoliDetaCRUD.php">
  <input type="hidden" name="C00" value="<?=$CRUD?>">
  <input type="hidden" name="C01" value="<?=$TipoMovi?>">
  <input type="hidden" name="C02" value="<?=$NumeArti?>">
	
  <table width="48%" class="ListInfo01" with="50%">
    <caption>
      <?=$DescTiSe?>
    </caption>
  	<thead>	
	  <tr>
		<th width="165">Campo</th>
		<th width="289" align="right">
         <a href="SoliDetaList.php">Regresar</a></th>
	  </tr>	
    </thead>
	<tr>
		<th>Numero</th>
		<td>
			<input type="text" name="C04" value="<?=$VC04?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Titulo" readonly>
		</td>
	</tr>	
	<tr>
		<th>Descripcion</th>
		<td><input type="Text" name="C05" value="<?=$VC05?>" 
				   placeholder="Titulo"></td>
	</tr>	
	<tr>
		<th>Cantidad</th>
		<td><input type="Number" name="C06" value="<?=$VC06?>" 
				   placeholder="Titulo"></td>
	</tr>	
	<tr>
		<th>Importe</th>
		<td>
			<input type="Number" name="C07" value="<?=$VC07?>" 
				   placeholder="Titulo"></td>
	</tr>	
	<tr>
		<td></td>
		<td >
			<input type="submit" name="Enviar" value="<?=$MesnTiMo?>" >
		</td>
	</tr>	
</table>	
</body>
</html>