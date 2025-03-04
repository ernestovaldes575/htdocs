<?php
include( $RutaIntr.'Encabezado/EncaCook.php');
include( $RutaIntr.'Conexion/ConBasCliente.php');

//********************************************************************
//Carga las variables
$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0];
$MesTrab  = $ABusqMae[1];
$EstaTrab = $ABusqMae[2];
$ConsSoli = $ABusqMae[3];

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandInst = false;
if ( isset($_GET["Param0"]) )
	$BandInst = true;

if ( isset($_GET["Param1"]) )
  { $EjerTrab = $_GET["Param1"];
    $ArCook02  = "$EjerTrab|$MesTrab|$ConsSoli|";
   	setcookie("CBusqMae", "$ArCook02");
  }

//Mes de trabajo
if ( isset($_GET["Param2"]) )
  { $MesTrab = $_GET["Param2"];
    $ArCook02  = "$EjerTrab|$MesTrab|$ConsSoli|";
   	setcookie("CBusqMae", "$ArCook02");
  }

//Carga el registro para ABC	
if( isset($_GET['PaCRUD01']) != ''){	
	$TipoMovi = $_GET["PaCRUD01"];	#Tipo de Movimiento 
	$ConsSoli = $_GET["PaCRUD02"];	#Consecutivo de la solicitud
  $EstaSoli = $_GET["PaCRUD03"];	#Consecutivo de la solicitud
}	

//Carga el Consecutivo del "Provedor"
//Aplica solo para la alta
$ConsRepa = 0;
if ( isset($_GET['PaCRUD04']) != '')
	$ConsRepa = $_GET["PaCRUD04"];	

//------------------------------------------------------------------------
//Catalogo de Repartidor
$InstSql = "SELECT CREConsecut, CREClave AS Clave, CREDescri AS Descri ".
		       "FROM   screpartidor ".
		       "ORDER BY CREClave ";
if ($BandInst)  echo "1)<br>$InstSql<br>"; 			
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$CataRepa = $EjInSql->fetchAll();

//Catalogo de forma de pago
$InstSql = "SELECT CFPClave AS Clave, CFPDescri AS Descri ".
		       "FROM scformpago ".
		       "ORDER BY CFPClave";
if ($BandInst)  echo "2)<br>$InstSql<br>"; 			
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$CatForPa = $EjInSql->fetchAll();
			
//Catalogo de metodo de pago
$InstSql = "SELECT CMPClave AS Clave, CMPDescri AS Descri ".
		       "FROM   scmetopago ".
	    	   "ORDER BY CMPClave";
if ($BandInst)  echo "3)<br>$InstSql<br>"; 			
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$CatMetPa = $EjInSql->fetchAll();

//Catalogo de uso
$InstSql = "SELECT CUSClave AS Clave, CUSDescri AS Descri ".
	    	   "FROM  scuso ".
	    	   "ORDER BY CUSClave";
if ($BandInst)  echo "4)<br>$InstSql<br>"; 			
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$CataUso = $EjInSql->fetchAll();

$InstSql =  "SELECT SConsClie, SEjercicio, SMes, ".
	        			   "SNumeFoli, SRepartidor, SFormaPago, SMetoPago, ".
	        			   "SUso, SFechAlta, SImporte, SSeguimi, SEstado ".
	      		"FROM   stsolicitud ".
		      	"WHERE  SConsecutivo = $ConsSoli ";
if ($BandInst)  echo "5)<br>$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

//Valores de la tabla
$VC04 = 0;  $VC05 = $EjerSist;  $VC06 = $MesSist;  
$VC07 = "1"; $VC08 = $ConsRepa;
$VC09 = 1; $VC10 = 1; $VC11 = 1; 
$VC12 = $FechSist; $VC13 = 0; $VC14 = "01"; 
			
if ($ResuSql)
 { $VC04 = $ResuSql['SConsClie'];	
   $VC05 = $ResuSql['SEjercicio'];	
   $VC06 = $ResuSql['SMes'];	
  
   $VC07 = $ResuSql['SNumeFoli'];	
   $VC08 = $ResuSql['SRepartidor'];	
  
   $VC09 = $ResuSql['SFormaPago'];	
   $VC10 = $ResuSql['SMetoPago'];	
   $VC11 = $ResuSql['SUso'];	
  
   $VC12 = $ResuSql['SFechAlta'];	
   $VC13 = $ResuSql['SImporte'];	
   $VC14 = $ResuSql['SSeguimi'];	
}
else
{ $InstSql =  "SELECT CASE WHEN MAX(SNumeFoli) IS NULL ".
						  "THEN 1 ".
						  "ELSE MAX(SNumeFoli) +1 END AS NumeRegi ".
			"FROM   stsolicitud ".
			"WHERE  SConsClie = $ConsClie ";
  if ($BandInst) echo "5)<br>$InstSql<br>"; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResuSql = $EjInSql->fetch();
  
  $VC07 = 1;  
  if ($ResuSql)
    $VC07 = $ResuSql['NumeRegi'];
  
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
?>	
