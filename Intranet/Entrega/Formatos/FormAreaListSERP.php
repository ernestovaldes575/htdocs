<?php
	include($RutaEnca.'Encabezado/EncaCook.php');
	include($RutaEnca.'Conexion/ConBasEntrega.php');

$ArCook01 = $_COOKIE['CEncaMae'];
$AEncaMae = explode("|", $ArCook01);
$ClavForm = $AEncaMae[0]; 
$DescForm = $AEncaMae[1]; 


//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

if ( isset($_GET["Param1"]) )
 { //Da de alta 
   $BandMens = true;	
   $ConsUnid =  $_GET["Param1"];
   $InstSql = "DELETE FROM etformarea ".
	   		  "WHERE  FAAyuntamiento = '$ClavAyun' AND ".
	   				 "FAUnidad = $ConsUnid ";

  if ($BandMens)  echo '1)'.$InstSql.'<br>';
  $ResuSql = $ConeBase->prepare($InstSql);
  $ResuSql->execute();
  $MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
  if (!$ResuSql) 
	echo '<script>alert("'.$MensResp.'");</script>'; 
  }

if ( isset($_GET["Param2"]) )
 { //Da de alta 
   $BandMens = false;	
   $ConsUnid =  $_GET["Param2"];
   $InstSql = "INSERT INTO etformarea ".
	   		  "VALUES(Null,'$ClavAyun',$ConsUnid,".
	   				      "'$ClavForm','A') ";
  if ($BandMens)  echo '1)'.$InstSql.'<br>';
  $ResuSql = $ConeBase->prepare($InstSql);
  $ResuSql->execute();
  $MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
  if (!$ResuSql) 
	echo '<script>alert("'.$MensResp.'");</script>'; 
  }

//Carga el registro para Consulta
$InstSql = "Select CUNConsecutivo, CUNClaveUnidad, CUNDescripcion ".
		   "FROM   acceso.ACUnidades ".
		   "WHERE  CUNAyuntamiento = '$ClavAyun' AND ".
		   		  "CUNConsecutivo IN (SELECT FAUnidad ".
									  "FROM  etformarea ".
									  "WHERE FAAyuntamiento = '$ClavAyun' AND ".
											"FAFormato = '$ClavForm' ) ". 
			"ORDER BY CUNClaveUnidad";
			
if ($BandMens) echo "1)$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResSql1 = $EjInSql->fetchAll();

$InstSql = "Select CUNConsecutivo, CUNClaveUnidad, CUNDescripcion ".
		   "FROM   Acceso.AcUnidades ".
		   "WHERE  CUNAyuntamiento = '$ClavAyun' AND ".
		   		  "CUNConsecutivo NOT IN (SELECT FAUnidad ".
									  "FROM  etformarea ".
									  "WHERE FAAyuntamiento = '$ClavAyun' AND ".
											"FAFormato = '$ClavForm' ) AND ". 
				  "LENGTH(CUNClaveUnidad) > 2  ". 
		    "ORDER BY CUNClaveUnidad ";
			
if ($BandMens) echo "2)$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResSql2 = $EjInSql->fetchAll();

?>