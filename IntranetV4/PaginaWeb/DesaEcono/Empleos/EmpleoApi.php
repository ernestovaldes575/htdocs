<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');

//********************************************************************
//Informacion de la Lista

//Carga las variables
$ArCooki3 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCooki3);

//echo '$ABusqMae'.$ABusqMae.'<br>';
$ConsEmpr = $ABusqMae[0]; 
$NombEmpr = $ABusqMae[1];
$ReprEmpr = $ABusqMae[2];

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

$BandMens = true;
//*****************************************************************
//Para operacion A B C
if ( isset($_POST['C00']) ) 
 {  $CRUD     = $_POST['C00'];
	$TipoMovi = $_POST['C01'];
	$ConsBusq = $_POST['C02']; 

	$PuesEmpl = $_POST['C03']; 
	$SexoEmpl = $_POST['C04'];
	$EdadEmpl = $_POST['C05']; 
	$SuleEmpl = $_POST['C06']; 
	$EscoEmpl = $_POST['C07']; 
	$ExpeEmpl = $_POST['C08']; 
	$DeEcEmpr = $_POST['C09']; 
 }	

switch ( $CRUD )
{ case "GET": 
		//Carga el registro para ABC	
		if( isset($_GET['PaAMB01']) != ''){	
			$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
			$ConsBusq = $_GET["PaAMB02"];	#Consecutivo de busqueda
			
			$InstSql =  "SELECT PConsecut, PPuesto, ". 
							   "PSexo, PEdad, PSueldo, ".
							   "PEscolaridad, PExperiencia, ".
							   "EDeEcEmpr, PPlazAcIn, PEstado ".
						"FROM  edplaza ".				
						"WHERE PConsEmpr = '".$ConsEmpr."' AND ".
							  "PConsecut = ".$ConsBusq." ";;
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetch();

			$VC03 = "";  $VC04 = ""; 
			$VC05 = "";  $VC06 = "";
			$VC07 = "";  $VC08 = ""; $VC09 = "";
			if ($ResuSql)
			  { $VC03 = $ResuSql['PPuesto'];
				$VC04 = $ResuSql['PSexo'];
				$VC05 = $ResuSql['PEdad'];
				$VC06 = $ResuSql['PSueldo'];
				$VC07 = $ResuSql['PEscolaridad'];
				$VC08 = $ResuSql['PExperiencia'];  }
			
			$EstaPlaA = ( $VC08 == "A")? "checked":"";
			$EstaPlaI = ( $VC08 == "I")? "checked":"";
			
			//-------------------------------------------------
			//Catalogo	
			$InstSql = 	"SELECT CSEClave, CSEDescripcion ".
						"FROM ecsexo ".
						"ORDER BY CSEClave";
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 			
			$ResuSql = $ConeBase->prepare($InstSql);
			$ResuSql->execute();
			$CataSexo = $ResuSql->fetchAll();
		}
		else
		{ //Carga el registro para Consulta
		  $InstSql = "SELECT PConsecut, PPuesto, PSueldo, PEscolaridad ". 
					 "FROM   edplaza ".
					 "WHERE  PConsEmpr = $ConsEmpr AND ". 
			  				"PEstado = 'A' ";			
		  if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
		  $EjInSql = $ConeBase->prepare($InstSql);
		  $EjInSql->execute();
		  $ResuSql = $EjInSql->fetchAll();
		}	
		break;
	case "POST": //Alta
		$InstSql = "INSERT INTO edplaza ". 
					   "VALUES (Null,$ConsEmpr,". 
							  "'$PuesEmpl', '$SexoEmpl', ". 
							  " $EdadEmpl , $SuleEmpl, '$EscoEmpl, ".
							  "$ExpeEmpl', 'E', ". 
							  "$ConsUsua', date(now()),'$PlazAcIn','A') ";
		break;
	case "PUT":  #Modificacion
			$InstSql = "UPDATE edplaza ". 
					   "SET PPuesto = '".$PuesSoli."', ".
							"PSexo = '".$SexoPues."', ".
							"PEdad = '".$EdadPues."', ".
							"PSueldo = '".$SuelPues."', ".
							"PEscolaridad = '".$EscoPues."', ". 
							"PExperiencia = '".$ExpePues."', ".
							"PPlazAcIn = '".$PlazAcIn."', ".
							"PServModi = ".$ConsUsua.",". 
							"PFechModi = date(now()) ".
						"WHERE  PConsEmpr = " .$ConsEmpr. " AND ". 
							"PConsecut = " .$ConsBusq. " ";
		break;
	case "DELETE": #Baja
			$InstSql = "UPDATE edplaza ". 
						"SET   PEstado = 'B' ".
						"WHERE  PConsEmpr = " .$ConsEmpr. " AND ". 
								"PConsecut = " .$ConsBusq. " ";
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

  // Cerrar la conexión a la base de datos	 
  //$ResuSql->closeCursor();
  //$ConeBase->close();
  /*$PagiRegr = ($CRUD == "DELETE" ) ? "PWRegistroList.php":
  									 "PWRegistro.php?PaAMB01=M&PaAMB02=".$ConsBusq;*/
  $PagiRegr = "EmpleoList.php";
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
