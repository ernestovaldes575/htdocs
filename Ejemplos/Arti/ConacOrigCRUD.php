<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	
//1) conexion de base de Datos
$contraseña = '';
$user = 'root';
$dbname = 'paginaweb';
	
try{
	$ConeBase = new PDO("mysql:host=localhost;dbname=$dbname", "$user", $contraseña);
	$ConeBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$ConeBase->exec("SET CHARACTER SET utf8");
}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
}

//2) Query	
$BandMens = false;

if(isset($_POST['Enviar'])){ 
   $TipoMovi = $_POST['C01'];
   $ClavBusq = $_POST['C02'];	
   $Clave = $_POST['C03'];
   $Descr = $_POST['C04'];	
   switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT cctipoclas ".
			                 "VALUE ('$Clave','$Descr') ";
	 			break;
	 case "M": $InstSql = "UPDATE cctipoclas ".
						  "SET  CTCDescri = '$Descr'".
						  "WHERE  CTCClave = '$ClavBusq' ";
	 			break;
	 case "B":  $InstSql = "DELETE FROM cctipoclas ".
			    		   "WHERE  CTCClave = '$ClavBusq' ";
	 			break;
	}
	if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
	$EjInSql = $ConeBase->prepare($InstSql);
	$EjInSql->execute();
	
	header("location: ConacOrig.php");
}
	
else	
{
  if ( isset($_GET["Param2"]) ){	
    $TipoMovi = $_GET["Param2"];
    $ClavBusq = $_GET["Param3"]; 
   }	

	//Consulta
	$InstSql =  "SELECT CTCClave, CTCDescri ".
				"FROM   cctipoclas ".
				"WHERE  CTCClave =  '$ClavBusq' ".
				"ORDER BY CTCClave ";
	if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
	$EjInSql = $ConeBase->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetchall();

	$VC03=""; 	$VC04="";
	foreach ($ResuSql as $RegiTabl):
			$VC03=$RegiTabl['CTCClave'];
			$VC04=$RegiTabl[1]; 
	endforeach;	

	$DescTiMo = "";
	switch( $TipoMovi)
	{ case "A": $DescTiMo = "Alta";
				break;
	 case "M":  $DescTiMo = "Modificar";
				break;
	 case "B":  $DescTiMo = "Baja";
				break;
	}
?>	
	
<body>
<form method="post" name="formulario">
	<input type="hidden" name="C01" value="<?=$TipoMovi?>">
	<input type="hidden" name="C02" value="<?=$ClavBusq?>">
  <table width="200" border="1">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td><a href="ConacOrig.php">Regresar</a></td>
      </tr>
      <tr>
        <td width="79">Calve</td>
        <td width="105"><input type="text" name="C03" value="<?=$VC03?>"></td>
      </tr>
      <tr>
        <td>Descrio</td>
        <td><input type="text" name="C04" value="<?=$VC04?>"></td>
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
<?php } ?>	
</body>
</html>