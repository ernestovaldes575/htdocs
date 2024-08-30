<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraClien/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraClien/Conexion/ConBasCliente.php');

$BandMens = true;

//*****************************************************************
$CRUD =  $_POST['C00'];
$TipoMovi = $_POST['C01'];
$ConsBusq = $_POST['C02']; 

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

switch ( $CRUD )
{ 	case "POST": //Alta
		/* `IConsecutivo`, ``*/
		$InstSql = "INSERT INTO stinvitado ". 
		"VALUES (0,'$NumeFoli','$NombRazo',". 
				"'$RFCInvit', '$CURPInvi', ".
				"'$CallInvi', '$NumeInvi', '$ColoInvi', ".
				"'$DeleInvi', '$CoPoInvi', ". //Crea
				"'$MuniInvi', '$EstaInvi',". 
				"'$CorrInvi', '$ContInvi', ". 
				" $ConsAnfi , 0,date(now()), 'A')";
		break;
	case "PUT": //Cambio
		$InstSql = "UPDATE stinvitado ". 
				   "SET    INumeFoli = '$NumeFoli', ".
						  "INombRazon = '$NombRazo',". 
						  "IRFC = '$RFCInvit',". 
						  "ICURP = '$CURPInvi',". 
						  "ICalle = '$CallInvi',".  
						  "INumero = '$NumeInvi',". 
						  "IColonia = '$ColoInvi',". 
						  "IDelegacion = '$DeleInvi',". 
						  "ICodiPost= '$CoPoInvi',". 
						  "IMunicipio = '$MuniInvi',". 
						  "INombEsta= '$EstaInvi',". 
						  "ICorreo= '$CorrInvi',". 
						  "IContra = '$ContInvi' ".
				   "WHERE IConsecutivo = $ConsInvi ";
		break;
	case "DELETE": //Eliminar
		$InstSql = "UPDATE stinvitado ". 
				   "SET    iEstado = 'B' ".
				   "WHERE  IConsecutivo = $ConsInvi ";
		break;	

}		

//Ejecuta la instruccion
$BandMens = true;
if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
  echo '<script>alert("'.$MensResp.'");</script>'; 

$PagiRegr = "/IntraInvi/MenuIntranet.php";	 
//Regresa la secuencia del ALTA
if  ($CRUD == "POST") 
  { //Recupera la secuencia 
	 $InstSql = "SELECT @@identity AS id "; 	
	 if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
	 $RespSql = $ConeBase->prepare($InstSql);
	 $RespSql->execute();
	 $ResuSql = $RespSql->fetch();

	 $ConsInvi = 0;		
	 if ($ResuSql)
	    $ConsInvi = $ResuSql[0];
	
	$ArCook01 = "$ConsInvi|$NumeFoli|$NombRazo|".
				"$ConsAnfi|$NombAnfi ".
				"$EjerTrab|$MesTrab|";
	setcookie("CEncaAcc", "$ArCook01");	
 }

$PagiRegr = "/IntraClien/MenuIntranet.php";
$PagiRegr = "location: $PagiRegr";
header($PagiRegr); 

?>	
