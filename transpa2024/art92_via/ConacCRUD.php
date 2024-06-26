<?php
include("Conexion.php");	
//2) Query	
//if(isset($_POST[¨enviar´]))
$BandMens = false;
$TipoMovi = $_POST['C01']; //Leer los hidden
$ClavBusq = $_POST['C02']; //Leer los hidden	
$AConsecutivo= $_POST['C03'];	   //Leer los campolinea 21 Conac
$AAyuntamiento = $_POST['C04'];
$AEjercicio = $_POST['C05'];
$AFechInic = $_POST['C06'];
$AFechTerm = $_POST['C07'];	
$ANombProg = $_POST['C08'];	
$AObjetivo = $_POST['C09'];	
$ANombIndica = $_POST['C010'];
$ADimeAMedir = $_POST['C011'];
$ADefiIndica = $_POST['C012'];
$AMetoCalcu = $_POST['C013'];
$AUnidMedi = $_POST['C014'];
$AFrecuMedi = $_POST['C015'];
$ALineaBase = $_POST['C016'];
$AMetaProgra = $_POST['C017'];
$AMetasAjusta = $_POST['C018'];
$AAvance = $_POST['C019'];
$ASentiIndic = $_POST['C020'];
$ASentiIndicOtro= $_POST['C021'];
$AFuenInforma = $_POST['C022'];
$AAreaResp = $_POST['C023'];
$ANota = $_POST['C024'];


switch ( $TipoMovi )		
	{ case "A": $InstSql =  "INSERT art92_via ".
			                 "VALUE (NULL,'$AAyuntamiento', '$AEjercicio', '$AFechInic', '$AFechTerm', '$ANombProg', '$AObjetivo', '$ANombIndica', '$ADimeAMedir', '$ADefiIndica', '$AMetoCalcu', '$AUnidMedi', '$AFrecuMedi', '$ALineaBase', '$AMetaProgra', '$AMetasAjusta', '$AAvance', '$ASentiIndic', '$ASentiIndicOtro', '$AFuenInforma', '$AAreaResp', '$ANota') ";          //Colocar variables Linea 7-8n
	 			break;
	 case "M": $InstSql = "UPDATE art92_via ".
						  "SET AFechaInicio = '$AFechInic',".
							  "AFechaTermino = '$AFechTerm',".
							  "ANombrePrograma = '$ANombProg',".
							  "AObjetivo= '$AObjetivo',".
							  "ANombreIndicador= '$ANombIndica'".
							  "ADimensionesAMedir= '$ADimeAMedir'".
							  "ADefinicionIndicador= '$ADefiIndica'".
							  "AMetodoCalculo= '$AMetoCalcu'".
							  "AUnidadMedida= '$AUnidMedi'".
							  "AFrecuenciaMedicion= '$AFrecuMedi'".
							  "ALineaBase= '$ALineaBase'".
							  "AMetasProgramadas= '$AMetaProgra'".
							  "AMetasAjustadas= '$AMetasAjusta'".
							  "AAvance= '$AAvance'".
							  "ASentidoIndicador= '$ASentiIndic'".
							  "ASentidoIndicadorOtro= '$ASentiIndicOtro'".
							  "AFuenteInformacion= '$AFuenInforma'".
							  "AAreaResp= '$AAreaResp'".
							  "ANota= '$ANota'".
							

						 	//campos en base s la base de linea 9
	                           //Colocar variables Linea 7-8n
						  "WHERE  AConsecutivo= '$ClavBusq'";
	 			break;
	 case "B":  $InstSql = "DELETE FROM art92_via ".
			    		   "WHERE  AConsecutivo= '$ClavBusq' ";//Modificar el campo llave
	 			break;
}

if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();

header("location: ConacList.php");
?>	
