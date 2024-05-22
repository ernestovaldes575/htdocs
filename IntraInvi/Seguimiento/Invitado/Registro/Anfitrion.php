<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" type="text/css" href="/Intranet/Encabezado/EstiIntr.css">
</head>
<script language="JavaScript" src="PWRegistro.js"></script>
<body>
<header>
  <?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaCook.php'); 
    //Encabezado	
   require_once($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaPrin.php'); 
  ?> 
 </header>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Conexion/ConBasInvita.php');
	$InstSql = "SELECT AConsecutivo, AAnfitrion ". 
			   "FROM stanfitrion ". 
			   "WHERE AEstado = 'A' ";
	echo '1)'.$InstSql.'<br>'; 
	$EjInSql = $ConeBase->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetchAll();
?>	
<!--encabezado-->
<table class="ListInfo">
  <tr>
	<td>
	 <a href="/IntraInvi/Intranet.php" class="regresar">Regresar</a>
	</td> 
  </tr>
  <?php 
	foreach ($ResuSql as $RegiTabl):
		$V03 = $RegiTabl[0];		
		$V04 = $RegiTabl[1]; 	
	?>
  <tr>
    <td><a href="InvitadoInic.php?Param1=<?=$V03?>"><?=$V04?></td>
  </tr>
  <?php	endforeach; ?> 
</table>
</body>
</html>