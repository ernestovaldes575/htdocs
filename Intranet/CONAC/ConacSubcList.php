<?php
	$Titulo =  "Subir Archivo";
	include '../components/encabezado.php';
	include '../components/EncaPrin.php';
?>

<script language="JavaScript" >
//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	if(event.target.classList.contains('Modi')){
    // Botón de Modificar presionado
    const ParBus02 = event.target.getAttribute('ParBus02');
    // Redirigir a la página de modificación con el ID
    window.location.href = 'ConacList.php?ParBus02=' + ParBus02;
	}     
});

//-------------------------------------------------------------------------
function CargEjer(Param)
{ location.href = "PWRegistroList.php?Param1="+Param; }

function CargaEsta(Param)
{ location.href = "PWRegistroList.php?Param2="+Param; }

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
$ClavClas = $ABusqMae[2];
//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

$CRUT = "GET";
include 'ConacClasApi.php';
?>	
<!--encabezado-->
<div class="container table-responsive">
	<table class="tabla">
		<tr>
			<td>
				<?=$ClavClas?>
			</td>
			<td></td>
			<td>
				<a href="ConacClasList.php" class="btn btn-Regresar">Regresar</a>
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
					$VC03 = $RegiTabl[0];//CClasifica,,count(*) AS ,
					$VC04 = $RegiTabl[1];//CCLDescripcion,
					$VC05 = $RegiTabl[2];// TotaRegi
		?>
		<tr>
			<td><?=$VC03?></td>
			<td><?=$VC04?></td>
			<td><?=$VC05?></td>
			<!-- iconos dentro de la libreria font-awesome.min.css -->
			<td data-titulo="Editar: ">
			<?php if($Modi == "A" ){ ?>
				<button class='Modi btn btn-Nuevo' ParBus02='<?= $VC03?>'>
					Detalle
				</button></a>
			<?php } ?>
			</td>
		</tr>
		<?php	endforeach; ?> 
	</table>
</div>
</body>
</html>