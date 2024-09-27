<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

$InstSql = "SELECT EConsecut, EEmpresa, ERespresentante, ". 
				  "EContacto, ETeleCont, EHoraAten, ".
				  "(SELECT COUNT(*) ". 
				   "FROM edplaza ". 
				   "WHERE PConsEmpr = EConsecut AND ". 
						 "PPlazAcIn = 'A' AND ". 
						 "PEstado = 'A' ) AS PlazActi ". 
		   "FROM etempresa ".
		   "WHERE  EEstado = 'A' ";;
			
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>	
