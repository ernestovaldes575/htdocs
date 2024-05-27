
<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

 $BandMens = true;

$ArCooki2 = $_COOKIE['CImpoArc'];
$AImpoArc = explode("|", $ArCooki2);
$ConsNoti = $AImpoArc[0]; 

$ArCooki3 = $_COOKIE['CSubiArc'];
$ASubiArc = explode("|", $ArCooki3);
$NomArcP = $ASubiArc[4]; 

$InstSql = "UPDATE tt9203facare ". 
           "SET AHipervinculo = '".$NomArcP."' ".
           "FROM  tt9203facare ".
			"WHERE AAyuntamiento = '$ClavAyun' AND ".
				  "AEjercicio = $EjerTrab AND ".
				  "AConsecutivo = $CampBusq ";

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