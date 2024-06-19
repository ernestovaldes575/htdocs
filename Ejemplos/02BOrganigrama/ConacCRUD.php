<?php
include("Conexion.php");	
//2) Query	
$BandMens = false;
$TipoMovi = $_POST['C01']; //Leer los hidden
$ClavBusq = $_POST['C02']; //Leer los hidden	
$Consec   = $_POST['C03'];	   //Leer los campos linea 21 Conac
$Ayuntam  = $_POST['C04'];	   //Leer los campos linea 26 Conac
$Ejercicio = $_POST['C05'];
$FechIn   = $_POST['C06'];
$FechTe   = $_POST['C07'];
$Hiperv   = $_POST['C08']; 
$AreaRes  = $_POST['C09'];
$FechAct  = $_POST['C10'];
$FechVal  = $_POST['C11'];
$Nota   = $_POST['C12'];
switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT tt9202borgan ".
			                 "VALUE ('$Consec','$Ayuntam','$Ejercicio','$FechIn','$FechTe','$Hiperv','$AreaRes','$FechAct','$FechVal','$Nota') "; //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE tt9202borgan ".
						  "SET  OFechInicio = '$FechIn', OFechTerm = '$FechTe',OHipervin = '$Hiperv, OAreaResp = '$AreaRes' OFechAct = '$FechAct', OFechValid = '$FechVal', ONota = '$Nota'".  //Colocar variables Linea 7-8n
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
