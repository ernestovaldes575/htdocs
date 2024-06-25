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
$Denom    = $_POST['C08']; 
$TipoUsu  = $_POST['C09'];
$Descr    = $_POST['C10'];
$Modalida = $_POST['C11'];
$HipReq   = $_POST['C12']; 
$DocsReq  = $_POST['C13'];
$HipForm  = $_POST['C14'];
$TiempoR  = $_POST['C15'];
$Vigencia = $_POST['C16']; 
$AreaCont = $_POST['C17'];
$Costo    = $_POST['C18'];
$Sustento = $_POST['C19'];
$LugarPag = $_POST['C20']; 
$FundJuri = $_POST['C21'];
$Derech   = $_POST['C22'];
$LugarRep = $_POST['C23'];
$Otros    = $_POST['C24']; 
$HipInf   = $_POST['C25'];
$HipSist  = $_POST['C26'];
$AreaResp = $_POST['C27'];
$Nota     = $_POST['C28'];
switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT   tt9224tramreq   ".
			                 "VALUE (NULL,'$Ayuntam','$Ejercicio','$FechIn','$FechTe','$Denom', '$TipoUsu', '$Descr', '$Modalida', '$HipReq', '$DecsReq', '$HipForm', '$TiempoR', '$Vigencia', '$AreaCont', '$Costo', '$Sustento', '$LugarPag', '$FundJuri', '$Derech', '$LugarRep', '$Otros', '$HipInf', '$HipSist', '$AreaResp', '$Nota')";  //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE   tt9224tramreq   ".
						  "SET  TRFechInicio = '$FechIn', TRFechTerm = '$FechTe', TRDenom = '$Denom', TRTipoUsu = '$TipoUsu', TRDesc = '$Descr', TRModalidad = '$Modalida', TRHipervRequ = '$HipReq', TRDocReque = '$DocsReq', TRHipervForm = '$HipForm', TRTiempoRes = '$TiempoR', TRVigencia = '$Vigencia', TRAreaContact = '$AreaCont', TRCosto = '$Costo', TRSustento = '$Sustento', TRLugarPago = '$LugarPag', TRFundJuri  = '$FundJuri', TRDerech = '$Derech', TRLugarRepor = '$LugarRep', TROtros = '$Otros', TRHipervInf = '$HipInf', TRHipervSist = '$HipSist', '$AreaResp', '$Nota', TRAreaResp = '$AreaRes', TRNota = '$Nota'".  //Colocar variables Linea 7-8n
						  "WHERE  TRConsecutivo = '$ClavBusq' "; //Modificar el campo llave
	 			break;
	 case "B":  $InstSql = "DELETE FROM   tt9224tramreq   ".
			    		   "WHERE  TRConsecutivo = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
