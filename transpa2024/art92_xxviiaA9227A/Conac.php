<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php include("ConacSERP.php"); ?>	
<body>
<form method="post" name="formulario" action="ConacCRUD.php">
	<input type="hidden" name="C01" value="<?=$TipoMovi?>">
	<input type="hidden" name="C02" value="<?=$ClavBusq?>">
  <input type="hidden" name="C03" value="<?=$VC03?>">
	<input type="hidden" name="C04" value="<?=$VC04?>">
  <input type="hidden" name="C05" value="<?=$VC05?>">
  
  <table width="200" border="1">
    <tbody>
      
      <tr>
        <td>&nbsp;</td>
        <td><a href="ConacList.php">Regresar</a></td>
      </tr>
     
      <tr>
        <td>Periodo Informacion</td>				
        <td><input type="text" name="C06" value="<?=$VC06?>"></td>
      </tr>

	  <tr>
        <td>Periodo Informacion (Otro)</td>				<!-- Campo de la linea 9 de ConacSERP -->
        <td><input type="text" name="C07" value="<?=$VC07?>"></td>
      </tr>

      <tr>
        <td>Hipervinculo de Informacion</td>				
        <td><input type="text" name="C08" value="<?=$VC08?>"></td>
      </tr>
      
      <tr>
        <td>Area Respsable</td>				
        <td><input type="text" name="C09" value="<?=$VC09?>"></td>
      </tr>
      
      <tr>
        <td>Nota</td>				
        <td><input type="text" name="C010" value="<?=$VC10?>"></td>
      </tr>

	
	<!--	
	  Agregar mas campos  
	  <tr>
        <td>Descrio</td>				
        <td><input type="text" name="C04" value="<?=$VC04?>"></td>
      </tr>
	-->	
      <tr>
        <td>&nbsp;</td>
        <td><span class="botones">
          <input type="submit" name="Enviar" class="registrar" value="<?=$DescTiMo?>" >
        </span></td>
      </tr>
    </tbody>
  </table>
</form>	
<?php //} ?>	
</body>
</html>