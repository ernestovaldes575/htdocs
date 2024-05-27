
<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$FracTrab = $ABusqMae[1];
$ConsFrac = $ABusqMae[2];
$TrimTrab = $ABusqMae[3];
$NumeFrac = $ABusqMae[4];
$NumeInci = $ABusqMae[5];
$NumeSubi = $ABusqMae[6];

setcookie("CSubiArc", "",time()-1);
setcookie("CImpoArc", "",time()-1);

if( trim($_GET['Param1']) != ''){
    $ConsInci = $_GET["Param1"];	#Consecutivo de la noticia a trabajar}
	$NumeRegi = $_GET["Param1"]; 
}

$ArCook02  = "$ConsInci|$NumeRegi|";
setcookie("CImpoArc", "$ArCook02",time() + (60*60),'/');

/* Param0:	0.-Archivo con mismo nombre 1.- Archivo con nombre por parte del usuario
   Param1:	Ruta del del archivo
   Param2:	Nombre del archvio por el usuario
   Param3:	Archivo con extencion
   Param4:	Redireccionara a otro archivo SinP.- Sin redireccionar pagina */
$Tipo = '1';
//C:\xampp\htdocs\ExpeElectroni\105\2024\Transparen\92\01
$Ruta = $_SERVER['DOCUMENT_ROOT'].
		"/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen/$FracTrab/$TrimTrab/";
$Nomb = "$ConsNoti.'_'.$ArchTrab";
$Pagi = "/Intranet/Transparencia/A9203/ImagPagiSalvArch.php";
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
header('location: /Intranet/CargArch/SubirArchD.php');
?>