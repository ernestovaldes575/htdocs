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
    require_once($_SERVER['DOCUMENT_ROOT'].'/IntraAnfi/Encabezado/EncaCook.php'); 
    //Encabezado	
    require_once($_SERVER['DOCUMENT_ROOT'].'/IntraAnfi/Encabezado/EncaPrin.php'); 
  ?>
 </header>
<?php 

//Carga de la Informacion	
include 'AnfitrionSERP.php';
$RegrPagi = "/IntraAnfi/MenuIntranet.php"; 

?>
<form id= "PideDato" name="PideDato" method="post" action="AnfitrionCRUD.php">
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
		<th>Alias</th>
		<td colspan="2">
			<input name="C03"  id="VC03" type="text" placeholder="No Anfitrion" 
					onkeyup="checaMensaje(this.value)" value="<?=$VC03?>" size="10" maxlength="10" >
		</td>
	</tr>	
	<tr>
		<th>Correo</th>
		<td colspan="2">
			<input name="C04" id="VC04" type="text" value="<?=$VC04?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Correo">
		</td>
	</tr>	
	<tr>
		<th>Contraseña</th>
		<td colspan="2">
			<input name="C05" id="VC05" type="text" value="<?=$VC05?>" 
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