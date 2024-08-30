<?php

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Cargar el archivo .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Validar variables de entorno
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER']);

// Solo valida que no esté vacía si estás usando el entorno del servidor
if (isset($_ENV['DB_SERVER_PASSWORD'])) {
    $dotenv->required('DB_SERVER_PASSWORD')->notEmpty();
}

// Puedes alternar entre las configuraciones comentando/descomentando según el entorno

//?Servidor
// $db_host = $_ENV['DB_SERVER_HOST'];
// $db_nombre = $_ENV['DB_SERVER_NAME'];
// $db_usuario = $_ENV['DB_SERVER_USER'];
// $db_contraseña = $_ENV['DB_SERVER_PASSWORD'];

//!Local
$db_host = $_ENV['DB_HOST'];
$db_nombre = $_ENV['DB_NAME'];
$db_usuario = $_ENV['DB_USER'];
$db_contraseña = $_ENV['DB_PASSWORD'];

//?Cadena de conexión
$ConeBase = "mysql:host=$db_host;dbname=$db_nombre";

try {
    //?Crear conexión
    $conn = new PDO($ConeBase, $db_usuario, $db_contraseña);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($conn) {
        echo "Conectado a la BD correctamente!";
    }
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}