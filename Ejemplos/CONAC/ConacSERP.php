<?php
    //?Conexion a la base de datos
    include 'Config/Conexion.php';

    $InstSql = "SELECT `CCLTipoDocu`, `CCLClave`, `CCLDescripcion` ".
                "FROM ccclasifica ORDER BY `CCLClave`, `CCLTipoDocu`";
    $EjInSql = $ConeBase->prepare($InstSql);
    $EjInSql->execute();
    $ResuSql = $EjInSql->fetchAll();
