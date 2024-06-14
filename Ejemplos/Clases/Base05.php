<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	
//1) Permiso a cas
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

//2) Entrar a revisar cocina
$BandMens = true;
			//Campo   0          1	
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
	  //3) Mostra lo que hay en la cocina
	  foreach ($ResuSql as $RegiTabl):
			$VC03 = $RegiTabl['CTCClave'];
			$VC04 = $RegiTabl[1]; 
	?>
    <tr>
      <td><?=$VC03?></td> <!-- Mostar lo que se encontro de la cocina -->
      <td><?=$VC04?></td>
    </tr>
	<?php 
	   endforeach ?>  
  </tbody>
</table>
</body>
</html>