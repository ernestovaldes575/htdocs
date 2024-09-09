<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$TrimTrab = $ABusqMae[1];	//Trimestre de trabajo 
$ConsFrac = $ABusqMae[2];	//Consecutivo de la Fraccion del Unidad
$FracTrab = $ABusqMae[3];	//Fraccion de trabajo 92,93

//********************************************************************
//Informacion de la Lista
//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//*****************************************************************
//Para operacion A B C

$NumeRegi = $_POST['C02'];  
if ($BandMens)  echo 'NumeRegi)'.$NumeRegi.'<br>';

for ($i=1; $i<11; $i++) {
	$CaDa = 0; 
	$VC03 = $NumeRegi + $i;
	// $ValoCamp = "C".$VC03."04"; $VC04 = $_POST[$ValoCamp];
	// $CaDa += ( $VC04 ?? null ) ? 1 : 0; 

	$ValoCamp = "C".$VC03."05"; $VC05 = $_POST[$ValoCamp]; 
	$CaDa += ( $VC05 ?? null ) ? 1 : 0;

	$ValoCamp = "C".$VC03."06"; $VC06 = $_POST[$ValoCamp];
	$CaDa += ( $VC06 ?? null )	? 1 : 0;

	$ValoCamp = "C".$VC03."07"; $VC07 = $_POST[$ValoCamp];
	$CaDa += ( $VC07 ?? null )	? 1 : 0;

	$ValoCamp = "C".$VC03."08"; $VC08 = $_POST[$ValoCamp];
	$CaDa += ( $VC08 ?? null  )	? 1 : 0;

	$ValoCamp = "C".$VC03."09"; $VC09 = $_POST[$ValoCamp];
	$CaDa += ( $VC09 ?? null  )	? 1 : 0;

	$ValoCamp = "C".$VC03."10"; $VC10 = $_POST[$ValoCamp];
	$CaDa += ( $VC10 ?? null  )	? 1 : 0;

	$ValoCamp = "C".$VC03."11"; $VC11 = $_POST[$ValoCamp];
	$CaDa += ( $VC11 ?? null  )	? 1 : 0;

	$ValoCamp = "C".$VC03."12"; $VC12 = $_POST[$ValoCamp];
	$CaDa += ( $VC12 ?? null  )	? 1 : 0;

	echo "CaDa) $CaDa <br>";

	if ( $CaDa > 1)
	 { $InstSql = 	"INSERT INTO tt9202borgan ".			//Cambiar tabla
					"VALUES (NULL,'$ClavAyun',$EjerTrab,".	
							 "$ConsFrac,'$TrimTrab','$VC05',".	
							 "'$VC06','$VC07','',".			
							 "'$VC09','$VC10','$VC11',".
							 "'$VC12')";
	  //Ejecuta la instruccion
	  if ($BandMens)  echo '1)'.$InstSql.'<br>';
	  $ResuSql = $ConeBase->prepare($InstSql);
	  $ResuSql->execute();
	  $MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
	  if (!$ResuSql) 
		echo '<script>alert("'.$MensResp.'");</script>'; 
	  
	}
 }
$PagiRegr = "location: InfoList.php";
if (!$BandMens) header($PagiRegr);	
?>