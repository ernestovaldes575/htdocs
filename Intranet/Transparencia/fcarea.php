<?php
    $InstSql = "SELECT CARClave AS Clave, CARDescri AS Descri ". 
    "FROM tcarea ".
    "ORDER BY CARClave";
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResCat02 = $EjInSql->fetchall();
?>