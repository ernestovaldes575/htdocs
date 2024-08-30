<?php 
switch ($DatoList){
	case "01": 
		$V03 = $RegiTabl[0];		
		$V04 = $RegiTabl[1];
		
		$V05 = $RegiTabl[2];
		$V06 = $RegiTabl[3]; 	
		$V07 = $RegiTabl[4];
		$V08 = $RegiTabl[5]; 	
		$V09 = $RegiTabl[6];
						
		 //$RutaArch = "/ExpeElectroni/$ClavAyun/PaguWeb/$EjerTrab/$CarpTiDo/";
		break;
		
	case "02": //Catalogo del Ejercicio 
		 echo "<select name=\"SelEjeTr\" onChange=\"CargEjer(this.value)\">";
		 foreach($CataEjer as $RegiTabl): 
		   $ClavCata = $RegiTabl[0];		
		   $DescCata = $RegiTabl[1];  
		   $Activo = ( $ClavCata == $EjerTrab) ? "selected" : "";
		   echo "<option value=\"$ClavCata\" $Activo>$ClavCata</option>";
		 endforeach; 
		 echo "</select>";  
		 break;
} // switch ($DatoList){
?>		

