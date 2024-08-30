<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/Intranet/Css/style.css">
</head>
<script src="InformaList.js"></script>
<body>
<header class="shadow mb-4 bg-white">
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
	include 'TablBaDaListSERP.php';
?>	
<!--encabezado--> 
<div class="container table-responsive">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td>&nbsp;</td>
			<td>
			  <a href="BaseDatoList.php" 
					class="btn-Regresar">
			    Regresar
			    </a>		    </td>
		</tr>
		<tr>
			<th>No</th>
			<th width="27%">&nbsp;</th>
		</tr>
		<?php 
		  foreach($ResuSql as $RegTab01){
			$Tabla = $RegTab01[0];
		?>
		<tr>
			<td width="73%">
			  <a href="TablBaDaList.php?Param4=<?=$Tabla?>"><?=$Tabla?></a>
			  <?php 
			    if ( $TablBaDa == $Tabla ){
				  //Carga el registro para Consulta
				  $InstSql = "DESCRIBE $BaseDato.$TablBaDa ";
				  if ($BandMens)  echo "1)$InstSql<br>"; 
			   	  $EjInSql = $ConeBase->prepare($InstSql);
				  $EjInSql->execute();
				  $ResuSql = $EjInSql->fetchAll();
				  ?>
			  <table width="670">
				<tr>
					<td width="30">No</td>
					<td width="100">Campo</td>
					<td width="50">Valor</td>
					<td width="50">Nulo</td>
					<td width="50">Llave</td>
					<td width="50">Default
					<a href="CargaCampos.php">Gen</a></td>
				</tr>
		  		<?php	
					$NumeCamp = 1; 
					foreach($ResuSql as $RegTab02){
					  $Campo   = $RegTab02[0];
					  $Valor   = $RegTab02[1];
					  $Nulo    = $RegTab02[3];
					  $Llave   = $RegTab02[4];
					  $Default = $RegTab02[5]; ?>
				<tr>
					<td><?=$NumeCamp?></td>
					<td><?=$Campo?></td>
					<td><?=$Valor ?></td>
					<td><?=$Nulo?></td>
					<td><?=$Llave?></td>
					<td><?=$Default?></td>
				</tr>
				<?php
				   $NumeCamp++; 
				   		
				  }	//While($Fila2 = $sql2->fetch())?>
			  </table>
				  
			  <?php } //if ( $TablBaDa == $Tabla ){  ?>	
		   </td>
			<td data-titulo="Eliminar:">&nbsp;</td>
		</tr>
		<?php } //foreach($ResuSql as $RegTab01){ ?> 
	</table>
</div>	

<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>