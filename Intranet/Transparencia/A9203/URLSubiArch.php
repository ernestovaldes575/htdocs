
<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$TrimTrab = $ABusqMae[1];	//Trimestre de trabajo
$ConsFrac = $ABusqMae[2];	//Conssecutivo de la Fraccion
$NumeFrac = $ABusqMae[3];	//Numero Fraccion
$NumeInci = $ABusqMae[4];	//Numero del Inciso
$NumeSubi = $ABusqMae[5];	//Numero del Subinciso

$CarpFrac = "A$NumeFrac$NumeInci";
$CarpFrac = ($NumeSubi != "" )? $CarpFrac."-$NumeSubi": $CarpFrac;

setcookie("CSubiArc", "",time()-1);
setcookie("CImpoArc", "",time()-1);

if( trim($_GET['Param1']) != ''){
    $ConsInci = $_GET["Param1"];	#Consecutivo de la noticia a trabajar}
	$NumeRegi = $_GET["Param2"]; 
}

$ArCook02  = "$ConsInci|$NumeRegi|";
setcookie("CImpoArc", "$ArCook02",time() + (60*60),'/');

/* Param0:	0.-Archivo con mismo nombre 1.- Archivo con nombre por parte del usuario
   Param1:	Ruta del del archivo
   Param2:	Nombre del archvio por el usuario
   Param3:	Archivo con extencion
   Param4:	Redireccionara a otro archivo SinP.- Sin redireccionar pagina */
$Tipo = '1';
$Ruta = $_SERVER['DOCUMENT_ROOT'].
		"/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen/$NumeFrac/$TrimTrab/";
$Nomb = "$CarpFrac-$NumeRegi-$ConsInci";
$Pagi = "/Intranet/Transparencia/$CarpFrac/URLSalvArch.php";
$ArCook03  = $Tipo .'|'. $Ruta .'|'. $Nomb .'|' .$Pagi. '|';
setcookie("CSubiArc", "$ArCook03",time() + (60*60),'/');

echo '<br>---------------<br>'; 
echo '$Tipo: '.$Tipo.'<br>';
echo '$Ruta: '.$Ruta.'<br>';
echo '$Nomb: '.$Nomb.'<br>';
echo '$Pagi: '.$Pagi.'<br>';

if ( isset( $_COOKIE['CSubiArc']) )
 {
    $ArCooki6 = $_COOKIE['CSubiArc'];
    $ASubiArc = explode("|", $ArCooki6);
    $Tipo1 = $ASubiArc[0]; 
    $Ruta1 = $ASubiArc[1]; 
    $Nomb1 = $ASubiArc[2]; 
    $Pagi1 = $ASubiArc[3]; 

    echo '<br>---------------<br>'; 
    echo '$Tipo: '.$Tipo1.'<br>';
    echo '$Ruta: '.$Ruta1.'<br>';
    echo '$Nomb: '.$Nomb1.'<br>';
    echo '$Pagi: '.$Pagi1.'<br>';
 }    
header('location: /Intranet/CargArch/SubirArch.php');
?>