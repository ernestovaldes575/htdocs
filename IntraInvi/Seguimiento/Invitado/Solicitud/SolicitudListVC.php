<?php 
switch ($DatoList){
	case "01": //Catalogo del Ejercicio 
		 echo "<select name=\"SelEjeTr\" onChange=\"CargEjer(this.value)\">";
		 foreach($CataEjer as $RegiTabl): 
		   $ClavCata = $RegiTabl[0];		
		   $DescCata = $RegiTabl[1];  
		   $Activo = ( $ClavCata == $EjerTrab) ? "selected" : "";
		   echo "<option value=\"$ClavCata\" $Activo>$ClavCata</option>";
		 endforeach; 
		 echo "</select>";  
		 break;
	case "02": //Catalogo de Estados 
		 echo "<select name='SelMesTr' onChange=\"CargMes(this.value)\">";
		 foreach($CataMes as $RegiTabl): 
		   $ClavCata = $RegiTabl[0];		
		   $DescCata = $RegiTabl[1];  
		   $Activo = ( $ClavCata == $MesTrab) ? "selected" : ""; 
		   echo "<option value=\"$ClavCata\" $Activo>$ClavCata $DescCata </option>";
		 endforeach;	
		 echo "</select>"; 
		 break;
	case "03": 
		 $VC03=$RegiTabl['SConsecutivo'];
		 $VC04=$RegiTabl['SMes'];	
		 $VC05=$RegiTabl['SNumeFoli'];
		
		 $VC06=$RegiTabl['SFormaPago'];
		 $VC07=$RegiTabl['SMetoPago'];
		
		 $VC08=$RegiTabl['SUso'];	
		 $VC09=$RegiTabl['SFechAlta'];	
		 $VC10=$RegiTabl['SImporte'];	
		  		
		 $VC11=$RegiTabl['SSeguimi'];
						
		 //$RutaArch = "/ExpeElectroni/$ClavAyun/PaguWeb/$EjerTrab/$CarpTiDo/";
		break;
  } // switch ($DatoList){
?>		

