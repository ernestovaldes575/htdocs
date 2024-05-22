<?php 
	$Titulo = "Conac";
	include '../components/encabezado.php';
	include '../components/logoHeader.php'	
?>

<script language="JavaScript" >
//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
if (event.target.classList.contains('Modi')) {
     // Botón de Modificar presionado
     const ParBus01 = event.target.getAttribute('ParBus01');
     // Redirigir a la página de modificación con el ID
     window.location.href = 'ConacSubcList.php?ParBus01=' + ParBus01;
    }     
});

//-------------------------------------------------------------------------
function CargEjer(Param)
{ location.href = "ConacClasList.php?Param1="+Param; }


function CargImag(Param1,Param2,Param3,Param4)
{ Ruta = "ImgPagSubiArch.php?Param1="+Param1+
							"&Param2="+Param2+
							"&Param3="+Param3+
							"&Param4="+Param4; 
  Dime = "width=450 height=350 top=10 left=10 scrollbars";
  Cata = window.open(Ruta,"Carga documento",Dime);
}
</script>
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
<table class="tb">
	<tr>
		<td>
			<select name="AAreaResp" onChange="CargEjer(this.value)">
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
	<td></td>
	<td>
		<a href="/Intranet/menuintranet.php" class="regresar">Regresar</a>
	</td>
  </tr>
  <tr>
    <th>Clave</th>
    <th>Descripción</th>
    <th>Edo Info </th>
	<th></th>
  </tr>
  <?php 

	foreach ($ResuSql as $RegiTabl): 
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
			<button class='Modi btn-Nuevo' ParBus01='<?= $VC03?>'
			onMouseOver="this.style.background='#FF8000';" onMouseOut="this.style.background = '#EB6320';">
			SubClas
			 </button></a>
		<?php } ?>
	</td>
  </tr>
  <?php	endforeach; ?> 
</table>
	
</body>
</html>