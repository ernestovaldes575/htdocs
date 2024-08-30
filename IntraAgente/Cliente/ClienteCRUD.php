<?php
 $RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraAgente/";
 include($RutaIntr.'Conexion/ConBasAgente.php');

$BandMens = true;

$ArCooki1 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCooki1);
$ConsBrok = $ABusqMae[0];
$DescBrok = $ABusqMae[1];

//*****************************************************************
$TipoMovi = $_POST['C01']; 
$ConsMovi = $_POST['C02']; 

echo "TipoMovi: $TipoMovi ";
echo "ConsMovi: $ConsMovi";

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

$CorrClie = $_POST['C14'];	//Ventana, Pagina 
$ContClie = $_POST['C15'];	//Ventana, Pagina 

switch ( $TipoMovi )
 {  case "A": //Alta
			$InstSql = "INSERT INTO STCliente ". 
				"VALUES (0,'$NumeFoli','$NombRazo',". 
						"'$RFCInvit', '$CURPInvi', ".
						"'$CallInvi', '$NumeInvi', '$ColoInvi', ".
						"'$DeleInvi', '$CoPoInvi', ". 
						"'$MuniInvi', '$EstaInvi',". 
						"'$CorrInvi', '$ContClie', ". 
						" $ConsAnfi , 0,date(now()), 'A')";
			break;
	case "M": //Modificar
			$InstSql = "UPDATE stcliente ".
					   "SET    CNumeFoli='$NumeFoli', CNombRazon='$NombRazo',". 
					   		  "CRFC='$RFCInvit', CCURP='$CURPInvi', ". 
							  "CCalle='$CallInvi', CNumero='$NumeInvi',". 
							  "CColonia='$ColoInvi', CDelegacion='$DeleInvi', ".
							  "CCodiPost='$CoPoInvi',CMunicipio='$MuniInvi', ". 
							  "CNombEsta='$EstaInvi', CCorreo='$CorrClie', ".
							  "CContra='$ContClie' ".
					   "WHERE CConsecutivo = $ConsMovi AND ". 
							 "CBroker = $ConsBrok ";
			break;

	case "B": //Modificar
			$InstSql = "UPDATE stcliente ".
					   "SET    CEstado='B'". 
					   "WHERE CConsecutivo = $ConsMovi AND ". 
							 "CBroker = $ConsBrok ";
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

//Para una alta
if ( $TipoMovi  == "A")
 { //Recupera la secuencia 
   $InstSql = "SELECT @@identity AS id "; 	
   if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
   $RespSql = $ConeBase->prepare($InstSql);
   $RespSql->execute();
   $ResuSql = $RespSql->fetch();

   $ConsClie = 0;		
   if ($ResuSql)
     $ConsClie = $ResuSql[0];

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
 }
$PagiRegr = "ClienList.php";
$PagiRegr = "location: $PagiRegr";
header($PagiRegr); 

?>	
