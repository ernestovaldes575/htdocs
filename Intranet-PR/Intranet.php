<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$Titulo = 'Inicio de Sesión';
	include 'components/encabezado.php';
	?>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<?php
	//session_start();
	//Interno/Externo
	// $_SESSION["ConeInEx"] = 'Interno';
	// include_once "Archivos/Files/fecha.php";
	// require("Conexion/conlogin.php");
	// if(isset($_POST['Ingresar'])){
	// $usuario = htmlentities(addslashes($_POST["InputCla"]));
	// $password = htmlentities(addslashes($_POST["InputCon"]));
	// $InstSql = "SELECT 	AConsecut,AAyuntamiento,CAYDescripcion,". 
	// "AUnidAdmi,CUNClaveUnidad,CUNDescripcion ". 
	// "FROM atacceso ". 
	// "inner Join acayuntamiento ON  CAYClave = AAyuntamiento ".
	// "inner Join acunidades ON CUNConsecutivo = AUnidAdmi ".
	// "WHERE 	AClaceAcce = '".$usuario."' AND ". 
	// "AContAcce= '".$password."'";
	// $ResuSql = $con->prepare($InstSql);
	// $ResuSql->execute();
	// $result = $ResuSql->fetch();
	// if( $result ){
	// $ConsUsua = $result['AConsecut'];
	// $ClavAyun = $result['AAyuntamiento'];
	// $DescAyun = $result['CAYDescripcion'];
	// $ConsUnid = $result['AUnidAdmi'];
	// $DescUnid = $result['CUNDescripcion'];
	// $EjerTrab = $hoy['year'];
	// $ArCookie = $ConsUsua.'|'.$ClavAyun.'|'.$DescAyun.'|'.$ConsUnid.'|'.$DescUnid.'|'.$EjerTrab.'|';
	// setcookie("CEncaAcc", "$ArCookie");
	// $Nivel = 1;
	// $ArCooki2 = $Nivel.'|||';
	// setcookie("CMenu", "$ArCooki2");
	// header("location: 	MenuIntranet.php");
	// }else{
	// echo 
	// '<script>
	// alert("No se encotraron registros\nVerifique que los datos sean correctos");
	// </script>';
	// header("location: Intranet.php");
	// }
	// }
	?>
		<?php
	session_start();

	// Verificamos si el usuario ya está logueado y redirigimos si es así.
	if (!empty($_SESSION['activo'])) {
		header("Location: MenuIntranet copy.php");
		exit;
	}

	// Incluimos la conexión
	include_once "Conexion/conlogin.php";

	// Procesamos el formulario de inicio de sesión
	if (isset($_POST["Ingresar"])) {
		$email = trim($_POST["InputCla"]);
		$password = trim($_POST["InputCon"]);

		// Validamos que los campos no estén vacíos
		if (!empty($email) && !empty($password)) {
			// Preparamos la consulta para buscar el usuario
			$InstSql = "SELECT AConsecut,AAyuntamiento,CAYDescripcion, AUnidAdmi,CUNClaveUnidad,CUNDescripcion  
						FROM atacceso 
						inner Join acayuntamiento ON  CAYClave = AAyuntamiento 
						inner Join acunidades ON CUNConsecutivo = AUnidAdmi 
						WHERE AClaceAcce=:InputCla AND AContAcce=:InputCon";


			$ResuSql = $con->prepare($InstSql);
			$ResuSql->bindParam(":InputCla", $email, PDO::PARAM_STR);
			$ResuSql->bindParam(":InputCon", $password, PDO::PARAM_STR);
			$ResuSql->execute();
			$result = $ResuSql->fetch(PDO::FETCH_ASSOC);

			// Si hay resultado, el usuario es correcto
			if ($result) {
				//?Configuramos la sesión para el usuario logueado
				$_SESSION ['activo'] = true;
				$idUsuario = $result['AConsecut'];
				$Ayunt= $result['AAyuntamiento'];
				$DescAyun = $result['CAYDescripcion'];
				$UnidAdmi = $result['AUnidAdmi'];
				$Descripc = $result['CUNDescripcion'];

				$Cookie01 = "$idUsuario|$Ayunt|$DescAyun|$UnidAdmi|$Descripc|";
				$_SESSION ['CEncaAcc'] = $Cookie01;
				
				$_SESSION['CMenu'] = "1||||";



				// Redirigimos al menú principal
				header("Location: MenuIntranet copy.php");
				exit;
			} else {
				echo '<div class="alert alert-danger">Error: Credenciales incorrectas.</div>';
			}
		} else {
			echo '<div class="alert alert-warning">Por favor, complete todos los campos.</div>';
		}
	}
	?>
	<div class="full-height">
		<?php include 'components/EncaPrin.php'; ?>
		<div class=" d-flex justify-content-center align-items-center">
			<div class="col-xl-3 col-md-5 col-sm-10 shadow">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center fw-semibold">
						Iniciar Sesion
						<i class="bi bi-person-fill"></i>
					</div>
					<div class="card-body">
						<form method="post" name="formulario" onsubmit="return validarl(this)">
							<input class="form-control mb-3" id="usuario" type="text" placeholder="Ingresa Clave" name="InputCla" />
							<input class="form-control mb-3" type="password" placeholder="Digita Contraseña" name="InputCon" />
							<div class="d-grid gap-2 mb-3">
								<button class="btn btn-primary" type="submit"
									name="Ingresar" value="Ingresar">
									Iniciar Sesion
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../app.js"></script>
</body>

</html>