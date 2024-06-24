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
$Tipo     = $_POST['C08']; 
$TipoOtro = $_POST['C09'];
$Descr    = $_POST['C10'];
$Motivo   = $_POST['C11'];
$FechEnt  = $_POST['C12']; 
$Denom    = $_POST['C13'];
$HipOfic  = $_POST['C14'];
$HipInf   = $_POST['C15'];
$HipProg  = $_POST['C16']; 
$HipDona  = $_POST['C17'];
$AreaRes  = $_POST['C18'];
$Nota     = $_POST['C19'];
switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT  tt9220brecurspublic  ".
			                 "VALUE (NULL,'$Ayuntam','$Ejercicio','$FechIn','$FechTe','$Tipo', '$TipoOtro', '$Descr', '$Motivo', '$FechEnt', '$Denom', '$HipOfic', '$HipInf', '$HipProg', '$HipDona', '$AreaRes','$Nota') "; //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE  tt9220brecurspublic  ".
						  "SET  RPFechInicio = '$FechIn', RPFechTerm = '$FechTe', RPTipoRec = '$Tipo', RPTipoReOtro = '$TipoOtro', RPDescr = '$Descr', RPMotivo = '$Motivo', RPFechEntr = '$FechEnt', RPDenom = '$Denom', RPHipervOfic = '$HipOfic', RPHipervInf = '$HipInf', RPHipervProg = '$HipProg', RPHipervDonat = '$HipDona', RPAreaResp = '$AreaRes', RPNota = '$Nota'".  //Colocar variables Linea 7-8n
						  "WHERE  RPConsecutivo = '$ClavBusq' "; //Modificar el campo llave
	 			break;
	 case "B":  $InstSql = "DELETE FROM  tt9220brecurspublic  ".
			    		   "WHERE  RPConsecutivo = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
