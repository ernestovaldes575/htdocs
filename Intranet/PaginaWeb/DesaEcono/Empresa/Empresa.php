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
//Carga de la Informacion	
$CRUD = "GET";
include 'EmpresaApi.php';
echo "Valor CRUD: $CRUD ";
?>
<form method="post" name="formulario"  action="EmpresaApi.php">
  <input type="hidden" name="C00" value="<?=$CRUD?>">
  <input type="hidden" name="C01" value="<?=$TipoMovi?>">
  <input type="hidden" name="C02" value="<?=$ConsBusq?>">
			<table width="44%" class="ListInfo01" >
			<tr>
				<th width="24%">Empresa</th>
				<td width="76%"><input type="text" name="C03" value="<?=$VC03?>" onkeyup="checaMensaje(this.value)"></td>
			</tr>
			<tr>
			<th>Representante Legal</td>
				<td><input type="text" name="C04" placeholder="Digitar Descripcion" value="<?=$VC04?>" onkeyup="checaMensaje(this.value)"></td>
			</tr>
			<tr>
				<th>Contacto</td>
				<td><input type="text" name="C05" value="<?=$VC05?>" onkeyup="checaMensaje(this.value)"></td>
			</tr>
			<tr>
				<th>Tel Contacto</td>
				<td><input type="text" name="C06" value="<?=$VC06?>" onkeyup="checaMensaje(this.value)"></td>
			</tr>

			<tr>
				<th>Hora de atencion</td>
				<td><input type="text" name="C07" value="<?=$VC07?>" onkeyup="checaMensaje(this.value)"></td>
			</tr>
			<tr>
				<th>Correo</td>
				<td><input type="text" name="C08" value="<?=$VC08?>" onkeyup="checaMensaje(this.value)"></td>
			</tr>
			<tr>
				<th>Clave</td>
				<td><input type="text" name="C09" value="<?=$VC09?>" onkeyup="checaMensaje(this.value)"></td>
			</tr>
			<tr>
			  <th>              
			  <td><input type="submit" name="Enviar" value="<?=$MesnTiMo?>" ></td>
			  </tr>

	    </table>
</form>	
</body>
</html>