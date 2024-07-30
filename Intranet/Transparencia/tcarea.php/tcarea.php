<!DOCTYPE html>
<html lang="es">
<head>  </head>

<body> 
<header class="shadow mb-4 bg-white">
<?php 
	//Cargar Catalogo tcsentindi
	$InstSql = "SELECT CSIClave AS Clave, CSIDescri AS Descri ". 
             "FROM tcsentindi ".
             "ORDER BY CSIClave";
  if ($BandMens) echo '1)'.$InstSql.'<br>'; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResCat01 = $EjInSql->fetchall();
?> 
</header>
</html>



