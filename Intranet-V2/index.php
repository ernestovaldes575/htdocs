<?php
    session_start();
    // Validamos si la sesión está activa
    if(!empty($_SESSION['activo'])) {
        header("location:panel.php");
        exit; // Asegura que el script se detenga después de redirigir
    }

    // Incluimos el archivo de conexión a la base de datos
    include_once("conexion_sqlserver.php");

    $error = ""; // Variable para almacenar mensajes de error

    if (isset($_POST["ingresar"])){
        $email = $_POST["email"];
        $pass =  $_POST["password"];
        $band = false;
        if (!empty($email) && !empty($pass)){
            // Preparamos la consulta SQL
            $query = "SELECT id, email, nombre, telefono, password, es_admin 
                        FROM usuario WHERE email=:email AND password=:password";
                if($band)echo"1)$query";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt->bindParam(":password", $pass, PDO::PARAM_STR);

        // Ejecutamos la consulta
        $resultado = $stmt->execute();
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$registro){
            $error = "Email o Contraseña son invalidos";
        }else{
            // Iniciamos la sesión
            $_SESSION['activo'] = true;
            $_SESSION['idUsuario'] = $registro['id'];
            $_SESSION['nombre'] = $registro['nombre'];
            $_SESSION['email'] = $registro['email'];
            $_SESSION['esAdmin'] = $registro['es_admin'];
            
            header("Location: panel.php");
            exit; // Asegura que el script se detenga después de redirigir
        }
        }else {
            $error = "Error, algunos campos están vacíos";
        }
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/Estilos/style.css">
    <link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
    <title>Intranet</title>
</head>
<body>
    <div class="full-height">
        <?php include 'includes/Encabezado.php';?>
        <div class="d-flex align-items-center justify-content-center">
            <div class="card shadow col-xl-3 col-md-5 col-sm-10">
                <div class="card-header d-flex justify-content-between align-items-center fw-bold">
                    Intranet
                    <i class="bi bi-person-fill"></i>
                </div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" 
                            placeholder="Ingresa el email">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Ingresa el password">
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" name="ingresar" class="btn btn-primary d-block w-100 shadow-lg fw-semibold text-light">
                                    Acceso
                            </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- REQUIRED SCRIPTS -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>
</html>
