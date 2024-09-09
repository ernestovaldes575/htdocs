<?php
include($RutaIntr.'Encabezado/EncaCook.php');
include($RutaIntr.'Conexion/ConBasCliente.php');

//********************************************************************
//Carga las variables
$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0];
$MesTrab  = $ABusqMae[1];
$EstaTrab = $ABusqMae[2];
$ConSolBu = $ABusqMae[3];
$EstSolBu = $ABusqMae[4];

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandInst = false;
if ( isset($_GET["Param0"]) )
	$BandInst = true;


//Carga el registro para ABC	
if( isset($_GET['PaCRUD01']) != ''){	
	$TipoMovi = $_GET["PaCRUD01"];	#Tipo de Movimiento 
	$NumeArti = $_GET["PaCRUD02"];	#Numero de Articulo
}	

//------------------------------------------------------------------------
//Catalogo de Repartidor
$InstSql =  "SELECT DDescri, DCatindad, ". 
                   "DClavUnidMedi, DDescUnidMedi, DClaveProdu, DImporte ".	
            "FROM   sdsolideta ".
            "WHERE  DConseSoli = $ConSolBu AND ".
                   "DNumero = $NumeArti ";
if ($BandInst)  echo "5)<br>$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

//Valores de la tabla
$VC04 = $NumeArti;  $VC05 = "";  $VC06 = 1; 
$VC07 = ""; $VC08 = ""; $VC09 = ""; 
$VC10 = 1;
			
if ($ResuSql)
 { $VC05 = $ResuSql['DDescri'];	
   $VC06 = $ResuSql['DCatindad'];
   $VC07 = $ResuSql['DClavUnidMedi'];	
   $VC08 = $ResuSql['DDescUnidMedi'];	
   $VC09 = $ResuSql['DClaveProdu'];	
   $VC10 = $ResuSql['DImporte'];	
}
else
 { 
  $InstSql =  "SELECT CASE WHEN MAX(DNumero) IS NULL ".
	  					       "THEN 1 ".
	  					       "ELSE MAX(DNumero)+1 END AS NumeRegi ".
              "FROM  sdsolideta ".
              "WHERE DConseSoli = $ConSolBu ";
  if ($BandInst)  echo "5)<br>$InstSql<br>"; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResuSql = $EjInSql->fetch();
  $VC04 = $ResuSql['NumeRegi'];	 
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