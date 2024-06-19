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
$dbname = 'transpa2024';
	
try{
	$ConeBase = new PDO("mysql:host=localhost;dbname=$dbname", "$user", $contraseña);
	$ConeBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$ConeBase->exec("SET CHARACTER SET utf8");
}catch(PDOException $error){
		die("Conexion Fallida: ".$error->getMessage());
}

//2) Query	
$BandMens = false;

if ( isset($_GET["Param1"]) ){	
$InstSql =  "INSERT tt9202borgan ".
			//"VALUE ('09','tenedor') ";
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
}			

if ( isset($_GET["Param2"]) ){	
$InstSql =  "UPDATE tt9202borgan ".
			"SET  OFechInicio = 'cuchara'".
			//"WHERE  CTCClave = '09' ";
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
}			

	if ( isset($_GET["Param3"]) ){	
$InstSql =  "DELETE FROM tt9202borgan ".
			"WHERE  OConsecutivo = '09' ";
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
}
	
$InstSql =  "SELECT OConsecutivo, OFechInicio, OHipervin ".
			"FROM   tt9202borgan ".
			//"WHERE  CTCClave < '03' ".
			"ORDER BY OConsecutivo ";
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetchall();

?>	
	
<body>
<table width="200" border="1">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><a href="Base04.php?Param1=I">Alta</a>
		  <a href="Base04.php?Param2=I">Modi</a>
		  <a href="Base04.php?Param3=I">Borr</a>
		  </td>
    </tr>
    <tr>
      <td>No.</td>
      <td colspan="2">Fecha Inicio</td>
	  <td>Hipervinculo</td>
    </tr>
	<?php
	  
	  foreach ($ResuSql as $RegiTabl):
			$VC03=$RegiTabl['OConsecutivo'];
			$VC04=$RegiTabl['OFechInicio']; 
			$VC05=$RegiTabl['OHipervin'];
	?>
    <tr>
      <td><?php echo ($VC03); ?></td>
      <td><?=$VC04?></td>
      <td>&nbsp;</td>
    </tr>
	<?php 
	   endforeach ?>  
  </tbody>
</table>
</body>
</html>