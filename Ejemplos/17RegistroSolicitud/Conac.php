<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Total Plazas Vacantes </title>
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
        <td>Fecha Inicio</td>				
        <td><input type="date" name="C06" value="<?=$VC06?>"></td>
      </tr>

      <tr>
        <td>Fecha Termino</td>				
        <td><input type="date" name="C07" value="<?=$VC07?>"></td>
      </tr>

      <tr>
        <td>Total PLazas Base</td>				
        <td><input type="text" name="C08" value="<?=$VC08?>"></td>
      </tr>

      <tr>
        <td>Total Plazas Base Ocupadas</td>				
        <td><input type="text" name="C09" value="<?=$VC09?>"></td>
      </tr>

      <tr>
        <td>Total Plazas Base Vacantes</td>				
        <td><input type="text" name="C10" value="<?=$VC10?>"></td>
      </tr>

      <tr>
        <td>Total Plazas de Confianza</td>				
        <td><input type="text" name="C11" value="<?=$VC11?>"></td>
      </tr>

      <tr>
        <td>Total Plazas de Confianza Ocupadas</td>				
        <td><input type="text" name="C12" value="<?=$VC12?>"></td>
      </tr>

      <tr>
        <td>Total Plazas de Confianza Vacantes</td>				
        <td><input type="text" name="C13" value="<?=$VC13?>"></td>
      </tr>

      <tr>
        <td>Area Responsable</td>				
        <td><input type="text" name="C14" value="<?=$VC14?>"></td>
      </tr>

      <tr>
        <td>Fecha Actualizacion </td>				
        <td><input type="date" name="C15" value="<?=$VC15?>"></td>
      </tr>

      <tr>
        <td>Fecha Validacion</td>				
        <td><input type="date" name="C16" value="<?=$VC16?>"></td>
      </tr>

      <tr>
        <td>Nota</td>				
        <td><input type="text" name="C17" value="<?=$VC17?>"></td>
      </tr>
	
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