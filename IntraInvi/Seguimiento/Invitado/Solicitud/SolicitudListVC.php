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
		
		 $VC06=$RegiTabl['SRepartidor'];
		 $VC07=$RegiTabl['CREDescri'];
		
		 $VC08=$RegiTabl['SFormaPago'];
		 $VC09=$RegiTabl['SMetoPago'];
		 $VC10=$RegiTabl['SUso'];	
		
		 $VC11=$RegiTabl['SFechAlta'];	
		 $VC12=$RegiTabl['SImporte'];	
		  		
		 $VC13=$RegiTabl['SSeguimi'];
		
		 $VC14=$RegiTabl['TotaArti'];
		 $VC15=$RegiTabl['ImpoDeta'];

						
		 //$RutaArch = "/ExpeElectroni/$ClavAyun/PaguWeb/$EjerTrab/$CarpTiDo/";
		break;
  } // switch ($DatoList){
?>		

