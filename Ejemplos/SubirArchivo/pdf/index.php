<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir PDF a Base de Datos</title>
</head>
<body>
    <h2>Subir PDF</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" webkitdirectory directory multiple name="pdf">
        <input type="submit" value="Subir PDF">
    </form>
    
</body>
</html>
