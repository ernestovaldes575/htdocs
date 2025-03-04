<?php
	session_start();
	//Validamos si la sesion esta activa
	if (!$_SESSION['activo']) {
		header("Location:panel.php");
	}
	date_default_timezone_set('America/Mexico_City');
	// echo"hola mundo";
	$idUsuario = $_SESSION['idUsuario'];
	$nombre = $_SESSION['nombre'];
	$email = $_SESSION['email'];
	// echo"$idUsuario";
	// echo"$nombre";
	// echo"$email";
	//?incluir base de datos
	include_once("conexion_sqlserver.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Intranet</title>
	<link rel="shortcut icon" href="img/LOGO-PRINCIPAL.webp" type="image/x-icon">
	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<!-- Font Awesome 6 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha384-tbK1zQ5tnAgdKrrOd/nnzR0NwQiw5ZcyVt1O79c6YF41RYRgfZz69/6x5k5Qv4Ka" crossorigin="anonymous">
	<!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="style.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/Estilos/style.css">
	<style>
		a {
			text-decoration: none;
		}
		.sidebar {
			height: 100vh;
			overflow-y: auto;
		}
		.brand-link {
			text-decoration: none;
		}
	</style>
</head>
<body class="d-flex">
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
    <!-- Sidebar -->
    <aside class="sidebar bg-dark text-white p-3 flex-shrink-0">
        <div class="brand-link d-flex align-items-center mb-3">
            <img src="img/LOGO-PRINCIPAL.webp" alt="AdminL-Logo" class="brand-image rounded-circle me-2" style="width: 50px;">
            <span class="fs-4">
                Intranet Municipal
            </span>
        </div>
        <div class="user-panel d-flex align-items-center mb-3">
            <div class="image me-2">
                <img src="dist/img/images.png" class="rounded-circle" alt="User Image" style="width: 50px;">
            </div>
            <div class="info">
                <p class="mb-0 text-white"><?=$nombre?></p>
                <p class="mb-0 text-white"><?=$email?></p>
            </div>
        </div>
        <nav class="nav flex-column">
            <a href="panel.php" class="nav-link text-white border">
			<i class="bi bi-menu-button-wide"></i>
                <span class="ms-2">Panel de control</span>
            </a>
            <a href="lista_notas.php" class="nav-link text-white border">
			<i class="bi bi-card-checklist"></i>
                <span class="ms-2">Lista de Notas</span>
            </a>
            <a href="lista_usuarios.php" class="nav-link text-white border">
				<i class="bi bi-people-fill"></i>
                <span class="ms-2">Lista de Usuarios</span>
            </a>
            <a href="lista_noticia.php" class="nav-link text-white border">
				<i class="bi bi-newspaper"></i>
                <span class="ms-2">Noticias</span>
            </a>
            <a href="lista_aviso.php" class="nav-link text-white border">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <span class="ms-2">Avisos</span>
            </a>
            <a href="lista_banner.php" class="nav-link text-white border border-opacity-25">
                <i class="bi bi-card-image"></i>
                <span class="ms-2">Banner</span>
            </a>
            <a href="salir.php" class="nav-link text-white mt-2 btn btn-outline-danger border border-danger d-flex justify-content-start">
                <i class="bi bi-box-arrow-left"></i>
                <span class="ms-2 fw-semibold">Salir</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-grow-1">

        <!-- Page Content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Intranet</h1>
                        </div>
                    </div>
                </div>  
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- Card Content -->

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>