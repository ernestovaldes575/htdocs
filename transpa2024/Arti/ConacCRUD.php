<?php
include("Conexion.php");	
//2) Query	
if(isset($_POST[¨enviar´])){}
$BandMens = false;
$TipoMovi = $_POST['C01']; //Leer los hidden
$ClavBusq = $_POST['C02']; //Leer los hidden	
$FechTerm = $_POST['C03'];	   //Leer los campos linea 21 Conac
$FechInic = $_POST['C04'];
$AArea = $_POST['C05'];	
$AADeno = $_POST['C06'];	
$AFun = $_POST['C07'];	
$AHipe = $_POST['C08'];
$AArea = $_POST['C09'];	
$AANota = $_POST['C10'];  //Leer los campos linea 26 Conac
switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT transpa2024 ".
			                 "VALUE ('$Clave','$Descr') "; //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE transpa2024 ".
						  "SET AFechaInicio = '$VC03',". 
						      "AFechaTermino = '$VC04',".
							  "AArea = '$VC05',".
							  "AADenominacion = '$VC06',".
							  "AFundamento= '$VC07',".
							  "AHipervinculo = '$VC08',".
							  "AAreaResp = '$VC09',".
							  "AANota = '$VC10',".  

						 	//campos en base s la base de linea 9
	                           //Colocar variables Linea 7-8n
						  "WHERE  AAyuntamiento = '$ClavAyun' AND ".
			       "AEjercicio = $EjerTrab AND ". 
				   "AConsecutivo = $ClavBusq ";  //Modificar el campo llave
	 			break;
	 case "B":  $InstSql = "DELETE FROM transpa2024 ".
			    		   "WHERE  AAyuntamiento = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
