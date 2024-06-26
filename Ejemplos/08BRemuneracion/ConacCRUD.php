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
$TipoIn   = $_POST['C08']; 
$TipoInOt = $_POST['C09'];
$Clave    = $_POST['C10'];
$Puesto   = $_POST['C11'];
$Cargo    = $_POST['C12'];
$AreaAds  = $_POST['C13'];
$Nombre   = $_POST['C14'];
$PApell   = $_POST['C15'];
$SeApell  = $_POST['C16'];
$Sexo     = $_POST['C17'];
$SexoOtr  = $_POST['C18'];
$RemBrut  = $_POST['C19'];
$MonBrut  = $_POST['C20'];
$RemNeta  = $_POST['C21'];
$MonNeta  = $_POST['C22'];
$PercDin  = $_POST['C23'];
$PercEsp  = $_POST['C24'];
$Ingreso  = $_POST['C25'];
$Compens  = $_POST['C26'];
$Gratifi  = $_POST['C27'];
$Primas   = $_POST['C28'];
$Comision = $_POST['C29'];
$Dietas   = $_POST['C30'];
$Bonos    = $_POST['C31'];
$Estimulo = $_POST['C32'];
$ApoyEcon = $_POST['C33'];
$PrestEco = $_POST['C34'];
$PrestEsp = $_POST['C35'];
$AreaRes  = $_POST['C36'];
$Nota = $_POST['C37'];
switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT tt9208bremun ".
			                 "VALUE (NULL,'$Ayuntam','$Ejercicio','$FechIn','$FechTe','$TipoIn','$Clave','$Puesto','$Cargo','$AreaAds','$Nombre','$PApell','$SeApell','$Sexo','$RemBrut','$MonBrut','$RemNeta','$MonNeta','$PercDin','$PercEsp','$Ingreso','$Compens','$Gratifi','$Primas','$Comision','$Dietas','$Bonos','$Estimulo','$ApoyEcon','$PrestEco','$PrestEsp','$AreaRes','$Nota') "; //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE tt9208bremun ".
						  "SET  RFechInicio = '$FechIn', RFechTerm = '$FechTe', RTipoInte = '$TipoIn', RClave = '$Clave', RDenomPuest = '$Puesto', RDenomCarg = '$Cargo', RAreaAds = '$AreaAds', RNombre = '$Nombre', RPrimerApell = '$PApell', RSegunApell = '$SeApell', RSexo = '$Sexo', RRemunBrut = '$RemBrut', RTipoMoneBrut = '$MonBrut', RRemunNeta = '$RemNeta', RTipoMoneNet'$MonNeta', RPercepDinero = '$PercDin', RPercepEspec = '$PercEsp', RIngresos = '$Ingreso', RCompensa = '$Compens', RGratifica = '$Gratifi', RPrimas = '$Primas', RComision = '$Comision', RDietas = '$Dietas', RBonos = '$Bonos', REstimulo = '$Estimulo', RApoyoEcon = '$ApoyEcon', RPrestaEcon = '$PrestEco', RPrestaEspecie = '$PrestEsp',RAreaResp = '$AreaRes', RNota = '$Nota'".  //Colocar variables Linea 7-8n
						  "WHERE  RConsecutivo = '$ClavBusq' "; //Modificar el campo llave
	 			break;
	 case "B":  $InstSql = "DELETE FROM tt9208bremun ".
			    		   "WHERE  RConsecutivo = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
