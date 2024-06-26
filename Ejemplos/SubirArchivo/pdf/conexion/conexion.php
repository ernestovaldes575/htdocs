<?php
    // Conexión a la base de datos (ajusta los valores según tu configuración)
    $conn = new mysqli('localhost', 'root', '', 'basedatos');
    if (!$conn->connect_error) {
        // die("Error de conexión: " . $conn->connect_error);
        echo 'Conexion exitosa';
    }
?>