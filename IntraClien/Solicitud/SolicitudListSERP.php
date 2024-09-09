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
$ConSolBu = $ABusqMae[3];

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Ejercicio
if ( isset($_GET["Param1"]) ){
	$EjerTrab = $_GET["Param1"];
	$ArCook01 =  "$EjerTrab|$MesTrab|$EstaTrab|$ConSolBu|";
	setcookie("CBusqMae", "$ArCook01");
}

//Estado de la revision
if ( isset($_GET["Param2"]) ){
	$MesTrab = $_GET["Param2"];
	$ArCook02 =  "$EjerTrab|$MesTrab|$EstaTrab|$ConSolBu|";
	setcookie("CBusqMae", "$ArCook02");
}

if ( isset($_GET["Param3"]) ){
	$EstaTrab = $_GET["Param3"];
	$ArCook02 =  "$EjerTrab|$MesTrab|$EstaTrab|$ConSolBu|";
	setcookie("CBusqMae", "$ArCook02");
}

if ( isset($_GET["Param4"]) ){
	$ConsSoCa = $_GET["Param4"];
	$CambEsSo = $_GET["Param5"];
    
	//Cambia el Estado
	switch ( $CambEsSo )
     {  case '01': $NuevEsSo = "03"; break;
		case '02': $NuevEsSo = "03"; break; 
	 }
	
	$InstSql = "UPDATE stsolicitud ". 
	 		   "SET    SSeguimi ='$NuevEsSo' ". 
			   "WHERE  SConsecutivo =  $ConsSoCa ";
	if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
	$EjInSql = $ConeBase->prepare($InstSql);
	$EjInSql->execute();
	$CataEjer = $EjInSql->fetch(); 
}
//------------------------------------------------------------------------
//Catalogo de Ejercicio
$InstSql = "SELECT CEJClave AS Clave, CEJDescri AS Descri ".
		   "FROM   acejercicio ".
		   "WHERE  CEJClave " ;
if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$CataEjer = $EjInSql->fetchAll(); 
			
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

//Catalogo de Solicitud
$InstSql = "SELECT '00' AS Clave, 'Todos' AS Descri ". 
		   "UNION ".
		   "SELECT CESClave AS Clave, CESDescri AS Descri ".
		   "FROM   scestasoli ".
		   "ORDER BY Clave ";
if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$CataEsSo = $EjInSql->fetchAll(); 

//------------------------------------------------------------------------	
//Carga el registro para Consulta
$CondIst = ($EstaTrab == "00" )? "": " AND SSeguimi = '$EstaTrab' ";
$InstSql = "SELECT SConsecutivo, SMes,SNumeFoli,".
				  "SRepartidor,CREDescri,".
			  	  "SFormaPago, SMetoPago, SUso, ". 
			  	  "SFechAlta, SImporte, SSeguimi, CESDescri, ".
				  "(SELECT COUNT(*) ".
				   "FROM   SDSoliDeta ".
				   "WHERE  DConseSoli = SConsecutivo AND ".
						  "DEstado = 'A') AS TotaArti, ".
				  "(SELECT SUM(DImporte) ".
				   "FROM   SDSoliDeta ".
				   "WHERE  DConseSoli = SConsecutivo AND ".
						  "DEstado = 'A') AS ImpoDeta ".
		   "FROM  stsolicitud ".
		   "INNER JOIN scestasoli ON SSeguimi = CESClave ".	
		   "INNER JOIN SCRepartidor ON SRepartidor = CREConsecut ".	
		   "WHERE SEjercicio = $EjerTrab AND ".
				 "SMes = '$MesTrab' AND ".
			  	 "SConsClie = $ConsClie AND ".
			  	 "SEstado = 'A'  ".
				 $CondIst;
			
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>	
