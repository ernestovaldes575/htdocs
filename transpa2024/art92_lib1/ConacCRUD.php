<?php
include("Conexion.php");	
//2) Query	
//if(isset($_POST[´enviar´])){}
$BandMens = false;
$TipoMovi = $_POST['C01']; //Leer los hidden
$ClavBusq = $_POST['C02']; //Leer los hidden	
$AConsecutivo = $_POST['C03'];  //Leer los campos linea 21 Conac
$AAyuntamiento = $_POST['C04'];
$AEjercicio = $_POST['C05'];
$AFechaInicio = $_POST['C06'];
$AFechaTermino = $_POST['C07'];	
$AArea = $_POST['C08'];	
$AFechActu = $_POST['C09'];	
$AFechVali = $_POST['C10'];



switch ( $TipoMovi )
	{ case "A": $InstSql =  "INSERT art92_lib ".
			                "VALUE (NULL,'$AConsecutivo','$AAyuntamiento, '$AEjercicio', '$AFechaInicio', '$AFechaTermino', '$AArea','$AFechActu', '$AFechVali') "; //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE art92_lib ".
						  "SET AEjercicio = '$AEjercicio ',". 
						      "AFechaInicio = '$AFechaInicio',".
							  "AFechaTermino = '$AFechaTermino',".
							  "AArea = '$AArea',".
							  "AFechaActualizacion= '$AFechActu ',".
							  "AFechaValidacion= '$AFechVali',".


						 	//campos en base s la base de linea 9
	                           //Colocar variables Linea 7-8n
						  "WHERE AConsecutivo = '$ClavBusq' ".
			      // "AEjercicio = $EjerTrab AND ". 
				   //"AConsecutivo = $ClavBusq ";  //Modificar el campo llave
	 			break;
case "B":  $InstSql = "DELETE FROM art92_lib ".
			    		   "WHERE AConsecutivo = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
