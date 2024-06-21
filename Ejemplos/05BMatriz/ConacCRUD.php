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
$PlazBase = $_POST['C08'];
$PBOcup   = $_POST['C09'];
$PBVacan  = $_POST['C10'];
$PlazConf = $_POST['C11'];
$PCOcup   = $_POST['C12'];
$PCVacan  = $_POST['C13'];
$AreaRes  = $_POST['C14'];
$FechAct  = $_POST['C15'];
$FechVal  = $_POST['C16'];
$Nota   = $_POST['C17'];
switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT INTO tt9210btotalplazvac ".
			                 "VALUES (NULL,'$Ayuntam','$Ejercicio','$FechIn','$FechTe','$PlazBase','$PBOcup','$PBVacan','$PlazConf','$PCOcup','$PCVacan','$AreaRes','$FechAct','$FechVal','$Nota') "; //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE tt9210btotalplazvac ".
							"SET  TFechInicio = '$FechIn', TFechTerm = '$FechTe', TTotPlazBas = '$PlazBase', TTotPBOcup = '$PBOcup' , TTotPBVacan = '$PBVacan', TTotPlazConf = '$PlazConf', TTotPCOcup = '$PCOcup',  	TTotPCVacan = '$PCVacan', TAreaResp = '$AreaRes', TFechAct = '$FechAct', TFechValid = '$FechVal', TNota = '$Nota'".
						  "WHERE  TConsecutivo = '$ClavBusq' "; //Modificar el campo llave
	 			break;
	 case "B":  $InstSql = "DELETE FROM tt9210btotalplazvac ".
			    		   "WHERE  TConsecutivo = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
