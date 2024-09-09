<?php

include($RutaIntr.'Conexion/ConBasAgente.php');

//********************************************************************
//Carga las variables

$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0];
$MesTrab  = $ABusqMae[1];

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


//------------------------------------------------------------------------
//Catalogo de Ejercicio
$InstSql = "SELECT CEJClave AS Clave, CEJDescri AS Descri ".
		   "FROM   acejercicio ".
		   "WHERE  CEJClave " ;
if ($BandMens)  echo '2)'.$InstSql.'<br>'; 			
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$CataEjer = $EjInSql->fetchAll(); 


$InstSql = "SELECT BConsecutivo,BBroker, ".
				  "(SELECT count(*) ". 
				   "FROM   stsolicitud ". 
				   "WHERE  SConsBrok = BConsecutivo AND ". 
				   		  "SSeguimi in ('01','02') AND ".
						  "SEjercicio = $EjerTrab ) AS SoliClie, ". 
				  "(SELECT count(*) ". 
				   "FROM   stsolicitud ". 
				   "WHERE  SConsBrok = BConsecutivo AND ". 
						  "SSeguimi in ('03') AND ". 
						  "SEjercicio = $EjerTrab ) AS AnalBrok, ".
				  "(SELECT count(*) ". 
				   "FROM   stsolicitud ". 
				   "WHERE  SConsBrok = BConsecutivo AND ". 
						  "SSeguimi in ('04') AND ". 
						  "SEjercicio = $EjerTrab ) AS EnviProv, ".
				  "(SELECT count(*) ". 
				   "FROM   stsolicitud ". 
				   "WHERE  SConsBrok = BConsecutivo AND ". 
						  "SSeguimi in ('05') AND ". 
						  "SEjercicio = $EjerTrab ) AS ReciProv, ".
				  "(SELECT count(*) ". 
				  "FROM   stsolicitud ". 
				  "WHERE  SConsBrok = BConsecutivo AND ". 
						 "SSeguimi in ('06') AND ".
						 "SEjercicio = $EjerTrab ) AS FactProv ".
		   "FROM   stbroker ". 
		   "WHERE  BConsecutivo > 999 AND ". 
		   		  "BEstado = 'A' ";
//echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();

?>	
