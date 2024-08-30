<!DOCTYPE html>
<html lang="es">
<head>  
	<?php
	  $RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraAgente/";
      $TituEnca= "Broker";
   	  include $RutaIntr.'Encabezado/EncaLiga.php'; ?>
</head>
<body>
  <header class="header">
    <?php include $RutaIntr.'Encabezado/EncaHead.php'?>
  </header>
<?php include('BrokerSERP.php'); ?>	
<!--encabezado-->
<table class="ListInfo">
  <tr>
    <td align="center">	 
	 <?php //Catalogo de Ejercicio
	   $DatoList = "02";
	   include ('BrokerVC.php');
	 ?></td> 
	<td colspan="5" align="right">
	 <a href="/IntraAgente/MenuIntranet.php" class="regresar">Regresar</a>
	</td> 
  </tr>
  <tr align="center">
	<td colspan="2" >Broker</td> 
	<td>Solicitud</td> 
	<td>Vo. Bo Agente</td> 
	<td>Env. a prov.</td> 
	<td>Recibe prov.</td> 
	<td>Facturar</td> 
  </tr>

  <?php 
    $DatoList = "01"; 
	foreach ($ResuSql as $RegiTabl):
		include ('BrokerVC.php'); 
	?>
  <tr>
    <td width="62">
	  <img src="../Imagen/Bro<?=$V03?>.jpg" width="62" height="55" alt=""/>
	</td>
    <td width="60"><?=$V04?></td>
	<td width="60"><a href="BrokerSegu.php?Param1=<?=$V03?>&Param2=01"><?=$V05?></a></td>
	<td width="60"><a href="BrokerSegu.php?Param1=<?=$V03?>&Param2=03"><?=$V06?></a></td>
	<td width="60"><a href="BrokerSegu.php?Param1=<?=$V03?>&Param2=04"><?=$V07?></a></td>
	<td width="60"><a href="BrokerSegu.php?Param1=<?=$V03?>&Param2=05"><?=$V08?></a></td>
	<td width="60"><a href="BrokerSegu.php?Param1=<?=$V03?>&Param2=06"><?=$V09?></a></td>
  </tr>
  <?php	endforeach; ?> 
</table>
</body>
</html>