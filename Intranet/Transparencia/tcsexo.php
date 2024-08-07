<?php
    $InstSql = "SELECT CSClave AS Clave, CSDescri AS Descri ". 
    "FROM tcsexo ".
    "ORDER BY CSClave";
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResCat03 = $EjInSql->fetchall();
?>