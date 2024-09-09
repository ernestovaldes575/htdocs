<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Conexion/ConBasInvita.php');

//********************************************************************
//Carga las variables
$ArCook01 = $_COOKIE['CBusqMae'];
//echo '$ArCook01: '.$ArCook01.'<br>';
$ABusqMae = explode("|", $ArCook01);
$ConsAnfi = $ABusqMae[0]; 
//echo '$ConsAnfi: '.$ConsAnfi.'<br>';

$BandMens = true;

//*****************************************************************
//Para operacion A B C
if ( isset($_POST['C00']) ) 
 {  $CRUD =  $_POST['C00'];
	echo "2) CRUD: $CRUD ";  
    /*
	`IConsecutivo`, `INumeFoli`, `INombRazon`, `IRFC`, `ICURP`, `ICalle`, `INumero`, `IColonia`, `IDelegacion`, `ICodiPost`, `IMunicipio`, `INombEsta`, `ICorreo`, `IContra`, `IAnfitrion`, `IFechAlta`, `iEstado` 
	*/
	$TipoMovi = $_POST['C01'];
	$ConsBusq = $_POST['C02']; 

	$NumeFoli = $_POST['C03']; 
	$NombRazo = $_POST['C04'];
	$RFCInvit = $_POST['C05']; 
	$CURPInvi = $_POST['C06']; 
	$CallInvi = $_POST['C07']; 	//Imagen, PDF o Liga
	$NumeInvi = $_POST['C08']; 
	$ColoInvi = $_POST['C09'];	//Ventana, Pagina 
	$DeleInvi = $_POST['C10'];	//Ventana, Pagina 
	$CoPoInvi = $_POST['C11'];	//Ventana, Pagina 
	$MuniInvi = $_POST['C12'];	//Ventana, Pagina 
	$EstaInvi = $_POST['C13'];	//Ventana, Pagina 

	$CorrInvi = $_POST['C14'];	//Ventana, Pagina 
	$ContInvi = $_POST['C15'];	//Ventana, Pagina 
 }	

switch ( $CRUD )
{ case "GET": 
		//Carga el registro para ABC	
		if( isset($_GET['PaAMB01']) != ''){	
			$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
			$ConsBusq = $_GET["PaAMB02"];	#Consecutivo de busqueda

			$InstSql =  "SELECT INumeFoli, INombRazon, ". 
							   "IRFC, ICURP, ICalle, INumero, ". 
							   "IColonia, IDelegacion, ICodiPost, ". 
							   "IMunicipio, INombEsta, ". 
							   "ICorreo, IContra  ".
						"FROM  stinvitado ".
						"WHERE IConsecutivo = $ConsBusq ";
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
						   "WHERE IAnfitrion = $ConsAnfi AND ". 
						   		 "IEstado = 'A'"; 
				$EjInSql = $ConeBase->prepare($InstSql);
				$EjInSql->execute();
				$ResuSql = $EjInSql->fetch();
				$VC03 = 1;  	
				if ($ResuSql)
				  $VC03 = $ResuSql['NumeRegi'];	

			 }  
			
			
		}
		else
		{ //Carga el registro para Consulta
		  $InstSql = "SELECT PConsecut,PEjercicio,PMesRegi,". 
		  					"PTitulo,PDescripcion,". 
		  					"PFechPublI,PFechPublF,PFechaCier,". 
							"TRIM(PImagenPagi) AS ImagPagi,".
   							"PDocuLiga,TRIM(PDocumento) AS Docume, PLiga,". 
   							"PVentRefe, PEstaSegu ".
					  "FROM  PTPagina ".
					  "WHERE PAyuntamiento = '".$ClavAyun."' AND ".
							"PUnidad =".$ConsUnid." AND ".
							"PEjercicio = '".$EjerTrab."' AND ".
							"PTipoDocu = '".$TipoDocu."' AND ". 
							"PEstado = 'A' ";
			$InstSql .=	( $EstaRevi != '00') ? " AND PEstaSegu = '".$EstaRevi."' " : "";
			
		  if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
		  $EjInSql = $ConeBase->prepare($InstSql);
		  $EjInSql->execute();
		  $ResuSql = $EjInSql->fetchAll();
		}	
		break;
	case "POST": //Alta
		/* `IConsecutivo`, ``*/
		$InstSql = "INSERT INTO stinvitado ". 
		"VALUES (0,'$NumeFoli','$NombRazo',". 
				"'$RFCInvit', '$CURPInvi', ".
				"'$CallInvi', '$NumeInvi', '$ColoInvi', ".
				"'$DeleInvi', '$CoPoInvi', ". //Crea
				"'$MuniInvi', '$EstaInvi',". 
				"'$CorrInvi', '$ContInvi', ". 
				" $ConsAnfi , 0,date(now()), 'A')";
		break;
	case "PUT": //Cambio
		$InstSql = "UPDATE stinvitado ". 
				   "SET    INumeFoli = '$NumeFoli', ".
						  "INombRazon = '$NombRazo',". 
						  "IRFC = '$RFCInvit',". 
						  "ICURP = '$CURPInvi',". 
						  "ICalle = '$CallInvi',".  
						  "INumero = '$NumeInvi',". 
						  "IColonia = '$ColoInvi',". 
						  "IDelegacion = '$DeleInvi',". 
						  "ICodiPost= '$CoPoInvi',". 
						  "IMunicipio = '$MuniInvi',". 
						  "INombEsta= '$EstaInvi',". 
						  "ICorreo= '$CorrInvi',". 
						  "IContra = '$ContInvi' ".
				   "WHERE IConsecutivo = $ConsBusq ";
		break;
	case "DELETE": //Eliminar
		$InstSql = "UPDATE stinvitado ". 
				   "SET    iEstado = 'B' ".
				   "WHERE  IConsecutivo = $ConsBusq ";
		break;	

}		

//Para las altas bajas y modificaciones
if ( $CRUD != "GET")
{ //Ejecuta la instruccion
   $BandMens = true;
  if ($BandMens)  echo '1)'.$InstSql.'<br>';	
  $ResuSql = $ConeBase->prepare($InstSql);
  $ResuSql->execute();

  $MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
  if (!$ResuSql) 
    echo '<script>alert("'.$MensResp.'");</script>'; 

  $PagiRegr = "/IntraInvi/MenuIntranet.php";	 
  //Regresa la secuencia del ALTA
  if  ($CRUD == "POST") 
   { //Recupera la secuencia 
	 $InstSql = "SELECT @@identity AS id "; 	
	 if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
	 $RespSql = $ConeBase->prepare($InstSql);
	 $RespSql->execute();
	 $ResuSql = $RespSql->fetch();

	 $ConsBusq = 0;		
	 if ($ResuSql)
	    $ConsBusq = $ResuSql[0];

	 //Datos del Invitado
	 $ConsInvi = $ConsBusq; $NombInvi = $NombRazo;
	 $FechSist = getdate();
	 $EjerTrab = $FechSist['year'];
	 $MesTrab  = $FechSist['mon'];
	 $MesTrab  = ($MesTrab  < 10) ? '0'.$MesTrab : $MesTrab;
	 
	 $ArCook01 = "$ConsInvi|$NombInvi|$EjerTrab|$MesTrab|";
	 setcookie("CEncaAcc", "$ArCook01");	
	 
	 //$PagiRegr = "/IntraInvi/MenuIntranet.php";
   }


  if ($BandMens)	 
   { $PagiRegr = "location: $PagiRegr";
     header($PagiRegr); } 
}
else
 if ( isset($_GET['PaAMB01']) != '') {
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
 }
?>	
