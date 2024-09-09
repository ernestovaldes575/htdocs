<!DOCTYPE html>
<html lang="es">
<?php include '../../../Includes/Header.php'?>
<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasComSoc.php');

	//Carga las variables
	$ArCooki3 = $_COOKIE['CBusqMae'];
	$ABusqMae = explode("|", $ArCooki3);
	$TipoDocu = $ABusqMae[0]; 
	$EjerTrab = $ABusqMae[1];
	$MesTrab  = $ABusqMae[2];

	if(isset($_POST['Enviar'])){ 
		$BandMens = true;

		$TipoMovi = $_POST['C01'];
		$ConsBusq = $_POST['C02']; 
		$TituLaye = $_POST['C03']; 
		$DescLaye = $_POST['C04'];
		$FechInic = $_POST['C05']; 
		$FechFina = $_POST['C06']; 
		$ArchMost = $_POST['C07']; 	//Imagen, PDF o Liga
		$LigaRefe = $_POST['C08']; 
		$DondAbri = $_POST['C09'];	//Ventana, Pagina 

		//posibles querys
		switch( $TipoMovi ){
			case "A": #Alta
			/* `LConsecut`, `LAyuntamiento`, 
			   `LUnidad`, `LEjercicio`, `LMesRegi`, 
			   `LTipoDocu`, `LTitulo`, `LDescripcion`, 
			   `LSerPubCre`, `LFechAlta`, `LFechPublI`, `LFechPublF`, 
			   `LSerPubRev`, `LFechRevi`, `LSerPubAuto`, `LFechAuto`, 
			   `LSerPubPub`, `LFechPubl`, `LPublicacion`, 
			   `LSerPubCier`, `LFechaCier`, 
			   `LEstaSegu`, `LImagen`, 
			   `LAbrirLiDoIm`, `LAImagDocu`, `LLiga`, `LVentRefe`, `LSenaSord`, `LEstado`
			*/
			$InstSql = "INSERT INTO stlayers ". 
			"VALUES (Null,'".$ClavAyun."',".$ConsUnid.",". 
					"'".$EjerTrab."', '".$MesTrab. "', ".
					"'".$TipoDocu."', '".$TituLaye."', '".$DescLaye."', ".
					"'".$ConsUsua."', date(now()),  '".$FechInic."', '".$FechFina."', ". 
					"-1, '', -1,  '', ". 
					"-1, '', 'I',".
					"-1, '',". 
					"'I','',". //I:Inic R:Revi A:Apro P:Publi C:Cierr
					"'".$ArchMost."','','".$LigaRefe."',". 
					"'".$DondAbri."','A')";

			break;
			case "M": #Modificacion
					$InstSql = "UPDATE stlayers ". 
							   "SET LTitulo = '".$TituLaye."', ".
									"LDescripcion = '".$DescLaye."', ".
									"LFechPublI = '".$FechInic."', ".
									"LFechPublF = '".$FechFina."', ".
									"LAbrirLiDoIm = '".$ArchMost."', ". 
									"LLiga = '".$LigaRefe."', ".
									"LVentRefe = '".$DondAbri."' ".
							   "WHERE LAyuntamiento = '".$ClavAyun."' AND ".
									 "LEjercicio = '".$EjerTrab."' AND ".
									 "LTipoDocu = '".$TipoDocu."' AND ". 
									 "LConsecut = ".$ConsBusq." ";
					break;
			case "B": #Baja
			$InstSql = "UPDATE stlayers ". 
						"SET   LEstado = 'B' ".
						"WHERE LAyuntamiento = '".$ClavAyun."' AND ".
							  "LEjercicio = '".$EjerTrab."' AND ".
							  "LTipoDocu = '".$TipoDocu."' AND ". 
							  "LConsecut = ".$ConsBusq." ";
					break;	  
		}
		if ($BandMens)  echo '1)'.$InstSql.'<br>';	
		$ResuSql = $ConeBase->prepare($InstSql);
		$ResuSql->execute();

		$MensResp = "Algo ha fallado!!!";
		if ($ResuSql) 
			$MensResp = "Registro actualizado correctamente";
		$PagiRegr = "location: LayNotTriList.php";
		header($PagiRegr);
		echo '<script>alert("'.$MensResp.'");</script>';
		$ResuSql->closeCursor();
	} 
   else{ 	//Bandera de visualizar msg
		$BandMens = false;
		if ( isset($_GET["Param0"]) )
		$BandMens = true;

		if( trim($_GET['Param1']) != ''){
			$TipoMovi = $_GET["Param1"];	#Tipo de Movimiento 
			$ConsBusq = $_GET["Param2"];	#COINCIDENCIA CON LA BD  
		}

		//----------------------------------------------------------- 
		//Datos del Layer
		$InstSql =  "SELECT LTitulo,LDescripcion,". 
						   "LFechPublI,LFechPublF,".
						   "LAbrirLiDoIm,LLiga,LVentRefe ".
					"FROM  stlayers ".				
					"WHERE LAyuntamiento = '".$ClavAyun."' AND ".
						"LEjercicio = '".$EjerTrab."' AND ".
						"LTipoDocu = '".$TipoDocu."' AND ". 
						"LConsecut = ".$ConsBusq." ";
		if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
		$ResuSql = $ConeBase->prepare($InstSql);
		$ResuSql->execute();
		$ListLaye = $ResuSql->fetch();
		
		$VC03 = "";  $VC04 = ""; 
		$VC05 = "";  $VC06 = "";
		$VC07 = "N"; $VC08 = ""; $VC09 = "N";
		if ($ListLaye)
		 { $VC03 = $ListLaye[0];	//LTitulo
		   $VC04 = $ListLaye[1];	//LDescripcion
		   $VC05 = $ListLaye[2];	//LFechPublI
		   $VC06 = $ListLaye[3];	//LFechPublF
		   $VC07 = $ListLaye[4];	//LAbrirLiDoIm
		   $VC08 = $ListLaye[5];	//LLiga
		   $VC09 = $ListLaye[6];	//LVentRefe
		}
			
		//-----------------------------------------------------------  	
		//Archivo a mostrar  
		$AbrirN = ""; $AbrirI = ""; $AbrirL = ""; $AbrirA = ""; 	
		switch( $VC07  ){
			case "N":	$AbrirN = "checked";	break;	//No Mostra nadfa
			case "I":	$AbrirI = "checked";	break;	//Imagen
			case "L":	$AbrirL = "checked";	break;	//Liga
			case "A":	$AbrirA = "checked";	break;	//Archivo pdf
		}

		//-----------------------------------------------------------  	
		//Archivo el archio en ventana o  
		$MostraN = ""; $MostraV = ""; $MostraP = ""; 	
		switch( $VC09  ){
			case "N":	$MostraN = "checked";	break;	//No Mostra nada
			case "V":	$MostraV = "checked";	break;	//Ventana
			case "P":	$MostraP = "checked";	break;	//Pagina princial
		}
		
		$MesnTiMo = "";
		switch( $TipoMovi ){
			case "A":	$MesnTiMo = "Registrar";  break;
			case "M":	$MesnTiMo = "Actualizar"; break;
			case "B":	$MesnTiMo = "Eliminar";   break;
		}
		?>
	
		<!--encabezado-->
		
		<br>
		<!--formulario de Actualizacion-->
		<div class="principal">
			<div class="contenedor__formulario">
					<form method="post" name="formulario" onsubmit="return validar(this)">
						<h1><?=$DescTiSe?></h1>	
						<!-- opciones de crud-->
						<input type="hidden" name="C01" value="<?=$TipoMovi?>">
						<input type="hidden" name="C02" value="<?=$ConsBusq?>">
						<!--el value de todos los inputs es lo que esta en la base de datos correspondiente al elemento que se pulso-->
						<div class="titulo">
							<label for="title">Titulo</label>
							<input type="text" name="C03" 
									value="<?=$VC03?>"
									id="title" 
									onkeyup="checaMensaje(this.value)" placeholder="Titulo">
						</div>
						<div class="titulo">
							<label for="title">Descripcion</label>
							<input type="text" name="C04" 
									value="<?=$VC04?>"
									id="title" 
									onkeyup="checaMensaje(this.value)" placeholder="Titulo">
						</div>						
						<div class="inicio__public">
							<label for="inicio">Inicio de Publicacion</label>	
							<input type="date" id="inicio" name="C05" 
									value="<?=$VC05?>" 
									onkeyup="checaMensaje(this.value)">
						</div>
						<div class="termino__public">
							<label for="termino">Termino de la Publicacion</label>
							<input type="date" name="C06"
									value="<?=$VC06?>"
									id="termino" 
									onkeyup="checaMensaje(this.value)">
						</div>
						<div class="abrir">
						<label for="title">Archivo a mostrar</label>
							<input type="checkbox" name="C07" value="N" <?=$AbrirN?>>Nada&nbsp;&nbsp; 
							<input type="checkbox" name="C07" value="I" <?=$AbrirI?>>Imagen&nbsp;&nbsp;
							<input type="checkbox" name="C07" value="L" <?=$AbrirL?>>Liga&nbsp;&nbsp;
							<input type="checkbox" name="C07" value="A" <?=$AbrirA?>>Pdf
						</div>
						<div class="liga">
							<label for="liga">Liga</label>
							<input type="text" name="C08" 
									value="<?=$VC08?>"
									id="liga" 
									onkeyup="checaMensaje(this.value)" placeholder="Liga">
						</div>
						<div class="mostrar">
						    <label for="title">Donde se va a mostrar</label>
							<input type="checkbox" name="C09" value="N" <?=$MostraN?>> Nada &nbsp;&nbsp; 
							<input type="checkbox" name="C09" value="V" <?=$MostraV?>> Ventana &nbsp;&nbsp;
							<input type="checkbox" name="C09" value="P" <?=$MostraP?>> Pagina
						</div>
					
						<!--mensaje de validacion-->
						<!-- <div id="mensaje1" class="errores">Campos vacios!</div> -->
						<!--fin de mensajes de validacion-->
						<div class="botones">
							<a href="LayNotTriList.php" name="cancelar" class="cancelar">
								Cancelar
							</a>
							<input type="submit" 
									name="Enviar" 
									class="registrar" 
									value="<?=$MesnTiMo?>" >
						</div>
					</form>
			</div>
		</div>
		<?php
		}
		?>	
		<!-- script de validacion-->
		<script src="../../Archivos/JS/FacdeAreVali.js"></script>
	</body>
</html>