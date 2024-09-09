<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraBroker/Conexion/ConBasBroker.php');

$BandMens = true;

$ArCooki1 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCooki1);
$ConsAnfi = $ABusqMae[0];

//*****************************************************************
$NumeFoli = $_POST['C03']; 
$NombRazo = $_POST['C04'];
$RFCInvit = $_POST['C05']; 
$CURPInvi = $_POST['C06']; 
$CallInvi = $_POST['C07']; 	//Imagen, PDF o Liga
$NumeInvi = $_POST['C08']; 
$ColoInvi = $_POST['C09'];	//Ventana, Pagina 
$DeleInvi = $_POST['C10'];	//Ventana, Pagina 
$CoPoInvi = $_POST['C11'];	//Ventana, Pagina 
$MuniInvi = $_POST['C12'];	//Ventana, Pagina 
$EstaInvi = $_POST['C13'];	//Ventana, Pagina 

$CorrInvi = $_POST['C14'];	//Ventana, Pagina 
$ContInvi = $_POST['C15'];	//Ventana, Pagina 

$InstSql = "INSERT INTO STCliente ". 
		   "VALUES (0,'$NumeFoli','$NombRazo',". 
				"'$RFCInvit', '$CURPInvi', ".
				"'$CallInvi', '$NumeInvi', '$ColoInvi', ".
				"'$DeleInvi', '$CoPoInvi', ". //Crea
				"'$MuniInvi', '$EstaInvi',". 
				"'$CorrInvi', '$ContInvi', ". 
				" $ConsAnfi , 0,date(now()), 'A')";

//Ejecuta la instruccion
$BandMens = true;
if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
  echo '<script>alert("'.$MensResp.'");</script>'; 

//Recupera la secuencia 
$InstSql = "SELECT @@identity AS id "; 	
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$RespSql = $ConeBase->prepare($InstSql);
$RespSql->execute();
$ResuSql = $RespSql->fetch();

$ConsInvi = 0;		
if ($ResuSql)
  $ConsInvi = $ResuSql[0];

$InstSql = "INSERT INTO adpermi ".
		   "VALUES ('105', $ConsInvi, '01','001',".
					"'A','A','A','A',null)";
echo $InstSql;				  
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();
$result = $ResuSql->fetch();

$InstSql = "INSERT INTO adpermi ".
		   "VALUES ('105', $ConsInvi, '02','001',".
					"'A','A','A','A',null)";
echo $InstSql;				  
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();
$result = $ResuSql->fetch();

$PagiRegr = "/IntraBroker/Intranet.php";
$PagiRegr = "location: $PagiRegr";
header($PagiRegr); 

?>	
