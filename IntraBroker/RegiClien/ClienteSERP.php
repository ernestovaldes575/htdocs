 <?php
include($_SERVER['DOCUMENT_ROOT'].'/IntraBroker/Conexion/ConBasBroker.php');	

$ArCooki1 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCooki1);
$ConsBrok = $ABusqMae[0];
	
//Valores de la tabla
$VC04 = ""; $VC05 = "";  $VC06 = ""; $VC07 = 4;   

$InstSql = "SELECT CASE WHEN MAX(CNumeFoli) IS NULL ". 
				  "THEN 1 ". 
				  "ELSE MAX(CNumeFoli)+1 END AS NumeRegi ". 
		   "FROM stcliente ". 
		   "WHERE CBroker = $ConsBrok AND ". 
				 "CEstado = 'A'"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC03 = 1;  	
if ($ResuSql)
  $VC03 = $ResuSql['NumeRegi'];	
	
?>