<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Conexion/ConBasInvita.php');

$BandMens = true;

//Carga las variables
$ArCooki1 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCooki1);
$ConsInvi = $ABusqMae[0];

//Carga el registro para ABC	
if( isset($_GET['PaAMB01']) != ''){	
	$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
	$ConsBusq = $_GET["PaAMB02"];	#Consecutivo de busqueda
}

$InstSql =  "SELECT INumeFoli, INombRazon, ". 
				   "IRFC, ICURP, ICalle, INumero, ". 
				   "IColonia, IDelegacion, ICodiPost, ". 
				   "IMunicipio, INombEsta, ". 
				   "ICorreo, IContra  ".
			"FROM  stinvitado ".
			"WHERE IConsecutivo = $ConsInvi ";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

//Valores de la tabla
$VC03 = "1";  $VC04 = ""; 
$VC05 = "";  $VC06 = ""; $VC07 = "";
$VC08 = ""; $VC09 = ""; $VC10 = ""; 
$VC11 = ""; $VC12 = ""; $VC13 = "";
$VC14 = ""; $VC15 = "";

if ($ResuSql)
  { $VC03 = $ResuSql['INumeFoli'];	
	$VC04 = $ResuSql['INombRazon'];	

	$VC05 = $ResuSql['IRFC'];	//LFechPublI
	$VC06 = $ResuSql['ICURP'];	//LFechPublF
				
				$VC07 = $ResuSql['ICalle'];	//LAbrirLiDoIm
				$VC08 = $ResuSql['INumero'];	//LLiga
				$VC09 = $ResuSql['IColonia'];	//LVentRefe
				$VC10 = $ResuSql['IDelegacion'];	//LImagen

				$VC11 = $ResuSql['ICodiPost'];	//LAImagDocu
				$VC12 = $ResuSql['IMunicipio'];	//LAImagDocu
				$VC13 = $ResuSql['INombEsta'];	//LAImagDocu
				$VC14 = $ResuSql['ICorreo'];	//LAImagDocu
				$VC15 = $ResuSql['IContra'];	//LAImagDocu
  }
else
  { $InstSql = "SELECT CASE WHEN MAX(INumero) IS NULL ". 
					  "THEN 1 ". 
					  "ELSE MAX(INumero)+1 END AS NumeRegi ". 
			   "FROM stinvitado ". 
			   "WHERE IAnfitrion = $ConsInvi AND ". 
					 "IEstado = 'A'"; 
	$EjInSql = $ConeBase->prepare($InstSql);
	$EjInSql->execute();
	$ResuSql = $EjInSql->fetch();
	$VC03 = 1;  	
	if ($ResuSql)
	  $VC03 = $ResuSql['NumeRegi'];	
  }  

$MesnTiMo = "";
switch( $TipoMovi ){
      case "A":	$MesnTiMo = "Registrar";  
                  $CRUD = "POST";         break;
      case "M":	$MesnTiMo = "Actualizar"; 
                  $CRUD = "PUT";		  break;
      case "B":	$MesnTiMo = "Eliminar";
                  $CRUD = "DELETE";		  break;
     }
	 echo "2) CRUD: $CRUD ";  
?>	
