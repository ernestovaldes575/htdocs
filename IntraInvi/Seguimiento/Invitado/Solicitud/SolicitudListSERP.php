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

//Ejercicio
if ( isset($_GET["Param1"]) ){
	$EjerTrab = $_GET["Param1"];
	$ArCook01 =  "$EjerTrab|$MesTrab|$ConSolBu|";
	setcookie("CBusqMae", "$ArCook01");
}

//Estado de la revision
if ( isset($_GET["Param2"]) ){
	$MesTrab = $_GET["Param2"];
	$ArCook02 =  "$EjerTrab|$MesTrab|$ConSolBu|";
	setcookie("CBusqMae", "$ArCook02");
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
		
//------------------------------------------------------------------------	
//Carga el registro para Consulta
$InstSql = "SELECT SConsecutivo, SMes,SNumeFoli,".
				  "SRepartidor,CREDescri,".
			  	  "SFormaPago, SMetoPago, SUso, ". 
			  	  "SFechAlta, SImporte, SSeguimi, ".
				  "(SELECT COUNT(*) ".
				   "FROM   SDSoliDeta ".
				   "WHERE  DConseSoli = SConsecutivo AND ".
						  "DEstado = 'A') AS TotaArti, ".
				  "(SELECT SUM(DImporte) ".
				   "FROM   SDSoliDeta ".
				   "WHERE  DConseSoli = SConsecutivo AND ".
						  "DEstado = 'A') AS ImpoDeta ".
		   "FROM  stsolicitud ".
		   "INNER JOIN SCRepartidor ON SRepartidor = CREConsecut ".	
		   "WHERE SEjercicio = $EjerTrab AND ".
				 "SMes = '$MesTrab' AND ".
			  	 "SConsInvi = $ConsInvi AND ".
			  	 "SEstado = 'A'  ";
			
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>	
