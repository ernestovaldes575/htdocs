<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 	
 if(isset($_POST['Enviar'])){ 
	$Valor01 = $_POST['Dato01'];
	$Valor02 = $_POST['Dato02'];
	$OpciCalc = $_POST['Calcu']; 
	
	switch ($OpciCalc) 
	 {case "S": $Suma = $Valor01 + $Valor02;
	  			echo "La suma es: $Suma ";
	 			break;
	 case "R": $Resta = $Valor01 - $Valor02;
	  			echo "La restaes: $Resta";
	 			break;
	case "M": $Multi = $Valor01 * $Valor02;
	  			echo "La mult es: $Multi";
	 			break;			
	 }
	
  echo "<a href='Suma02.php'>Regresar</a>";
	 
 }
 else
  { 

?>	 
<form method="post" name="formulario">
  <p>&nbsp;</p>
  <table width="200" border="1">
    <tbody>
      <tr>
        <td>No 1 :</td>
        <td><input type="number" name="Dato01"></td>
      </tr>
      <tr>
        <td>No 2</td>
        <td><input type="number" name="Dato02"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="Calcu" type="radio" value="S" checked="checked"> Suma<br>
			<input type="radio" name="Calcu" value="R"> Resta<br>
			<input type="radio" name="Calcu" value="M"> Resta<br>
	    </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="botones">
          <input type="submit" name="Enviar" class="registrar" value="Sumar" >
        </span></td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
</form>	
<?php
 }
?>	
</body>
</html>