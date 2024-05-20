<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//*****************************************************************
//Para operacion A B C
if ( isset($_POST['C00']) ) 
 {  $CRUD =  $_POST['C00'];
	$TipoMovi = $_POST['C01'];
	$ConsBusq = $_POST['C02']; 

	$NombEmpr = $_POST['C03']; 
	$Represen = $_POST['C04'];
	$DatoCont = $_POST['C05']; 
	$TeleCont = $_POST['C06']; 
	$HoraAten = $_POST['C07']; 
	$CorrAcce = $_POST['C08']; 
	$ContAcce = $_POST['C09']; 
 }	

switch ( $CRUD )
{ case "GET": 
		//Carga el registro para ABC	
		if( isset($_GET['PaAMB01']) != ''){	
			$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
			$ConsBusq = $_GET["PaAMB02"];	#Consecutivo de busqueda
			
			$InstSql =  "SELECT EEmpresa, ERespresentante,". 
							   "EContacto, ETeleCont, EHoraAten, ".
							   "ECorreo, EContra ".
						"FROM  etempresa ".				
						"WHERE EAyuntamiento = '".$ClavAyun."' AND ".
							  "EConsecut = ".$ConsBusq." ";;
			if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
			$EjInSql = $ConeBase->prepare($InstSql);
			$EjInSql->execute();
			$ResuSql = $EjInSql->fetch();

			$VC03 = "";  $VC04 = ""; 
			$VC05 = "";  $VC06 = "";
			$VC07 = "";  $VC08 = ""; $VC09 = "";
			if ($ResuSql)
			  { $VC03 = $ResuSql[0];	//EEmpresa
				$VC04 = $ResuSql[1];	//ERespresentante
				$VC05 = $ResuSql[2];	//EContacto
				$VC06 = $ResuSql[3];	//ETeleCont
				$VC07 = $ResuSql[4];	//EHoraAten
				$VC08 = $ResuSql[5];	//ECorreo
				$VC09 = $ResuSql[6];	//EContra		
			  }
		}
		else
		{ //Carga el registro para Consulta
		  $InstSql = "SELECT EConsecut, EEmpresa, ERespresentante, ". 
		  					"EContacto, ETeleCont, EHoraAten ". 
   					 "FROM  ETEmpresa ".
   					 "WHERE  EEstado = 'A' ";			
		  if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
		  $EjInSql = $ConeBase->prepare($InstSql);
		  $EjInSql->execute();
		  $ResuSql = $EjInSql->fetchAll();
		}	
		break;
	case "POST": //Alta
		$InstSql = "INSERT INTO etempresa ". 
					   "VALUES (Null,'".$ClavAyun."',". 
							  "'" .$NombEmpr. "', '".$Represen."', ". 
							  "'" .$DatoCont. "', '".$TeleCont."', '".$HoraAten."', ".
							  "'" .$CorrAcce. "', '".$ContAcce."', ". 
							  "'" .$ConsUsua. "', date(now()),'A') ";
		break;
	case "PUT":  #Modificacion
			$InstSql = "UPDATE etempresa ". 
					   "SET EEmpresa = '".$NombEmpr."', ".
							"ERespresentante = '".$Represen."', ".
							"EContacto = '".$DatoCont."', ".
							"ETeleCont = '".$TeleCont."', ".
							"EHoraAten = '".$HoraAten."', ". 
							"ECorreo = '".$CorrAcce."', ".
							"EContra = '".$ContAcce."' ".
						"WHERE EAyuntamiento = '".$ClavAyun."' AND ".
							  "EConsecut = ".$ConsBusq." ";
		break;
	case "DELETE": #Baja
			$InstSql = "UPDATE etempresa ". 
						"SET   EEstado = 'B' ".
						"WHERE EAyuntamiento = '".$EAyuntamiento."' AND ".
							  "EConsecut = ".$ConsBusq." ";
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
  $PagiRegr = "EmpresaLista.php";
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
