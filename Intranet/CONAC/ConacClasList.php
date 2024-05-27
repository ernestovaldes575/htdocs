<?php 
	$Titulo = "Conac";
	include '../components/encabezado.php';
	include '../components/logoHeader.php'	
?>
<script src="Registro.js"></script>
<?php
//Carga las variables
$ArCooki3 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCooki3);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$TipoDocu = $ABusqMae[0];
$EjerTrab = $ABusqMae[1];

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Ejercicio
if ( isset($_GET["Param1"]) ){
	$EjerTrab = $_GET["Param1"];
	$ArCooki4 = $TipoDocu .'|'. $EjerTrab .'|';
	setcookie("CBusqMae", "$ArCooki4");
}
	$CRUT = "GET";
	include 'ConacClasApi.php';
?>	
<!--encabezado-->
<div class="container table-responsive">
	<table class="tabla">
		<tr>
			<td>
				<select name="AAreaResp" onChange="CargEjer(this.value)" class="btn btn-Nuevo">
					<?php 
						foreach($CataEjer as $RegiTabl): 
								$ClavCata = $RegiTabl[0];		
								$DescCata = $RegiTabl[1];  
								$Activo = ( $ClavCata == $EjerTrab) ? "selected" : ""; 
					?>
					<option value="<?=$ClavCata?>" <?=$Activo?>> <?=$ClavCata?> </option>
					<?php	
						endforeach;
					?>
				</select>
			</td>
			<td colspan="3">
				<a href="/Intranet/menuintranet.php" class="regresar btn btn-Regresar">Regresar</a>
			</td>
		</tr>
		<tr>
			<th>Clave</th>
			<th>Descripción</th>
			<th>Edo Info </th>
			<th></th>
		</tr>
		<?php 
			foreach($ResuSql as $RegiTabl): 
					$VC03 = $RegiTabl[0];		//CClasifica,,count(*) AS ,
					$VC04 = $RegiTabl[1];		//CCLDescripcion,
					$VC05 = $RegiTabl[2];		// TotaRegi
		?>
		<tr>
			<td><?=$VC03?></td>
			<td><?=$VC04?></td>
			<td><?=$VC05?></td>
			<!-- iconos dentro de la libreria font-awesome.min.css -->
			<td data-titulo="Editar: ">
				<?php if($Modi == "A" ){ ?>
					<button class='Modi btn-Nuevo' ParBus01='<?= $VC03?>'>
						SubClas
					</button></a>
				<?php } ?>
			</td>
		</tr>
		<?php	endforeach; ?> 
	</table>
</div>
</body>
</html>