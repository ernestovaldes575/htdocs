<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraRepa/Conexion/ConBasInvita.php');

$BandMens = false;

//Carga el registro para ABC	
if( isset($_GET['PaAMB01']) != ''){	
	$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
	$ConsBusq = $_GET["PaAMB02"];	#Consecutivo de busqueda
}

$InstSql =  "SELECT CREClave, CREDescri, CREEstado, ".
				   "CRECorreo, CREContra ".
			"FROM   screpartidor ".
			"WHERE  CREConsecut = $ConsRepa ";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

//Valores de la tabla
$VC03 = "01";  $VC04 = ""; $VC05 = "";  
$VC06 = ""; $VC07 = "";

if ($ResuSql)
  { $VC03 = $ResuSql['CREClave'];	
	$VC04 = $ResuSql['CREDescri'];	
	$VC05 = $ResuSql['CREEstado'];	//LFechPublI

   $VC06 = $ResuSql['CRECorreo'];	//LFechPublF
   $VC07 = $ResuSql['CREContra'];	//LAbrirLiDoIm
  }

$MesnTiMo = "Actualizar"; 
$CRUD = "PUT";
?>	
