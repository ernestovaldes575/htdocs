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
$FechSoli = $_POST['C08'];
$Folio    = $_POST['C09'];
$Inforeq  = $_POST['C10'];
$Respuesta= $_POST['C11'];
$Recurri  = $_POST['C12'];
$RecurriO = $_POST['C13'];
$Docs     = $_POST['C14'];
$TipoSoli = $_POST['C15'];
$TipoSoliO= $_POST['C16'];
$AreaRes  = $_POST['C17'];
$Nota  = $_POST['C18'];
switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT INTO tt9217regisolic  ".
			                 "VALUES (NULL,'$Ayuntam','$Ejercicio','$FechIn','$FechTe','$FechSoli','$Folio','$Inforeq','$Respuesta','$$Recurri','$RecurriO','$Docs','$TipoSoli','$TipoSoliO','$AreaRes','$Nota') "; //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE tt9217regisolic  ".
							"SET  RSFechInicio = '$FechIn', RSFechTerm = '$FechTe', RSFechSoli = '$FechSoli', RSFolioSoli = '$Folio' , RSInfoReq = '$Inforeq', RSRespuesta = '$$Respuesta', RSRecurrida = '$Recurri',  	RSRecurrOtro = '$RecurriO', RSDocs = '$Docs', RSTipoSoli = '$TipoSoli', RSTipoSoliOtro = '$TipoSoliO', RSAreaResp = '$AreaRes', RSNota = '$Nota'".
						  "WHERE  RSConsecutivo = '$ClavBusq' "; //Modificar el campo llave
	 			break;
	 case "B":  $InstSql = "DELETE FROM tt9217regisolic  ".
			    		   "WHERE  RSConsecutivo = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
