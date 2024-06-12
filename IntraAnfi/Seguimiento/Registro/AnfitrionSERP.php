<?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraAnfi/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/IntraAnfi/Conexion/ConBasInvita.php');

$BandMens = false;

//Carga el registro para ABC	
if( isset($_GET['PaAMB01']) != ''){	
	$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
	$ConsBusq = $_GET["PaAMB02"];	#Consecutivo de busqueda
}

$InstSql =  "SELECT AAnfitrion, Aclave, AContra ".
			"FROM   stanfitrion ".
			"WHERE  AConsecutivo = $ConsAnfi ";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

//Valores de la tabla
$VC03 = "";  
$VC04 = ""; $VC05 = "";

if ($ResuSql)
  { $VC03 = $ResuSql['AAnfitrion'];	
    $VC04 = $ResuSql['Aclave'];	//LFechPublF
    $VC05 = $ResuSql['AContra'];	//LAbrirLiDoIm
  }

$MesnTiMo = "Actualizar"; 
$CRUD = "PUT";
?>	
