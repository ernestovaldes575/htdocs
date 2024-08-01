<?php
    //?Servidor
    // $db_nombre = "difzinac_usuario";
    // $db_usuario = "difzinac_intranet";
    // $db_contraseña = "ECPTW5FPST1U";

    //!Local
    $db_nombre = "notas_php";
    $db_usuario = "root";
    $db_contraseña = "";
    //?Cadena de conexión
    $ConeBase = "mysql:host=localhost;dbname=$db_nombre";

    try {
        //?Crear conexion 
        $conn = new PDO($ConeBase, $db_usuario, $db_contraseña);
        if($conn){
            // echo"Conecado a la BD correctamente!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }