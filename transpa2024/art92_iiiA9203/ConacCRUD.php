<?php
include("Conexion.php");	
//2) Query	
//if(isset($_POST[¨enviar´]))
$BandMens = false;
$TipoMovi = $_POST['C01']; //Leer los hidden
$ClavBusq = $_POST['C02']; //Leer los hidden	
$AConsecutivo = $_POST['C03'];	   //Leer los campolinea 21 Conac
$AAyuntamiento = $_POST['C04'];
$AEjercicio = $_POST['C05'];
$FechInic = $_POST['C06'];
$FechTermi = $_POST['C07'];	
$AArea = $_POST['C08'];	
$ADenomi = $_POST['C09'];	
$AFun = $_POST['C010'];
$AHiper = $_POST['C011'];
$AAreRes = $_POST['C012'];
$ANota = $_POST['C013'];
switch ( $TipoMovi )		
	{ case "A": $InstSql =  "INSERT art92_iii".
			                 "VALUE (NULL,'$AAyuntamiento','$AEjercicio','$FechInic','$FechTermi', 
							 '$AArea','$ADenomi','$AFun','$AHiper','$AAreRes','$ANota') ";          //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE art92_iii".
						  "SET AFechaInicio = '$FechInic',".
							  "AFechaTermino = '$FechTermi',".
							  "AArea = '$AArea',".
							  "ADenominacion= '$ADenomi',".
							  "AFundamento= '$AFun',".
							  "AHipervinculo= '$AHiper',".
							  "AAreaResp= '$AAreRes',".
							  "ANota= '$ANota',".
							 
							
						  "WHERE  AConsecutivo = '$ClavBusq'";
	 			break;
	 case "B":  $InstSql = "DELETE FROM art92_iii".
			    		   "WHERE  AConsecutivo = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
