
<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$BandMens = true;

$ArCooki2 = $_COOKIE['CImpoArc'];
$AImpoArc = explode("|", $ArCooki2);
$ConsInci = $AImpoArc[0]; 	//Consecutivo del Inciso
$NumeRegi = $AImpoArc[1]; 	//Nume Registro
	
$ArCooki3 = $_COOKIE['CSubiArc'];
$ASubiArc = explode("|", $ArCooki3);
$NomArcP = $ASubiArc[4]; 

$InstSql = "UPDATE a9203 ". 							//Cambiar Tabla
           "SET   AHipervinculo = '".$NomArcP."' ".			//Cambiar campo
		   "WHERE AAyuntamiento = '$ClavAyun' AND ".
				 "AEjercicio = $EjerTrab AND ".
				 "AConsecutivo = $ConsInci AND ".
				 "ANumeRegi = $NumeRegi ";

if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

setcookie("CImpoArc", "",time()-1);
setcookie("CSubiArc", "",time()-1);

$MensResp = "Algo ha fallado!!!";
if ($ResuSql) 
    $MensResp = "Registro actualizado correctamente";

?>
<script language="javascript">
window.close();
opener.top.location.reload();
</script>