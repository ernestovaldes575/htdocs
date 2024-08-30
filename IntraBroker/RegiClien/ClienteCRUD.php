<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraBroker/Conexion/ConBasBroker.php');

$BandMens = true;

$ArCooki1 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCooki1);
$ConsBrok = $ABusqMae[0];

//*****************************************************************
$NumeFoli = $_POST['C03']; 
$NombRazo = $_POST['C04'];
$CorrClie = $_POST['C05'];	//Correo del Cliente
$ContClie = $_POST['C06'];	//Contraseña del Cliente
$PorcBrok = $_POST['C07'];	//Contraseña del Cliente

$InstSql = "INSERT INTO STCliente ". 
		   "VALUES (0,'$NumeFoli','$NombRazo',". 
				"'', '', ".						//CRFC, CCURP
				"'', '', '', ".					//CCalle, CNumero, CColonia
				"'', '', ". 					//CDelegacion, CCodiPost,
				"'', '',". 						//CMunicipio,CNombEsta
				"'$CorrClie', '$ContClie', ". 
				" $ConsBrok ,$PorcBrok ,date(now()), 'A')";

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
