<?php 
if (isset($_POST['Ingresar'])){
	include($_SERVER['DOCUMENT_ROOT'].'/IntraBroker/Conexion/ConBasBroker.php');
	$usuario = htmlentities(addslashes($_POST["InputCla"]));
	$password = htmlentities(addslashes($_POST["InputCon"]));
	
	$InstSql = "SELECT BConsecutivo,BBroker ".
			   "FROM   stbroker ".
			   "WHERE  BClave = '".$usuario."' AND ". 
			   		  "BContra = '".$password."' AND ". 
					  "BConsecutivo > 999 ";
	echo $InstSql;				  
	$ResuSql = $ConeBase->prepare($InstSql);
	$ResuSql->execute();
	$result = $ResuSql->fetch();
	if( $result ){
		$ConsBrok = $result['BConsecutivo'];
		$NumeBrok = $result['BBroker'];
		
		$FechSist = getdate();
		$EjerTrab = $FechSist['year'];
		$MesTrab  = $FechSist['mon'];

		$ArCookie = "$ConsBrok|$NumeBrok|".
					"$EjerTrab|$MesTrab|";
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