<?php
include("Conexion.php");	
//2) Query	
//if(isset($_POST[¨enviar´]))
SELECT `AConsecutivo`, `AAyuntamiento`, `TEjercicio`, `TFechInic`, `TFechterm`, `TFirper`, `TArea`, `TActualizacion`, `TFechvalida`, `TNota` FROM `art92_viiib` 
$BandMens = false;
$TipoMovi = $_POST['C01']; //Leer los hidden
$ClavBusq = $_POST['C02']; //Leer los hidden	
$AConsecutivo = $_POST['C03'];	   //Leer los campolinea 21 Conac
$AAyuntamiento = $_POST['C04'];
$TEjercicio = $_POST['C05'];
$TFechInic = $_POST['C06'];
$TFechterm = $_POST['C07'];	
$TFirper = $_POST['C08'];	
$TArea = $_POST['C09'];	
$TActualizacion = $_POST['C010'];
$TFechvalida = $_POST['C011'];
$TNota = $_POST['C012'];
switch ( $TipoMovi )		
	{ case "A": $InstSql =  "INSERT art92_liic ".
			                 "VALUE (NULL,'$AAyuntamiento','$AEjercicio','$TFechInic','$TFechterm', 
							 '$TFirper','$TArea','$TActualizacion','$TFechvalida','$TNota') ";          //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE art92_liic ".
						  "SET APeriodoInforma = '$TFechInic',".
							  "APeriodoInformaOtro = '$TFechterm',".
							  "TFirper = '$TFirper',".
							  "AAreaResp= '$TArea',".
							  "ANota= '$ANota'".
							  "ANota= '$ANota'".
							  "ANota= '$ANota'".
							    

						 	//campos en base s la base de linea 9
	                           //Colocar variables Linea 7-8n
						  "WHERE  AConsecutivo = '$ClavBusq'";
	 			break;
	 case "B":  $InstSql = "DELETE FROM art92_liic ".
			    		   "WHERE  AConsecutivo = '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
