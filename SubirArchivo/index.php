<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Archivo</title>
</head>
<body>
    <form method="POST">
        <label for="archivo">Selecciona un Archivo</label>
        <input type="file" webkitdirectory directory multiple id="carpeta">
        <button onclick="handleFolder()">Subir Carpeta</button>
    </form>

    <script>
        function handleFolder() {
            const files = document.getElementById('carpeta').files;
            if (files.length === 0) {
                alert('Por favor selecciona una carpeta.');
                return;
            }
            const fileListArray = Array.from(files);

            fileListArray.forEach(file => {
                console.log('Nombre del archivo:', file.name);
                // console.log('Tipo del archivo:', file.type);
                console.log('Tamaño del archivo:', file.size, 'bytes');
                console.log('Ruta completa:', file.webkitRelativePath);
            });
        }
    </script>
</body>
</html>