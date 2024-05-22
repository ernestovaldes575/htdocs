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
    require_once($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaCook.php'); 
    //Encabezado	
   require_once($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaPrin.php'); 
  ?>
 </header>
<?php 
//Carga de la Informacion	
$CRUD = "GET";
include 'InvitadoApi.php';
//echo "Valor CRUD: $CRUD ";

$RegrPagi = ( $TipoMovi == "A") ? "Anfitrion.php":"/IntraInvi/MenuIntranet.php"; 

?>
<form method="post" name="PideDato" onsubmit="validarFormulario()" action="InvitadoApi.php">
  <input type="hidden" name="C00" value="<?=$CRUD?>">
  <input type="hidden" name="C01" value="<?=$TipoMovi?>">
  <input type="hidden" name="C02" value="<?=$ConsBusq?>">
  <table width="48%" class="ListInfo01" with="50%">
    <caption>
      <?=$DescTiSe?>
    </caption>
  	<thead>	
	  <tr>
		<th width="182">Campo</th>
		<th colspan="2" align="right">
         <a href="<?=$RegrPagi?>">Regresar</a></th>
	  </tr>	
    </thead>
	<tr>
		<th>No. Anfitrion </th>
		<td colspan="2">
			<input type="text" name="C03" value="<?=$VC03?>" 
					onkeyup="checaMensaje(this.value)" placeholder="No Anfitrion">
		</td>
	</tr>	
	<tr>
		<th>Razon Social</th>
		<td colspan="2">
			<input type="text" name="C04" value="<?=$VC04?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Razon Social">
		</td>
	</tr>	
	<tr>
		<th>RFC </th>
		<td colspan="2">
			<input type="text" name="C05" value="<?=$VC05?>" 
					onkeyup="checaMensaje(this.value)" placeholder="RFC">
		</td>
	</tr>	
	<tr>
		<th>CURP</th>
		<td colspan="2">
			<input type="text" name="C06" value="<?=$VC06?>" 
					onkeyup="checaMensaje(this.value)" placeholder="CURP">
		</td>
	</tr>	
	<tr>
		<th>Calle</th>
		<td colspan="2">
			<input type="text" name="C07" value="<?=$VC07?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Calle">
		</td>
	</tr>	
	<tr>
		<th>No. </th>
		<td colspan="2">
			<input type="text" name="C08" value="<?=$VC08?>" 
					onkeyup="checaMensaje(this.value)" placeholder="No">
		</td>
	</tr>	
	<tr>
		<th>Colonia</th>
		<td colspan="2">
			<input type="text" name="C09" value="<?=$VC09?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Colonia">
		</td>
	</tr>	
	<tr>
		<th>Delegacion</th>
		<td colspan="2">
			<input type="text" name="C10" value="<?=$VC10?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Delegacion">
		</td>
	</tr>	
	<tr>
		<th>C.P.</th>
		<td colspan="2">
			<input type="text" name="C11" value="<?=$VC11?>" 
					onkeyup="checaMensaje(this.value)" placeholder="C.P.">
		</td>
	</tr>	
	<tr>
		<th>Municipio</th>
		<td colspan="2">
			<input type="text" name="C12" value="<?=$VC12?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Municipio">
		</td>
	</tr>	
	<tr>
		<th>Estado</th>
		<td colspan="2">
			<input type="text" name="C13" value="<?=$VC13?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Estado">
		</td>
	</tr>	
	<tr>
		<th>Correo</th>
		<td colspan="2">
			<input type="text" name="C14" value="<?=$VC14?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Correo">
		</td>
	</tr>	
	<tr>
		<th>Contraseña</th>
		<td colspan="2">
			<input type="text" name="C15" value="<?=$VC15?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Contraseña">
		</td>
	</tr>		
	<tr>
		<td></td>
		<td colspan="2" >
			<input type="submit" name="Enviar" value="<?=$MesnTiMo?>" >
		</td>
	</tr>	
</table>	
</body>
</html>