<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	  $RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraBroker/";
      $TituEnca= "Intranet";
   	  include $RutaIntr.'Encabezado/EncaLiga.php'; ?>
</head>
<body>
 <header class="header">
   <?php include $RutaIntr.'Encabezado/EncaHead.php'?>
 </header>
 <?php  include('ClienteSERP.php'); ?>
 <form id= "PideDato" name="PideDato" method="post" action="ClienteCRUD.php">
  <table width="48%" class="ListInfo" with="50%">
    <caption>
      Alta del Cliente
    </caption>
  	<thead>	
	  <tr>
		<th width="182">Campo</th>
		<th colspan="2" align="right">
         <a href= "Broker.php">Regresar</a></th>
	  </tr>	
    </thead>
	<tr>
		<th>No. Cliente </th>
		<td colspan="2">
			<input name="C03" type="text" id="VC03" placeholder="No Anfitrion" 
					onkeyup="checaMensaje(this.value)" value="<?=$VC03?>" size="5" maxlength="5" readonly>
		</td>
	</tr>	
	<tr>
		<th>Razon Social</th>
		<td colspan="2">
			<input type="text" id="VC04" name="C04" value="<?=$VC04?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Razon Social">
		</td>
	</tr>	
	<tr>
		<th>Correo</th>
		<td colspan="2">
			<input type="text" id="VC05" name="C05" value="<?=$VC05?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Correo">
		</td>
	</tr>	
	<tr>
		<th>Contraseña</th>
		<td colspan="2">
			<input type="text" id="VC06" name="C06" value="<?=$VC06?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Contraseña">
		</td>
	</tr>
	<tr>
		<th>Porcentaje</th>
		<td colspan="2">
			<input type="number" id="VC07" name="C07" value="<?=$VC07?>" 
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
<script src="/IntraBroker/js/ValiForm.js"></script>
</body>
</html>