<!DOCTYPE html>
<html lang="es">
<head> 
   <?php
      $TituEnca= "Intranet";
   	  include 'Encabezado/EncaLigaI.php'; ?>
</head>
<body>
 <header class="header">
   <?php include 'Encabezado/EncaHead.php'?>	
 </header>
<script src="../app.js"></script>
<?php include 'IntranetSERP.php'?>
<div class="contenedor">
	<form class="form" method="post" name="formulario" onsubmit="return validarl(this)">
		<img class="img-3" src="" alt="">
		<input class="clave" type="text" placeholder="Digita Clave" name="InputCla" />
		<input class="password" type="password" placeholder="Digita Contraseña" name="InputCon" />
		<!-- <input type="submit" name="Ingresar" class="ingresar" value="Ingresar" > -->
		<button type="submit" name="Ingresar" class="ingresar" value="Ingresar" >
			Ingresar
		</button>
		<a href="RegiClien/Broker.php">
		Registro
		</a>
				<!-- <a href="../index.php">Salir</a> -->
	</form>
	  
</div>


<?php include 'Encabezado/EncaPie.php'?>
