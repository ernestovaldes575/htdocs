<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php

include("Conexion.php");	
//2) Query	
$BandMens = false;

//if(isset($_POST['Enviar'])){  Lo ocupamos cuan se llamma asi mismo
   $TipoMovi = $_POST['C01'];
   $ClavBusq = $_POST['C02'];	

   echo "$TipoMovi<br>";
   echo "$ClavBusq<br><br>";		
	
	$Clave = $_POST['C03'];
   $Descr = $_POST['C04'];	

   echo "$Clave<br>";
   echo "$Descr<br>";	   
	
   switch ( $TipoMovi )	
	{ case "A": $InstSql =  "INSERT cctipoclas ".
			                 "VALUE ('$Clave','$Descr') ";
	 			break;
	 case "M": $InstSql = "UPDATE cctipoclas ".
						  "SET  CTCDescri = '$Descr'".
						  "WHERE  CTCClave = '$ClavBusq' ";
	 			break;
	 case "B":  $InstSql = "DELETE FROM cctipoclas ".
			    		   "WHERE  CTCClave = '$ClavBusq' ";
	 			break;
}

	if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
	$EjInSql = $ConeBase->prepare($InstSql);
	$EjInSql->execute();
	
	header("location: Base05.php");


	?>	
