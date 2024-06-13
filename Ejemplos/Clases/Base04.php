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
$InstSql =  "SELECT CTCClave, CTCDescri ".
			"FROM   cctipoclas ".
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
      <td>Clave</td>
      <td>Descripcion</td>
    </tr>
	<?php
	  
	  foreach ($ResuSql as $RegiTabl):
			$VC03=$RegiTabl['CTCClave'];
			$VC04=$RegiTabl[1]; ?>
    <tr>
      <td>01</td>
      <td>Conac</td>
    </tr>
	<?php 
	   endforeach ?>  
  </tbody>
</table>
</body>
</html>