<?php 
switch ($DatoList){
	case "01": 
		 $VC03=$RegiTabl['CConsecutivo'];
		 $VC04=$RegiTabl['CNumeFoli'];	
		 $VC05=$RegiTabl['CNombRazon'];	
		 $VC06=$RegiTabl['CRFC'];
		break;
		
	case "02": //Catalogo del Ejercicio 
		 echo "<select name=\"SelBroTr\" onChange=\"CargBrok(this.value)\">";
		 foreach($CataBrok as $RegiTabl): 
		   $ClavCata = $RegiTabl[0];		
		   $DescCata = $RegiTabl[1];  
		   $Activo = ( $ClavCata == $ConsBrok) ? "selected" : "";
		   echo "<option value=\"$ClavCata|$DescCata\" $Activo>$DescCata</option>";
		 endforeach; 
		 echo "</select>";  
		 break;
} // switch ($DatoList){
?>		

