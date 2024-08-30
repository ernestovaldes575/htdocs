<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	  $RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraAgente/";
      $TituEnca= "Clientes";
   	  include $RutaIntr.'Encabezado/EncaLiga.php'; ?>
</head>	
<!--<script language="JavaScript" src="Cliente.js"></script> -->
<body> 
  <header class="header">
    <?php include $RutaIntr.'Encabezado/EncaHead.php'?>
  </header>
  <?php include('ClienteSERP.php'); ?>
<form id= "PideDato" name="PideDato" method="post" action="ClienteCRUD.php">
  <input name="C01" type="hidden" id="SV01" value="<?=$TipoMovi?>">
  <input name="C02" type="hidden" id="SV02" value="<?=$ConsMovi?>">	
  <table width="48%" class="ListInfo" with="50%">
  <caption>
    Cliente
  </caption>
  	<thead>	
	  <tr>
		<th width="182">Campo</th>
		<th colspan="2" align="right">
         <a href="ClienList.php">Regresar</a></th>
	  </tr>	
    </thead>
	<tr>
		<th>No. Anfitrion </th>
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
		<th>RFC </th>
		<td colspan="2">
			<input type="text" id="VC05" name="C05" value="<?=$VC05?>" 
					onkeyup="checaMensaje(this.value)" placeholder="RFC">
		</td>
	</tr>	
	<tr>
		<th>CURP</th>
		<td colspan="2">
			<input type="text" id="VC06" name="C06" value="<?=$VC06?>" 
					onkeyup="checaMensaje(this.value)" placeholder="CURP">
		</td>
	</tr>	
	<tr>
		<th>Calle</th>
		<td colspan="2">
			<input type="text" id="VC07" name="C07" value="<?=$VC07?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Calle">
		</td>
	</tr>	
	<tr>
		<th>No. </th>
		<td colspan="2">
			<input type="text" id="VC08" name="C08" value="<?=$VC08?>" 
					onkeyup="checaMensaje(this.value)" placeholder="No">
		</td>
	</tr>	
	<tr>
		<th>Colonia</th>
		<td colspan="2">
			<input type="text" id="VC09" name="C09" value="<?=$VC09?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Colonia">
		</td>
	</tr>	
	<tr>
		<th>Delegacion</th>
		<td colspan="2">
			<input type="text" id="VC10" name="C10" value="<?=$VC10?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Delegacion">
		</td>
	</tr>	
	<tr>
		<th>C.P.</th>
		<td colspan="2">
			<input type="text" id="VC11" name="C11" value="<?=$VC11?>" 
					onkeyup="checaMensaje(this.value)" placeholder="C.P.">
		</td>
	</tr>	
	<tr>
		<th>Municipio</th>
		<td colspan="2">
			<input type="text" id="VC12" name="C12" value="<?=$VC12?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Municipio">
		</td>
	</tr>	
	<tr>
		<th>Estado</th>
		<td colspan="2">
			<input type="text" id="VC13" name="C13" value="<?=$VC13?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Estado">
		</td>
	</tr>	
	<tr>
		<th>Correo</th>
		<td colspan="2">
			<input type="text" id="VC14" name="C14" value="<?=$VC14?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Correo">
		</td>
	</tr>	
	<tr>
		<th>Contraseña</th>
		<td colspan="2">
			<input type="text" id="VC15" name="C15" value="<?=$VC15?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Contraseña">
		</td>
	</tr>		
	<tr>
		<td></td>
		<td colspan="2" >
			<button type="submit" name="Enviar" placeholder="Registrar"
					value="<?=$MesnTiMo?>" class="btn-Submit container opacity-50" disabled>
				<?=$MesnTiMo?>			
			</button>
		</td>
	</tr>	
</table>
<script src="/IntraBroker/js/ValiForm.js"></script>
</body>
</html>