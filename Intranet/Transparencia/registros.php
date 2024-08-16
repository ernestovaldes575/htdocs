<!DOCTYPE html>
<html>
<head>
    <title>Registros</title>
</head>
<body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Procesar los datos del formulario (si ya se ha enviado)
            $numPersonas = $_POST['numPersonas'];
    
            echo "<table border='1'>";
            echo "<tr>
                    <th>No.</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha de Término</th>
                    <th>Hipervínculo</th>
                    <th>Área Responsable</th>
                    <th>Fecha de Actualización</th>
                    <th>Fecha de Valdiación</th>
                    <th>Nota</th>
                </tr>";
            for ($i = 0; $i < $numPersonas; $i++) {
                echo "<tr>";
                echo "<td><input type='number' name='C05' id='VC05' value='<?=$VC05?>' 
						class='form-control' placeholder='Descripción'></td>";
                echo "<td><input type='date' name='C06' id='VC06'></td>";
                echo "<td><input type='date' name='C07' id='VC07'></td>";
                echo "<td><input type='number' name='C08' id='VC08' value='<?=$VC05?>' 
                class='form-control' placeholder='Descripción'></td>";
                echo "<td><input type='date' name='C09' id='VC09'></td>";
                echo "<td><input type='date' name='C10' id='VC10'></td>";
                echo "<td><input type='date' name='C11' id='VC11'></td>";
                echo "<td><input type='text' name='C12' id='VC12'></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<button type='submit'>Registrar</button>";
        } else {
            // Mostrar el formulario inicial
            ?>
            <form method="post">
                Número de personas a registrar: <input type="number" name="numPersonas" required>
                <button type="submit">Llenar formulario</button>
            </form>
            <?php
        }
        ?>
    </body>
    </html>