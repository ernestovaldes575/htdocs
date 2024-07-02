<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

// Información de búsqueda
$TrimTrab = $ABusqMae[1];   // Trimestre de trabajo
$ConsFrac = $ABusqMae[2];   // Consecutivo de la Fraccion del Unidad
$NumeFrac = $ABusqMae[3];   // Fraccion de trabajo 92,93
$NumeInci = $ABusqMae[4];   // Numero Inciso
$NumeSubi = $ABusqMae[5];   // Numero de Subinciso
$Nomativi = $ABusqMae[6];   // Normatividad

$BandMens = isset($_GET["Param0"]);   // Bandera para mensajes (opcional)

// Consulta para cargar los registros
$InstSql = "SELECT AConsecutivo, ANumeRegi, AFechaInicio, AFechaTermino, ADenominacion, AHipervinculo " .
           "FROM tt9203facare " .
           "WHERE AAyuntamiento = '$ClavAyun' AND AEjercicio = $EjerTrab AND AConsFrac = $ConsFrac AND ANumeTrim = '$TrimTrab' ";

if ($BandMens) {
    echo '1)'.$InstSql.'<br>';  // Mostrar consulta (opcional)
}

try {
    // Ejecutar la consulta
    $EjInSql = $ConeBase->prepare($InstSql);
    $EjInSql->execute();
    $ResuSql = $EjInSql->fetchAll();  // Obtener todas las filas

    // Verificar si se encontraron resultados
    if ($ResuSql) {
        // Mostrar los resultados en una tabla o lista
        foreach ($ResuSql as $registro) {
            echo "<tr>";
            echo "<td>" . $registro['AConsecutivo'] . "</td>";
            echo "<td>" . $registro['ANumeRegi'] . "</td>";
            echo "<td>" . $registro['AFechaInicio'] . "</td>";
            echo "<td>" . $registro['AFechaTermino'] . "</td>";
            echo "<td>" . $registro['ADenominacion'] . "</td>";
            echo "<td>" . $registro['AHipervinculo'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "No se encontraron registros.";
    }
} catch (PDOException $e) {
    // Capturar y mostrar errores de la base de datos
    echo "Error: " . $e->getMessage();
}
?>
