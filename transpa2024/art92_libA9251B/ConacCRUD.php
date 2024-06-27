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
$FechAct = $_POST['C09'];	
$FechVali = $_POST['C010'];

switch ( $TipoMovi )		
	{ case "A": $InstSql =  "INSERT art92_lib ".
			                 "VALUE (NULL,'$AAyuntamiento','$AEjercicio','$FechInic','$FechTermi', 
							 '$AArea','$FechAct','$FechVali') ";          //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE art92_lib ".
						  "SET AFechaInicio = '$FechInic',".
							  "AFechaTermino = '$FechTermi',".
							  "AArea = '$AArea',".
							  "AFechaActualizacion= '$FechAct',".
							  "AFechaValidacion= '$FechVali'".
							 
							    

						 	//campos en base s la base de linea 9
	                           //Colocar variables Linea 7-8n
						  "WHERE  AConsecutivo = '$ClavBusq'";
	 			break;
	 case "B":  $InstSql = "DELETE FROM art92_lib ".
			    		   "WHERE  AConsecutivo = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
