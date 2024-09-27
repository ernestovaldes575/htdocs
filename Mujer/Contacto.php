<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $Titulo = "Contacto";
    include "EstrPagi/Ligas.php";
    ?>
</head>

<body>
    <?php include "EstrPagi/Navegacion.php"; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card col-md-6 border p-3 shadow">
                <h2 class="text-center mb-4">Contacto</h2>
                <form>
                    <!-- Campo de Nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" required>
                    </div>
                    <!-- Campo de Correo Electrónico -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
                    </div>
                    <!-- Campo de Contraseña -->
                    <div class="mb-3">
                        <label for="text" class="form-label">Comentario</label>
                        <textarea name="" id="text" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 text-light fw-semibold">
                        Registrarse
                    </button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'componentes/footer.php' ?>
</body>

</html>