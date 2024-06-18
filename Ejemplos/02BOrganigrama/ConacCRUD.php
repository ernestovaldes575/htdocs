<?php
include("Conexion.php");	
//2) Query	
$BandMens = false;
$TipoMovi = $_POST['C01']; //Leer los hidden
$ClavBusq = $_POST['C02']; //Leer los hidden	
$Consec = $_POST['C03'];	   //Leer los campos linea 21 Conac
$FechI = $_POST['C04'];	   //Leer los campos linea 26 Conac
$Hiperv = $_POST['C05'];
switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT tt9202borgan ".
			                 "VALUE ('$Consec','$FechI','$Hiperv') "; //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE tt9202borgan ".
						  "SET  OFechInicio = '$FechI'".  //Colocar variables Linea 7-8n
						  "WHERE  OConsecutivo = '$ClavBusq' "; //Modificar el campo llave
	 			break;
	 case "B":  $InstSql = "DELETE FROM tt9202borgan ".
			    		   "WHERE  OConsecutivo = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
