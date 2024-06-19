<?php
include("Conexion.php");	
//2) Query	
$BandMens = false;
$TipoMovi = $_POST['C01']; //Leer los hidden
$ClavBusq = $_POST['C02']; //Leer los hidden	
$Clave = $_POST['C03'];	   //Leer los campos linea 21 Conac
$Descr = $_POST['C04'];	   //Leer los campos linea 26 Conac
switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT cctipoclas ".
			                 "VALUE ('$Clave','$Descr') "; //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE cctipoclas ".
						  "SET  CTCDescri = '$Descr'".  //Colocar variables Linea 7-8n
						  "WHERE  CTCClave = '$ClavBusq' "; //Modificar el campo llave
	 			break;
	 case "B":  $InstSql = "DELETE FROM cctipoclas ".
			    		   "WHERE  CTCClave = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
