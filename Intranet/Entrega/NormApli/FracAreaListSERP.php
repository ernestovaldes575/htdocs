<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranspa.php');

$ArCook01 = $_COOKIE['CEncaMae'];
$AEncaMae = explode("|", $ArCook01);
$EjerTrab = $AEncaMae[0]; 
$NumeFrac = $AEncaMae[1]; 
$NumeInci = $AEncaMae[2]; 
$SubIncis = $AEncaMae[3]; 
$DescNorm = $AEncaMae[4];
$PeriRepo = $AEncaMae[5];


//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

if ( isset($_GET["Param1"]) )
 { //Da de alta 
   $BandMens = true;	
   $ConsUnid =  $_GET["Param1"];
   $InstSql = "DELETE FROM ttfracarea ".
	   		  "WHERE  FAAyuntamiento = '$ClavAyun' AND ".
					 "FAEjercicio = $EjerTrab AND ".
					 "FAFraccion = $NumeFrac AND ".
					 "FAInciso = $NumeInci AND ".
					 "FASubinciso = '$SubIncis' AND ".
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
   $BandMens = true;		 
   $ConsUnid =  $_GET["Param2"];
   $InstSql = "INSERT INTO ttfracarea ".
	   		  "VALUES(NULL,'$ClavAyun',$EjerTrab,$ConsUnid,".
	   				  "$NumeFrac,$NumeInci,'$SubIncis',".
	   				  "'$PeriRepo',-1,-1,-1,-1 ) ";
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
									  "FROM   ttfracarea ".
									  "WHERE  FAAyuntamiento = '$ClavAyun' AND ".
											 "FAEjercicio = $EjerTrab AND ".
											 "FAFraccion = $NumeFrac AND ".
											 "FAInciso = $NumeInci AND ".
											 "FASubinciso = '$SubIncis' )";
			
if ($BandMens) echo "1)$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResSql1 = $EjInSql->fetchAll();

$InstSql = "Select CUNConsecutivo, CUNClaveUnidad, CUNDescripcion ".
		   "FROM   Acceso.AcUnidades ".
		   "WHERE  CUNAyuntamiento = '$ClavAyun' AND ".
		   		  "CUNConsecutivo NOT IN (SELECT FAUnidad ".
										  "FROM   ttfracarea ".
										  "WHERE  FAAyuntamiento = CUNAyuntamiento AND ".
												 "FAEjercicio = $EjerTrab AND ".
												 "FAFraccion = $NumeFrac AND ".
												 "FAInciso = $NumeInci AND ".
												 "FASubinciso = '$SubIncis' ) ";
			
if ($BandMens) echo "2)$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResSql2 = $EjInSql->fetchAll();

?>