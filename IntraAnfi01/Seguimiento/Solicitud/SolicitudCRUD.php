<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Conexion/ConBasInvita.php');

//********************************************************************
//Carga las variables
$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0];
$MesTrab  = $ABusqMae[1];
$ConsSoli = $ABusqMae[2];

$BandMens = false;

//*****************************************************************
//Para operacion A B C
$CRUD     = $_POST['C00'];
$TipoMovi = $_POST['C01'];
$ConsSoli = $_POST['C02']; 
$EjerSoli = $_POST['C05']; 
$MesSoli  = $_POST['C06']; 

$NumeSoli = $_POST['C07']; 
$Repartid = $_POST['C08'];
$FormPago = $_POST['C09']; 
$MetoPago = $_POST['C10']; 
$UsoSoli  = $_POST['C11']; 	//Imagen, PDF o Liga
$FechAlta = $_POST['C12']; 

switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO stsolicitud ". 
				   "VALUES (0,$ConsInvi,". 
						   "$EjerTrab, $MesTrab, ".
						   "$NumeSoli, $Repartid, ".
						   "$FormPago, $MetoPago, $UsoSoli,".
						   "'$FechAlta', 0,'01','A') "; 
		break;
	case "PUT": //Cambio
		$InstSql = "UPDATE stsolicitud ". 
				   "SET    SNumeFoli = '$NumeSoli', ".
						  "SRepartidor = $Repartid,". 
						  "SFormaPago = $FormPago,". 
						  "SMetoPago =  $MetoPago,". 
						  "SUso = $UsoSoli,".  
						  "SFechAlta = '$FechAlta' ". 
				   "WHERE  SConsecutivo = $ConsSoli ";
		break;
	case "DELETE": //Eliminar
		$InstSql = "UPDATE stsolicitud ". 
				   "SET   SEstado = 'B' ".
				   "WHERE  SConsecutivo = $ConsSoli ";;
		break;	

}		

//Para las altas bajas y modificaciones
if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
  echo '<script>alert("'.$MensResp.'");</script>'; 

$PagiRegr = "SolicitudList.php"; 
//Regresa la secuencia del ALTA
if ($CRUD == "POST") 
 { //Recupera la secuencia 
	$InstSql = "SELECT @@identity AS id "; 	
	if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
	$RespSql = $ConeBase->prepare($InstSql);
	$RespSql->execute();
	$ResuSql = $RespSql->fetch();

	$ConsSoli = 0;		
	if ($ResuSql)
	   $ConsSoli = $ResuSql[0];
	
	$PagiRegr = "SoliDetaListInic.php?Param1=$ConsSoli";
  }


if (!$BandMens)	 
 { $PagiRegr = "location: $PagiRegr";
   header($PagiRegr); } 

?>	
