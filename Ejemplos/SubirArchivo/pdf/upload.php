<?php
    // Verificar si se ha enviado un archivo
    if(isset($_FILES['pdf'])) {
        $file_name = $_FILES['pdf']['name'];
        $file_tmp = $_FILES['pdf']['tmp_name'];

        include_once('conexion/conexion.php');

        // Leer el archivo
        $data = file_get_contents($file_tmp);

        // Preparar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO pdfs (nombre, pdf) VALUES (?, ?)");
        $stmt->bind_param("sb", $file_name, $data);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "PDF subido correctamente a la base de datos.";
        } else {
            echo "Error al subir el PDF: " . $conn->error;
        }

        // Cerrar la conexión
        $stmt->close();
        $conn->close();
    }