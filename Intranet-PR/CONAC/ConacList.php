<?php
	$Titulo = 'Lista Conac';
	include '../components/encabezado.php';
	include '../components/EncaPrin.php';
?>

<script language="JavaScript" >
//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
	function (event) { 
		if (event.target.classList.contains('Nuev')) {
        	// Redirigir a la página de modificación
			window.location.href = 'Conac.php?PaAMB01=A&PaAMB02=0';
		}
		else if (event.target.classList.contains('Modi')) {
     		// Botón de Modificar presionado
			const ConsBusq = event.target.getAttribute('ConsBusq');
     		// Redirigir a la página de modificación con el ID
			window.location.href = 'Conac.php?PaAMB01=M&PaAMB02=' + ConsBusq;
		} 	
		else if (event.target.classList.contains('Elim')) {
    		// Botón de Modificar presionado
			const ConsBusq = event.target.getAttribute('ConsBusq');
    		// Redirigir a la página de modificación con el ID
		if (confirm('¿Estás seguro de que deseas eliminar el registro?')){ 
			window.location.href = 'Conac.php?PaAMB01=B&PaAMB02=' + ConsBusq; }
		}    
	});
//-------------------------------------------------------------------------
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
		$SubcClas = $ABusqMae[3];

		//Bandera de visualizar msg
		$BandMens = false;
		if ( isset($_GET["Param0"]) )
			$BandMens = true;

		$CRUT = "GET";
			include 'ConacClasApi.php';
	?>
	<div class="container table-responsive">	
		<!--encabezado-->
		<table class="tabla">
			<tr>
				<td>
					<?=$ClavClas?>
				</td>
				<td></td>
				<td colspan="4">
					<a href="ConacSubcList.php" class="regresar btn btn-Regresar">
						Regresar
					</a>
				</td>
			</tr>
			<tr>
				<th>Clave</th>
				<th>Descripción</th>
				<th>Edo Info </th>
				<th colspan="2"><?php if ($Alta == "A"){ ?>
					<button class='Nuev btn btn-Nuevo' data-id='0'>
						<i class="bi bi-plus"></i>
					</button>
					<?php }?>	
				</th>
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
				<td data-titulo="Eliminar: " >
					<?php if($Baja == "A" ){ ?>
					<button class='Elim btn btn-Eliminar' ConsBusq='<?= $VC03?>'>
						Eliminar
					</button>
					<?php } ?>
				</td>
				<td data-titulo="Editar: ">
					<?php if($Modi == "A" ){ ?>
					<button class='Modi btn-Nuevo btn' ConsBusq='<?= $VC03?>'>
						Modificar 
					</button>
					<?php } ?>
				</td>
			</tr>
				<?php	endforeach; ?> 
		</table>
	</div>
	
</body>
</html>