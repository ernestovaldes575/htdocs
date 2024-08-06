<?php
    session_start();
    // Validamos si la sesión está activa
    if (!empty($_SESSION['activo'])) {
        header("location:panel.php");
        exit; // Asegura que el script se detenga después de redirigir
    }

    // Incluimos el archivo de conexión a la base de datos
    include_once("conexion_sqlserver.php");

    $error = ""; // Variable para almacenar mensajes de error

    if (isset($_POST["ingresar"])) {
        $email = $_POST["email"];
        $pass =  $_POST["password"];
        $band = false;
    if (!empty($email) && !empty($pass)) {
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

        if (!$registro) {
            $error = "Email o Contraseña son invalidos";
        } else {
            // Iniciamos la sesión
            $_SESSION['activo'] = true;
            $_SESSION['idUsuario'] = $registro['id'];
            $_SESSION['nombre'] = $registro['nombre'];
            $_SESSION['email'] = $registro['email'];
            $_SESSION['esAdmin'] = $registro['es_admin'];
            header("Location: panel.php");
            exit; // Asegura que el script se detenga después de redirigir
        }
    } else {
        $error = "Error, algunos campos están vacíos";
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <!-- Ionicons -->   
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/Estilos/style.css">
    <title>Intranet</title>
</head>
<body>
    
    <div class="full-height">
        <?php include 'includes/Encabezado.php';?>
        <div class="d-flex align-items-center justify-content-center">
            <div class="card shadow col-xl-3">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">
                        Ingrese sus datos para iniciar sesión
                    </p>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Ingresa el email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Ingresa el password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" name="ingresar" class="btn btn-primary d-block w-100 shadow-lg fw-semibold">
                                    Acceso
                            </button>
                            </div>
                      Idiv>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    

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
