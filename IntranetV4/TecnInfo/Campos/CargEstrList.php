<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CargaCampos</title>
	<link rel="shortcut icon" href="../../Archivos/Img/logoEnc.ico" />
	<link rel="stylesheet" href="../../Archivos/CSS/font-awesome.min.css">
</head>
<body>	
<?php
	
//Carga las variables
$ArCooki1 = $_COOKIE['CMenu'];
$AMenu = explode("|", $ArCooki1);
$ClavMenu = $AMenu[0];  
$DescMenu = $AMenu[1];  
$BaseDato = $AMenu[2]; 
$TablBaDa = $AMenu[3]; 
$BandSql = false; 

//archivo de conexion a la bd
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Archivos/Conexiones/conteinf.php');

if ( isset($_GET["Param1"]) )
 $TipoMovi = $_GET["Param1"];

 if (  $TipoMovi == "A" )
  {
   //-------------------------------------------------------------------------------
   //Nombre propuesto de los archivos
   $TamaNomb = strlen($TablBaDa) - 2; 
   $NombProp = substr($TablBaDa, 2, $TamaNomb);

   if ($BandSql) 
    { echo "TamaNomb) $TamaNomb <br>";
      echo "NombProp) $NombProp <br>";	 
    }

   $TListList  = "InfoList";
   $TListRegre = "/Intranet/MenuIntranet.php";
   $TListCRUD  = "InfoUno"; 
   $TListAltaL = "InfoAltList"; 
   $TListModiL = "InfoModList"; 
   $TCRUD      = "InfoUno"; 
   $TCRUDRegr  = "InfoList"; 
   $TCRUDTerm  = "InfoUno";
   $TCRUDTerbB = "InfoList";

   $TCRUDCampLlav = "EPConsecut";
   $TCRUDVarCamLla = '$'.'CampBusq';
   $TCampOrde  = "EPNumeProg";

   $TCampMod   = "XXModiSePu";
   $TVariCaMo  = '$'.'ConsUsua'; 
   $TCampFech  = "XXFechModi";
   $TCampEsta  = "EPEstado";
  
   /*SELECT TNombre, TTitulo, TRutaArch, 
   TListList, TListRegre,
   TListCRUD, TListAltaL, TListModiL, 
   TCRUD, TCRUDRegr, TCRUDTerm
   FROM pttabla */


   //Elimina la tabla
   $InstSQL = "DELETE FROM pttabla ". 
              "WHERE TNombre = '$TablBaDa'"; 
   if ($BandSql) echo "1) $InstSQL <br>";
   $EjInSql = $cone->prepare($InstSQL);
   $EjInSql->execute();

   //Carga la tabla
   $InstSQL = "INSERT INTO pttabla ".
	   	   "VALUES ('$TablBaDa','','',". 
	   			   "'$TListList', '$TListRegre',".
				   "'$TListCRUD', '$TListAltaL', '$TListModiL',".  
				   "'$TCRUD', '$TCRUDRegr', '$TCRUDTerm', '$TCRUDTerbB',". 
           "'$TCRUDCampLlav','$TCRUDVarCamLla','$TCampOrde'".
           "'$TCampMod','$TVariCaMo','$TCampFech','$TCampEsta',) ";
   if ($BandSql) echo "2) $InstSQL <br>";
   $EjInSql = $cone->prepare($InstSQL);
   $EjInSql->execute();

  //Borrar datos de la tabla
  $InstSQL = "DELETE FROM pdcampos ".
             "WHERE CTabla='".$TablBaDa."'";
  if ($BandSql)  echo "2) $InstSQL <br>";
  $EjInSql = $cone->prepare($InstSQL);
  $EjInSql->execute();

  //-------------------------------------------------------------------------------
  //Recuperamos los campos de la tabla  
  $InstSQL = "SHOW FULL COLUMNS FROM $BaseDato.$TablBaDa ";
  $EjInSql = $cone->prepare($InstSQL);
  $EjInSql->execute();
  $ToReSql = $EjInSql->rowCount();
  $ResuSql = $EjInSql->fetchall();

  $NumeRegi = 1;
  foreach($ResuSql as $RegiTabl){
    $Campo   = $RegiTabl[0];
    $Valor   = $RegiTabl[1];
    $letras = preg_match('/\d+/', $Valor, $matches);
    $ancho = $matches[0];
    $Valor = preg_replace('/\(\d+\)/', '', $Valor);
    $Comen = $RegiTabl[8];

    /*SELECT `CTabla`, `CNumero`, 
    `CDescripcion`, `CTipo`, `CAncho`, `CComentario`, 
    `CListCondCamp`, `CListCondVari`, `CListCampCRUD`, 
    `CListDesp`, `CListaBusq`, 
    `CCaptCondCamp`, `CCaptCondVari`, 
    `CCampOrdeNume`, `CCampOrdeCond`, `CCampOrdeVari`, `CCaptCamp`, 
    `CCataUtil`, `CCatalogo`, `CCataClav`, `CCataDesc`
    FROM pdcampos */

    $InstSQL = "INSERT INTO pdcampos ".     
  			 "VALUES ('$TablBaDa', '$NumeRegi', ".        //  CDescripcion, 
			 		 "'$Campo', '$Valor', '$ancho','$Comen',".  // CListCondCamp
					 "'I', '', 'I', ".                          //CListDesp
					 "'I', 'I', ".                              //
           "'I', '',".
					 "'I','I', '', 'I', ".                          //
					 "'I', '', '', '')";
    $EjInSql = $cone->prepare($InstSQL);
    $EjInSql->execute();
    $NumeRegi++;
  }
}
if ( !$BandSql )
	header("location: VisualizarCampos.php");
?>	
</body>
</html>