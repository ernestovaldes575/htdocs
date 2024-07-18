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
	//incluir base de datos
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style>
		a{
			text-decoration: none;
		}
	</style>
</head>
<scrip class="hold-transition sidebar-mini">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
		</nav>
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="index3.html" class="brand-link ">
				<img src="img/LOGO-PRINCIPAL.webp" alt="AdminL-Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				Intranet
			</a>
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="dist/img/images.png" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<p class="text-white"><?=$nombre?></p>
						<p class="text-white"><?=$email?></p>
					</div>
				</div>
				<nav class="mt-2 shadow">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="panel.php" class="nav-link">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Panel de control
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="lista_notas.php" class="nav-link">
								<i class="nav-icon fas fa-user-cog"></i>
								<p>
									Lista de Notas
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="lista_usuarios.php" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>
									Lista de Usuarios
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="salir.php" class="nav-link">
								<i class="nav-icon fas fa-sign-out-alt"></i>
								<p>
									Salir
								</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>
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