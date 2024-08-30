<?php 
switch ($DatoList){
	case "01": 
		 $VC03=$RegiTabl['CConsecutivo'];
		 $VC04=$RegiTabl['CNombRazon'];
		 $VC05=$RegiTabl['CRFC'];
		 $VC06=$RegiTabl['CMunicipio'];	
		break;
		
	case "02": //Catalogo del Ejercicio 
		 echo "<select name=\"SeleBrok\" onChange=\"CargBrok(this.value)\">";
		 foreach($CataEjer as $RegiTabl): 
		   $ClavCata = $RegiTabl[0];		
		   $DescCata = $RegiTabl[1];  
		   $Activo = ( $ClavCata == $ConsBrok) ? "selected" : "";
		   echo "<option value=\"$ClavCata|$DescCata\" $Activo>$DescCata</option>";
		 endforeach; 
		 echo "</select>";  
		 break;

} // switch ($DatoList){
?>		

