<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	$TituEnca = "Invitado";
	include $_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Encabezado/EncaLiga.php';
	?>
</head>	
<script language="JavaScript" src="Repartidor.js"></script>
<body> 
<header>
 <?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Encabezado/EncaCook.php'); 
    //Encabezado	
    require_once($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Encabezado/EncaPrin.php'); 
  ?>
 </header>
<?php 

//Carga de la Informacion	
include 'RepartidorSERP.php';
$RegrPagi = "/IntraRepa/MenuIntranet.php"; 

?>
<form id= "PideDato" name="PideDato" method="post" action="RepartidorCRUD.php">
  <input type="hidden" id="SV00" name="C00" value="<?=$CRUD?>">
  <input type="hidden" id="SV01" name="C01" value="<?=$TipoMovi?>">
  <input type="hidden" id="SV02" name="C02" value="<?=$ConsBusq?>">
  <table width="48%" class="ListInfo" with="50%">
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
		<th>Clave</th>
		<td colspan="2">
			<input name="C03" type="text" id="VC03" placeholder="No Anfitrion" 
					onkeyup="checaMensaje(this.value)" value="<?=$VC03?>" size="5" maxlength="5" readonly>
		</td>
	</tr>	
	<tr>
		<th>Repartidor</th>
		<td colspan="2">
			<input type="text" id="VC04" name="C04" value="<?=$VC04?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Razon Social">
		</td>
	</tr>	
	<tr>
		<th>Estado </th>
		<td colspan="2">
			<input type="text" id="VC05" name="C05" value="<?=$VC05?>" 
					onkeyup="checaMensaje(this.value)" placeholder="RFC">
		</td>
	</tr>	
	<tr>
		<th>Correo</th>
		<td colspan="2">
			<input type="text" id="VC14" name="C06" value="<?=$VC06?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Correo">
		</td>
	</tr>	
	<tr>
		<th>Contraseña</th>
		<td colspan="2">
			<input type="text" id="VC15" name="C07" value="<?=$VC07?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Contraseña">
		</td>
	</tr>		
	<tr>
		<td></td>
		<td colspan="2" >
			<button type="submit" name="Enviar" placeholder="Registrar"
						value="<?=$MesnTiMo?>" class="btn-Submit container opacity-50" disabled>
							Registrar
			</button>
		</td>
	</tr>	
</table>
<script src="/IntraInvi/js/ValiForm.js"></script>
</body>
</html>