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
		session_start();
		//Interno/Externo
		$_SESSION["ConeInEx"] = 'Interno';
		require("Conexion/ConBasAcceso.php");
		if(isset($_POST['Ingresar'])){
			$usuario = htmlentities(addslashes($_POST["InputCla"]));
			$password = htmlentities(addslashes($_POST["InputCon"]));
			$InstSql = "SELECT 	AConsecut,AAyuntamiento,CAYDescripcion,". 
								"AUnidAdmi,CUNClaveUnidad,CUNDescripcion ". 
						"FROM atacceso ". 
						"inner Join acayuntamiento ON  CAYClave = AAyuntamiento ".
						"inner Join acunidades ON CUNConsecutivo = AUnidAdmi ".
						"WHERE 	AClaceAcce = '".$usuario."' AND ". 
								"AContAcce= '".$password."'";
			$ResuSql = $ConeBase->prepare($InstSql);
			$ResuSql->execute();
			$result = $ResuSql->fetch();
			if( $result ){
				$ConsUsua = $result['AConsecut'];
				$ClavAyun = $result['AAyuntamiento'];
				$DescAyun = $result['CAYDescripcion'];
				$ConsUnid = $result['AUnidAdmi'];
				$DescUnid = $result['CUNDescripcion'];
				$EjerTrab = $hoy['year'];
				$ArCookie = $ConsUsua.'|'.$ClavAyun.'|'.$DescAyun.'|'.$ConsUnid.'|'.$DescUnid.'|'.$EjerTrab.'|';
				setcookie("CEncaAcc", "$ArCookie");

				//Borra el acceso		
				$InstSql = "DELETE FROM adacceso ". 
						   "WHERE  AAyuntamiento = '$ClavAyun' AND ". 
								  "AConsecut= $ConsUsua";
				$ResuSql = $ConeBase->prepare($InstSql);
				$ResuSql->execute();
				$result = $ResuSql->fetch();

				//Dar de alta el acceso
				$InstSql = "INSERT INTO adacceso ". 
						   "VALUES ('$ClavAyun', $ConsUsua,'1','','')";
				$ResuSql = $ConeBase->prepare($InstSql);
				$ResuSql->execute();
				$result = $ResuSql->fetch();

				header("location: MenuIntranet.php");
			}else{
				echo 
					'<script>
						alert("No se encotraron registros\nVerifique que los datos sean correctos");
					</script>';
				header("location: Intranet.php");
			}
		}
	?>
	<div class="full-height">
		<?php include 'components/EncaPrin.php';?>
		<div class=" d-flex justify-content-center align-items-center">
			<div class="col-xl-3 col-md-5 col-sm-10 shadow">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center fw-semibold">
						Iniciar Sesion
						<i class="bi bi-person-fill"></i>
					</div>
					<div class="card-body">
						<form  method="post" name="formulario" onsubmit="return validarl(this)">
							<input class="form-control mb-3" id="usuario" type="text" placeholder="Usuario" name="InputCla" value="000001" />
							<input class="form-control mb-3" type="text" placeholder="Digita Contraseña" name="InputCon" value="000001"/>
							<div class="d-grid gap-2 mb-3">
								<button class="btn btn-primary" type="submit" 
								name="Ingresar" value="Ingresar" >
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
