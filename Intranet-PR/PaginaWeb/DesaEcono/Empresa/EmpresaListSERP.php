<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para Consulta
$InstSql = "SELECT EConsecut, EEmpresa, ERespresentante, ". 
 				  "EContacto, ETeleCont, EHoraAten ". 
   		   "FROM  ETEmpresa ".
   		   "WHERE  EEstado = 'A' ";			
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$MensResp = ($EjInSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$EjInSql) 
   echo '<script>alert("'.$MensResp.'");</script>';
$ResuSql = $EjInSql->fetchAll();
?>	
