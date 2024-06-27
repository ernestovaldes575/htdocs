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
$APeriInfo = $_POST['C06'];
$APeriInfoOtro = $_POST['C07'];	
$AHiperInfo = $_POST['C08'];	
$AAreaResp = $_POST['C09'];	
$ANota = $_POST['C010'];
switch ( $TipoMovi )		
	{ case "A": $InstSql =  "INSERT art92_liic ".
			                 "VALUE (NULL,'$AAyuntamiento','$AEjercicio','$APeriInfo','$APeriInfoOtro', 
							 '$AHiperInfo','$AAreaResp','$ANota') ";          //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE art92_liic ".
						  "SET APeriodoInforma = '$APeriInfo',".
							  "APeriodoInformaOtro = '$APeriInfoOtro',".
							  "AHiperInformacion = '$AHiperInfo',".
							  "AAreaResp= '$AAreaResp',".
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
