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
$InstSql =  "SELECT CTCClave, CTCDescri ".
			"FROM   art92_iii ".
			//"WHERE  CTCClave < '03' ".
			"ORDER BY CTCClave ";
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
      <td colspan="3"><a href="Base04.php?Param2=I"></a>
		  <a href="Base04.php?Param3=I"></a>
		  </td>
    </tr>
    <tr>
      <td>Clave</td>
      <td>Descripcion</td>
      <td colspan="2"><a href="ConacOrigCRUD.php?Param2=A&Param3=0">Alta</a></td>
    </tr>
	<?php
	  
	  foreach ($ResuSql as $RegiTabl):
			$VC03=$RegiTabl['CTCClave'];
			$VC04=$RegiTabl[1]; ?>
    <tr>
      <td><?php echo ($VC03); ?></td>
      <td><?=$VC04?></td>
      <td><a href="ConacOrigCRUD.php?Param2=M&Param3=<?=$VC03?>">Modi</a></td>
      <td><a href="ConacOrigCRUD.php?Param2=B&Param3=<?=$VC03?>">Borr</a></td>
    </tr>
	<?php 
	   endforeach ?>  
  </tbody>
</table>
</body>
</html>