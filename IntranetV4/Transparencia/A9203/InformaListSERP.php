<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

//********************************************************************
//Informacion de la Lista
$TrimTrab = $ABusqMae[1];	//Trimestre de trabajo 
$ConsFrac = $ABusqMae[2];	//Consecutivo de la Fraccion del Unidad
$NumeFrac = $ABusqMae[3];	//Fraccion de trabajo 92,93
$NumeInci = $ABusqMae[4];	//Numero Inciso
$NumeSubi = $ABusqMae[5];	//Numero de Subinciso
$Nomativi = $ABusqMae[6];	//Normatividad

$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para Consulta
<<<<<<< HEAD
$InstSql = "SELECT AConsecutivo, ANumeRegi, ".						//Modificar campos
				  "AFechaInicio, AFechaTermino, ADenominacion, ".
				  "AHipervinculo ".
			"FROM  tt9203facare ".									//Modifica tabla
			"WHERE AAyuntamiento = '$ClavAyun' AND ".				//Modifica condicion
				  "AEjercicio = $EjerTrab AND  ".					
				  "AConsFrac = $ConsFrac AND ".
				  "ANumeTrim = '$TrimTrab' ";
=======
$InstSql = "SELECT AConsecutivo, AAyuntamiento, ".
				  "AFechaInicio, AFechaTermino, AArea ".
				
			"FROM tta9203 ".
		  "WHERE AAyuntamiento = '$ClavAyun' AND ".
		        "AEjercicio = $EjerTrab AND  ".
		         "AConsFrac = $ConsFrac ";
>>>>>>> e5b162c508b56d18625f5506774a619ea33cb671
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>