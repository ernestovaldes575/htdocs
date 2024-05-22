<script src="../app.js"></script>
<?php 
if (isset($_POST['Ingresar'])){
	include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Conexion/ConBasInvita.php');
	$usuario = htmlentities(addslashes($_POST["InputCla"]));
	$password = htmlentities(addslashes($_POST["InputCon"]));
	$InstSql = "SELECT IConsecutivo,INombRazon ".
			   "FROM   stinvitado ". 
			   "WHERE  ICorreo = '".$usuario."' AND ". 
			   		  "IContra = '".$password."' ";
	echo $InstSql;				  
	$ResuSql = $ConeBase->prepare($InstSql);
	$ResuSql->execute();
	$result = $ResuSql->fetch();
	if( $result ){
		$ConsInvi = $result['IConsecutivo'];
		$NombInvi = $result['INombRazon'];
		$FechSist = getdate();
		$EjerTrab = $FechSist['year'];
		$MesTrab  = $FechSist['mon'];

		$ArCookie = "$ConsInvi|$NombInvi|$EjerTrab|$MesTrab|";
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
		header("location: Intranet.php?Param1=S");
		}
}
else
{
  //Datos del Invitado
  $ConsInvi = 0; $NombInvi = '';
  $FechSist = getdate();
  $EjerTrab = $FechSist['year'];
  $MesTrab  = $FechSist['mon'];
  $MesTrab  = ($MesTrab  < 10) ? '0'.$MesTrab : $MesTrab;

  $ArCook01 = "$ConsInvi|$NombInvi|$EjerTrab|$MesTrab|";
  setcookie("CEncaAcc", "$ArCook01");

  //Permisos
  $ClavTiSe = "01"; $DescTiSe = "Alta";
  $ClavOpSe = "001"; $DescOpSe = "Registro";
  $Cons = "I"; $Alta = "A"; $Modi = "I";  $Baja = "I";

  $ArCook02 = "$ClavTiSe|$DescTiSe|$ClavOpSe|$DescOpSe.|".
  			  "$Cons|$Alta|$Modi|$Baja|";
  setcookie("CModulo", "$ArCook02");
}
	

	?>
	<!--Formulario de login-->
<?php include 'Includes/Header.php'?>

<div class="contenedor">
	<form class="form" method="post" name="formulario" onsubmit="return validarl(this)">
		<img class="img-3" src="" alt="">
		<input class="clave" type="text" placeholder="Digita Clave" name="InputCla" />
		<input class="password" type="password" placeholder="Digita Contraseña" name="InputCon" />
		<!-- <input type="submit" name="Ingresar" class="ingresar" value="Ingresar" > -->
		<button type="submit" name="Ingresar" class="ingresar" value="Ingresar" >
			Ingresar
		</button>
		<a href="Seguimiento/Invitado/Registro/Anfitrion.php">
		Registro
		</a>
				<!-- <a href="../index.php">Salir</a> -->
	</form>
	  
</div>


<?php include 'Includes/Footer.php'?>
