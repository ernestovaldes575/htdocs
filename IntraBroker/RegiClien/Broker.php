<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	  $RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraBroker/";
      $TituEnca= "Clientes";
   	  include $RutaIntr.'Encabezado/EncaLiga.php'; ?>
</head>
<body>
  <header class="header">
    <?php include $RutaIntr.'Encabezado/EncaHead.php'?>
  </header>
<?php
	include($RutaIntr.'Conexion/ConBasBroker.php');
	$InstSql = "SELECT BConsecutivo,BBroker ".
			   "FROM   stbroker ". 
			   "WHERE  BConsecutivo > 999 AND ". 
			   		  "BEstado = 'A' ";
	//echo '1)'.$InstSql.'<br>'; 
	$EjInSql = $ConeBase->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetchAll();
?>	
<!--encabezado-->
<table class="ListInfo">
  <tr>
	<td colspan="2" align="right">
	 <a href="/IntraBroker/Intranet.php" class="regresar">Regresar</a>
	</td> 
  </tr>
  <?php 
	foreach ($ResuSql as $RegiTabl):
		$V03 = $RegiTabl[0];		
		$V04 = $RegiTabl[1]; 	
	?>
  <tr>
    <td width="62">
	  <a href="BrokerInic.php?Param1=<?=$V03?>">
	  <img src="../Imagen/Bro<?=$V03?>.jpg" width="62" height="55" alt=""/>
	</a>
	</td>
    <td width="60"><?=$V04?></td>
  </tr>
  <?php	endforeach; ?> 
</table>
</body>
</html>