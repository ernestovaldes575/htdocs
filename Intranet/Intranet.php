	<?php 
		$Titulo = "Registro";
		include 'components/encabezado.php';
		include_once "Archivos/Files/fecha.php";
		require("Archivos/Conexiones/conlogin.php");

	if(isset($_POST['Ingresar'])){
		echo 'entrar';
		$usuario = htmlentities(addslashes($_POST["InputCla"]));
		$password = htmlentities(addslashes($_POST["InputCon"]));
		$InstSql = "SELECT AConsecut,AAyuntamiento,CAYDescripcion,". 
					"AUnidAdmi,CUNClaveUnidad,CUNDescripcion ". 
					"FROM atacceso ". 
					"inner Join acayuntamiento ON  CAYClave = AAyuntamiento ".
					"inner Join acunidades ON CUNConsecutivo = AUnidAdmi ".
					"WHERE AClaceAcce = '".$usuario."' AND ". 
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

			session_start();
			$_SESSION["usua"] = $result['AAyuntamiento'];

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
	}
	
	?>
	<!--Formulario de login-->
	<?php 
		$Titulo = "Registro";
		include 'components/encabezado.php';
		// include 'components/EncaPrin.php';
	?>

	<form class="p-4" method="post" name="formulario" onsubmit="return validarl(this)">
		<div>
			<img class="img-3 img-fluid rounded" src="img/SIMGA.jpg" alt="">
		</div>
		<div>
			<div class="mt-3">
				<label for="Usuario" class="fw-semibold text-uppercase form-label">Usuario</label>
				<input class="clave form-control" id="usuario" type="text" placeholder="Digita Clave" name="InputCla" />
			</div>
			<div class="mt-3">
				<label for="password" class="fw-semibold text-uppercase form-label">Clave</label>
				<input class="password form-control" type="password" placeholder="Digita Contraseña" name="InputCon" />
			</div>
		</div>

		<button type="submit" name="Ingresar" class="btn-Submit mt-3" value="Ingresar" >
			Ingresar
		</button>
	</form>

<script src="../app.js"></script>

<?php include 'components/Footer.php'?>