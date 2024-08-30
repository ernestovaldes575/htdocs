<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');	

$BandMens = false;
//Listado de Supervisores
$InstSql =  "SELECT EConsecut, EEmpresa, ERespresentante, ". 
				   "EContacto, ETeleCont, EHoraAten, ".
				   "(SELECT COUNT(*) ". 
				    "FROM edplaza ". 
					"WHERE PConsEmpr = EConsecut AND ". 
						  "PPlazAcIn = 'A' AND ". 
						  "PEstado = 'A' ) AS PlazActi ". 
			"FROM etempresa ".
			"WHERE  EEstado = 'A' ";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();
$tot_rows = $ResuSql->rowCount();
$ResuTabl = $ResuSql->fetchAll();

?>	
