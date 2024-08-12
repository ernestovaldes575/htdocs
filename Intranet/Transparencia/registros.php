<!DOCTYPE html>
<html>
<head>
    <title>Registros</title>
</head>
<body>
    <form method="post" action="procesar.php">
        <label for="numregis">Número de personas a registrar:</label>
        <input type="number" id="numregis" name="numregis">
        <button type="button" onclick="agregar()">Agregar</button>
        <div id="campos"></div>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numregis = $_POST['numregis'];

    // Procesar los datos de cada persona
    for ($i = 1; $i <= $numregis; $i++) {
        $VC06 = $_POST['VC06'.$i];
        // ... otros campos
        
        // Aquí puedes guardar los datos en una base de datos, un archivo, etc.
        echo "Nombre persona $i: $VC06<br>";
    }
}
?>
</body>
</html>
