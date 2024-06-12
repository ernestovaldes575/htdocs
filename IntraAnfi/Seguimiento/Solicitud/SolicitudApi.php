<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraInvi/Conexion/ConBasInvita.php');

//********************************************************************
//Carga las variables
$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0];
$MesTrab  = $ABusqMae[1];
$ConSolBu = $ABusqMae[2];

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

$BandMens = true;
//Ejercicio
if ( isset($_GET["Param1"]) ){
	$EjerTrab = $_GET["Param1"];
	$ArCook01 =  "$EjerTrab|$MesTrab|$ConSolBu|";
	setcookie("CBusqMae", "$ArCooki4");
}

//Estado de la revision
if ( isset($_GET["Param2"]) ){
	$MesTrab = $_GET["Param2"];
	$ArCooki4 =  "$EjerTrab|$MesTrab|$ConSolBu|";
	setcookie("CBusqMae", "$ArCooki4");
}

//*****************************************************************
//Para operacion A B C
if ( isset($_POST['C00']) ) 
 {  $CRUD =  $_POST['C00'];
	//echo "2) CRUD: $CRUD ";  

	$TipoMovi = $_POST['C01'];
	$ConsBusq = $_POST['C02']; 

	$TituLaye = $_POST['C03']; 
	$DescLaye = $_POST['C04'];
	$FechInic = $_POST['C05']; 
	$FechFina = $_POST['C06']; 
	$ArchMost = $_POST['C07']; 	//Imagen, PDF o Liga
	$LigaRefe = $_POST['C08']; 
	$DondAbri = $_POST['C09'];	//Ventana, Pagina 
 }	

switch ( $CRUD )
{ case "GET": 
		//Carga el registro para ABC	
		if( isset($_GET['PaAMB01']) != ''){	
			$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
			$ConsBusq = $_GET["PaAMB02"];	#Consecutivo de busqueda
			$EstaSegu = $_GET["PaAMB03"];	#Estado del seguimiento
			echo "EstaSegu $EstaSegu <br>";
			
			//------------------------------------------------------------------------
			//Catalogo de forma de pago
			$InstSql = "SELECT CFPClave, CFPDescri ".
					   "FROM scformpago ".
					   "ORDER BY CFPClave";
			if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$CatForPa = $EjInSql->fetchAll();
			
			//------------------------------------------------------------------------
			//Catalogo de metodo de pago
			$InstSql = "SELECT CMPClave AS Clave, CMPDescri AS Descri "+
						 "FROM   scmetopago ".
						 "ORDER BY CMPClave";
			if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$CatMetPa = $EjInSql->fetchAll();

			//------------------------------------------------------------------------
			//Catalogo de uso
			$InstSql = "SELECT CUSClave, CUSDescri ".
						 "FROM  scuso ".
						 "ORDER BY CUSClave";
			if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$CataUso = $EjInSql->fetchAll();

			$InstSql =  "SELECT PEjercicio,PMesRegi,". 
							   "PTitulo, PDescripcion,". 
							   "PFechPublI,PFechPublF,".
							   "TRIM(PImagenPagi) AS ImagPagi,".
							   "PDocuLiga ,TRIM(PDocumento) AS Docume, PLiga,  ". 
							   "PVentRefe, PEstaSegu ".
						"FROM  PTPagina ".
						"WHERE PAyuntamiento = '".$ClavAyun."' AND ".
							  "PEjercicio = '".$EjerTrab."' AND ".
							  "PTipoDocu = '".$TipoDocu."' AND ". 
							  "PConsecut = ".$ConsBusq." ";
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetch();

			//Valores de la tabla
			$VC03 = "";  $VC04 = ""; 
			$VC05 = "";  $VC06 = ""; $VC07 = "";
			$VC08 = "N"; $VC09 = ""; $VC10 = ""; 
			$VC11 = "N"; 
			
			if ($ResuSql)
			  { $VC01 = $ResuSql['PEjercicio'];	
				$VC02 = $ResuSql['PMesRegi'];	

				$VC03 = $ResuSql['PTitulo'];	
				$VC04 = $ResuSql['PDescripcion'];	

				$VC05 = $ResuSql['PFechPublI'];	//LFechPublI
				$VC06 = $ResuSql['PFechPublF'];	//LFechPublF
				
				$VC07 = $ResuSql['ImagPagi'];	//LAbrirLiDoIm

				$VC08 = $ResuSql['PDocuLiga'];	//LLiga
				$VC09 = $ResuSql['Docume'];	//LVentRefe
				$VC10 = $ResuSql['PLiga'];	//LImagen

				$VC11 = $ResuSql['PVentRefe'];	//LAImagDocu
				
			  }
			
			  $RutaArch = "/ExpeElectroni/$EjerTrab/$MesTrab/";
			//-----------------------------------------------------------  	
			
			switch ( $EstaSegu)
			{ case "01": $CoEdSe01 = "ff5733"; $CoEdSe02 = "fefefe"; break;
			  case "02": $CoEdSe01 = "fefefe"; $CoEdSe02 = "ff5733"; }
		}
		else
		{ //------------------------------------------------------------------------
		  //Catalogo de Ejercicio
		  $InstSql = "SELECT CEJClave AS Clave, CEJDescri AS Descri ".
			  		 "FROM   acejercicio ".
			  		 "WHERE  CEJClave " ;
		  if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
		  $EjInSql = $ConeBase->prepare($InstSql);
		  $EjInSql->execute();
		  $CataEjer = $EjInSql->fetchAll(); 
			
		  //------------------------------------------------------------------------
		  //Catalogo de Mes
		  $InstSql = "SELECT '00' AS Clave, 'Todos' AS Descri ". 
					 "UNION ".
					 "SELECT  CMEClave AS Clave, CMEDescri AS Descri ".
			  		 "FROM acmes ".
			  		 "ORDER BY Clave ";
		  if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
		  $EjInSql = $ConeBase->prepare($InstSql);
		  $EjInSql->execute();
		  $CataMes = $EjInSql->fetchAll(); 
		
		  //------------------------------------------------------------------------	
		  //Carga el registro para Consulta
		  $InstSql = "SELECT SConsecutivo, SMes,SNumeFoli,". 
			  		 		"SFormaPago, SMetoPago,". 
			  				"SUso, SFechAlta, SImporte, SSeguimi ".
			  		 "FROM  stsolicitud ".
			  		 "WHERE SEjercicio = $EjerTrab AND ".
			  			   "SMes = '$MesTrab' AND ".
			  			   "SConsAnfi = $ConsInvi AND ".
			  			   "SEstado = 'A'  ";
			
		  if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
		  $EjInSql = $ConeBase->prepare($InstSql);
		  $EjInSql->execute();
		  $ResuSql = $EjInSql->fetchAll();

		}	
		break;
	case "POST": //Alta
	  /*`PConsecut`, `PAyuntamiento`, `PUnidad`, 
	    `PEjercicio`, `PMesRegi`, 
		`PTipoDocu`, `PTitulo`, `PDescripcion`, 
		`PFechPublI`, `PFechPublF`, `PImagenPagi`, 
		`PDocuLiga`, `PDocumento`, `PLiga`, `PVentRefe`, `PSenaSord`, 
		`PSerPubCre`, `PFechAlta`, `PSerPubRec`, `PFechReci`, `PSerPubRev`, `PFechRevi`, `PSerPubPub`, `PFechPubl`, `PSerPubCier`, `PFechaCier`, `PEstaSegu`, `PEstado`  */
		$InstSql = "INSERT INTO PTPagina ". 
		"VALUES (0,'$ClavAyun',$ConsUnid,". 
				"'$EjerTrab', '$MesTrab', ".
				"'$TipoDocu', '$TituLaye', '$DescLaye', ".
				"'$FechInic', '$FechFina', '',". //Crea
				"'$ArchMost','','$LigaRefe','$DondAbri','',". 
				"'$ConsUsua', date(now()),". 	//alta
				"-1, NULL, -1, NULL, ". 		//Recibe, Revisa
				"-1, NULL, -1, NULL,".			//Publica, cierra			
				"'01','A')";
		break;
	case "PUT": //Cambio
		$InstSql = "UPDATE PTPagina ". 
				   "SET    PTitulo = '$TituLaye', ".
						  "PDescripcion = '$DescLaye',". 
						  "PFechPublI = '$FechInic',". 
						  "PFechPublF = '$FechFina',". 
						  "PDocuLiga = '$ArchMost',".  
						  "PLiga = '$LigaRefe',". 
						  "PVentRefe = '$DondAbri'". 
				   "WHERE PAyuntamiento = '$ClavAyun' AND ".
						 "PEjercicio = '$EjerTrab' AND ".
						 "PTipoDocu = '$TipoDocu' AND ". 
						 "PConsecut = $ConsBusq ";
		break;
	case "DELETE": //Eliminar
		$InstSql = "UPDATE PTPagina ". 
					"SET   PEstado = 'B' ".
					"WHERE PAyuntamiento = '$ClavAyun' AND ".
						  "PEjercicio = '$EjerTrab' AND ".
						  "PTipoDocu = '$TipoDocu' AND ". 
						  "PConsecut = $ConsBusq ";
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

	 
   }

  // Cerrar la conexión a la base de datos	 
  //$ResuSql->closeCursor();
  //$ConeBase->close();
  /*$PagiRegr = ($CRUD == "DELETE" ) ? "PWRegistroList.php":
  									 "PWRegistro.php?PaAMB01=M&PaAMB02=".$ConsBusq;*/
  $PagiRegr = "PWRegistroList.php";
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
 }
?>	
