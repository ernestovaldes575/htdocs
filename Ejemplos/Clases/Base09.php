<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
//4) Cargar el valor	
if(isset($_POST['Enviar'])){ 
	$CampBusq = $_POST['CampBusq'];
	$PagiRegr = "location: Base07.php?ParBus=$CampBusq";
	header($PagiRegr);
}
else
{
  //5) Leer valor 
  $CondiQuer = "";	
  if( trim($_GET['ParBus']) != ''){
	 $ParBus = $_GET["ParBus"];	
	 $CondiQuer = "WHERE CTCClave like '%$ParBus%' "; 
	}
	
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
$BandMens = true;
$InstSql =  "SELECT CTCClave, CTCDescri ".
			"FROM   cctipoclas $CondiQuer ".
			"ORDER BY CTCClave ";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchall();
	
?>	
	
<body>
	
<form method="post" name="formulario">
<table width="200" border="1">
  <tbody>
    <tr>
      <td>Busqueda</td>
      <td><input type="text" name="CampBusq" >
		  <span class="botones">
		  <input type="submit" name="Enviar" value="Enviar" >
		  </span></td>
    </tr>
  </tbody>
</table>
	  
<table width="200" border="1">
  <tbody>
    <tr>
      <td>Clave</td>
      <td>Descripcion</td>
    </tr>
	<?php
	  //3) Mostrar informacion
	  foreach ($ResuSql as $RegiTabl):
			$VC03 = $RegiTabl['CTCClave'];
			$VC04 = $RegiTabl[1]; 
	?>
    <tr>
      <td><?=$VC03?></td>
      <td><?=$VC04?></td>
    </tr>
	<?php 
	   endforeach ?>  
  </tbody>
</table>
</form>	
<?php }
?>	
</body>
</html>