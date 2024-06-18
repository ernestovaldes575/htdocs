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
include 'SolicitudSERP.php';
?>
<form method="post" name="formulario" onsubmit="validarFormulario()" action="SolicitudCRUD.php">
  <input type="hidden" name="C00" value="<?=$CRUD?>">
  <input type="hidden" name="C01" value="<?=$TipoMovi?>">
  <input type="hidden" name="C02" value="<?=$ConsSoli?>">
  <input type="hidden" name="C05" value="<?=$VC05?>">	<!-- Ejercicio -->
  <input type="hidden" name="C06" value="<?=$VC06?>">	<!-- Mes -->
	
  <table width="48%" class="ListInfo01" with="50%">
    <caption>
      <?=$DescTiSe?>
    </caption>
  	<thead>	
	  <tr>
		<th width="165">Campo</th>
		<th align="right">
         <a href="SolicitudList.php">Regresar</a></th>
	  </tr>	
    </thead>
	<tr>
		<th>Numero</th>
		<td>
			<input type="text" name="C07" value="<?=$VC07?>" 
					onkeyup="checaMensaje(this.value)" placeholder="Titulo" readonly>
		</td>
	</tr>	
	<tr>
		<th>Repartidor</th>
		<td>
		  <?=$ConsRepa?>	 
		  <select name="C08" >
		  <?php foreach($CataRepa as $RegiTabl): 
		 				$ConsCata = $RegiTabl[0];		
						$ClavCata = $RegiTabl[1];		
						$DescCata = $RegiTabl[2];  
		 
						$Activo = ( $ConsCata == $VC08) ? "selected" : ""; ?>
		  <option value="<?=$ConsCata?>" <?=$Activo?>>
			<?=$ConsCata?>   
		    <?=$ClavCata?>
		    <?=$DescCata?>
	      </option>
		  <?php  endforeach; ?>
	    </select></td>	  
	</tr>	
    
	<tr>
		<th>Forma de Pago</th>
		<td width="289" >
		  <select name="C09" >
		  <?php foreach($CatForPa as $RegiTabl): 
						$ClavCata = $RegiTabl[0];		
						$DescCata = $RegiTabl[1];  
						$Activo = ( $ClavCata == $VC09) ? "selected" : ""; ?>
		  <option value="<?=$ClavCata?>" <?=$Activo?>>
		    <?=$ClavCata?>
		    <?=$DescCata?>
	      </option>
		  <?php  endforeach; ?>
	    </select></td>
	</tr>	
	<tr>
		<th>Metodo de Pago</th>
		<td><select name="C10" >
			<?php foreach($CatMetPa as $RegiTabl): 
						$ClavCata = $RegiTabl[0];		
						$DescCata = $RegiTabl[1];  
						$Activo = ( $ClavCata == $VC10) ? "selected" : ""; ?>
				<option value="<?=$ClavCata?>" <?=$Activo?>>
				  <?=$ClavCata?> <?=$DescCata?></option>
			<?php  endforeach; ?>
			</select>
		</td>
	</tr>	
	<tr>
		<th>USO</th>
		<td><!-- Ayuda imagen -->
		  <select name="C11" >
		    <?php foreach($CataUso as $RegiTabl): 
						$ClavCata = $RegiTabl[0];		
						$DescCata = $RegiTabl[1];  
						$Activo = ( $ClavCata == $VC11) ? "selected" : ""; ?>
		    <option value="<?=$ClavCata?>" <?=$Activo?>>
		      <?=$ClavCata?>
		      <?=$DescCata?>
	        </option>
		    <?php  endforeach; ?>
        </select></td>	
	</tr>	
	<tr>
		<th>&nbsp;</th>
		<td>&nbsp;</td>
	</tr>	
	<tr>
		<th>Fecha de Alta</th>
		<td><input type="date" name="C12" value="<?=$VC12?>" 
				   placeholder="Titulo"></td>
	</tr>	
	<tr>
		<th>&nbsp;</th>
		<td style="background-color:<?=$CoEdSe02?>">&nbsp;</td>
	</tr>	
	<tr>
		<td></td>
		<td >
			<?php 
	  			if ( $EstaSoli == '01' ) { ?>
			<input type="submit" name="Enviar" value="<?=$MesnTiMo?>" >
			<?php } ?>
		</td>
	</tr>	
</table>	
</body>
</html>