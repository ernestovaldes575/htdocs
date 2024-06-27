<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$Titulo = 'Registro';
		include 'components/encabezado.php';
	?>
</head>
<body>
	<?php 
		session_start();
		$_SESSION["ConeInEx"] = 'Interno';//Interno/Externo
		include_once "Archivos/Files/fecha.php";
		require("Archivos/Conexiones/conlogin.php");
		if(isset($_POST['Ingresar'])){
			echo 'entrar';
			$usuario = htmlentities(addslashes($_POST["InputCla"]));
			$password = htmlentities(addslashes($_POST["InputCon"]));
			$InstSql = "SELECT 	AConsecut,AAyuntamiento,CAYDescripcion,". 
								"AUnidAdmi,CUNClaveUnidad,CUNDescripcion ". 
						"FROM atacceso ". 
						"inner Join acayuntamiento ON  CAYClave = AAyuntamiento ".
						"inner Join acunidades ON CUNConsecutivo = AUnidAdmi ".
						"WHERE 	AClaceAcce = '".$usuario."' AND ". 
								"AContAcce= '".$password."'";
			echo "1)<br>$InstSql<br>";
			$ResuSql = $con->prepare($InstSql);
			$ResuSql->execute();
			$result = $ResuSql->fetch();
			echo "2)<br>$InstSql<br>";
			if( $result ){
				$ConsUsua = $result['AConsecut'];
				$ClavAyun = $result['AAyuntamiento'];
				$DescAyun = $result['CAYDescripcion'];
				$ConsUnid = $result['AUnidAdmi'];
				$DescUnid = $result['CUNDescripcion'];
				$EjerTrab = $hoy['year'];
				$ArCookie = $ConsUsua.'|'.$ClavAyun.'|'.$DescAyun.'|'.$ConsUnid.'|'.$DescUnid.'|'.$EjerTrab.'|';
				setcookie("CEncaAcc", "$ArCookie");
				$Nivel = 1;
				$ArCooki2 = $Nivel.'|||';
				setcookie("CMenu", "$ArCooki2");
				header("location: MenuIntranet.php");
			
			}else{
				echo 
					'<script>
						alert("No se encotraron registros\nVerifique que los datos sean correctos");
					</script>';
				header("location: Intranet.php");
			}
			}// include 'components/EncaPrin.php';
	?>
	<!-- <img class="img-3 img-fluid rounded" src="img/SIMGA.jpg" alt=""> -->
	<div class="full-height">
		<?php include 'components/EncaPrin.php';?>
		<div class=" d-flex justify-content-center align-items-center">
			<?php //include 'components/EncaPrin.php';?>
			<div class="col-xl-3 col-md-5 col-sm-10">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center fw-semibold">
						Iniciar Sesion<i class="bi bi-person-fill"></i>
					</div>
					<div class="card-body">
						<form  method="post" name="formulario" onsubmit="return validarl(this)">
							<input class="form-control mb-3" id="usuario" type="text" placeholder="XXXXXX" name="InputCla"  />
							<input class="form-control mb-3" type="text" placeholder="Digita Contraseña" name="InputCon" value="000001"/>
							<div class="d-grid gap-2 mb-3">
								<button class="btn btn-primary" type="submit" name="Ingresar" value="Ingresar" >
									Iniciar Sesion
								</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
		<?php include 'components/Footer.php'?>
	</div>
	<script src="../app.js"></script>
	<?php //include 'components/Footer.php'?>
</body>
</html>