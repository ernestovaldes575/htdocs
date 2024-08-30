<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	$TituEnca = "Anfitrion";
	include $_SERVER['DOCUMENT_ROOT'].'/IntraBroker/Encabezado/EncaLiga.php';
	?>
</head>
<script language="JavaScript" src="Anfitrion.js"></script>
<body>
<header>
  <?php 
   //Encabezado	
   require_once($_SERVER['DOCUMENT_ROOT'].'/IntraBroker/Encabezado/EncaPrin.php'); 
  ?> 
 </header>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/IntraBroker/Conexion/ConBasBroker.php');
	$InstSql = "SELECT BConsecutivo,BBroker ".
			   "FROM   stbroker ". 
			   "WHERE BEstado = 'A' ";
	//echo '1)'.$InstSql.'<br>'; 
	$EjInSql = $ConeBase->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetchAll();
?>	
<!--encabezado-->
<table class="ListInfo">
  <tr>
	<td>
	 <a href="/IntraBroker/Intranet.php" class="regresar">Regresar</a>
	</td> 
  </tr>
  <?php 
	foreach ($ResuSql as $RegiTabl):
		$V03 = $RegiTabl[0];		
		$V04 = $RegiTabl[1]; 	
	?>
  <tr>
    <td><a href="BrokerInic.php?Param1=<?=$V03?>"><?=$V04?></td>
  </tr>
  <?php	endforeach; ?> 
</table>
</body>
</html>