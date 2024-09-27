<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$TrimTrab = $ABusqMae[1];    // Trimestre de trabajo 
$ConsFrac = $ABusqMae[2];    // Consecutivo de la Fraccion del Unidad
$FracTrab = $ABusqMae[3];    // Fraccion de trabajo 92,93

// Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
    $BandMens = true;

// Para operacion A B C
$CRUD     = isset($_POST['C00']) ? $_POST['C00'] : '';
$TipoMovi = isset($_POST['C01']) ? $_POST['C01'] : '';
$CampBusq = isset($_POST['C02']) ? $_POST['C02'] : '';   

if ($BandMens)  
  {  echo 'CRUD)'.$CRUD.'<br>';
     echo 'TipoMovi)'.$TipoMovi.'<br>';
     echo 'CampBusq)'.$CampBusq.'<br>';
  }

$VC03 = isset($_POST['C03']) ? $_POST['C03'] : '';               // Leer campos
$VC04 = isset($_POST['C04']) ? $_POST['C04'] : '';
$VC05 = isset($_POST['C05']) ? $_POST['C05'] : '';
$VC06 = isset($_POST['C06']) ? $_POST['C06'] : '';
$VC07 = isset($_POST['C07']) ? $_POST['C07'] : '';
$VC08 = isset($_POST['C08']) ? $_POST['C08'] : '';
//$VC09 = $_POST['C09'];  No considera
$VC10 = isset($_POST['C10']) ? $_POST['C10'] : '';
$VC11 = isset($_POST['C11']) ? $_POST['C11'] : '';

// Agregar campos
switch ( $CRUD ) {
    case "POST": // Alta
        $InstSql = "INSERT INTO tt9203facare ".                       // Cambiar tabla
                   "VALUES (NULL,'$ClavAyun',$EjerTrab,".             // Cambiar campo
                                 "$ConsFrac,'$TrimTrab',".           // Cambiar campo
                                 "'$VC03','$VC04','$VC05',".         // Cambiar campo
                                 "'$VC06','$VC07',".                // Cambiar campo
                                "'$VC08','',$VC10,'$VC11')";         // Cambiar campo
        break;
    case "PUT": // Cambio
        $InstSql =  "UPDATE tt9203facare ".                          // Cambiar tabla
                    "SET     FecIniGestion = '$VC04',".               // Cambiar campo
                               "FecFinGestion = '$VC05',".            // Cambiar campo
                               "AreGest = '$VC06',".                  // Cambiar campo
                               "DenGest = '$VC07',".                  // Cambiar campo
                               "FunGest = '$VC08',".                  // Cambiar campo
                               "HipGest = '',".                       // Cambiar campo
                               "ArpGest = '$VC10',".                  // Cambiar campo
                               "NotGest = '$VC11'".                   // Cambiar campo
                    "WHERE   IdRecGest = $VC03 AND".                 // Cambiar campo
                               "AreGest   = '$ClavAyun'";            // Cambiar campo
         break; 
    case "DELETE": // Baja
        $InstSql = "DELETE FROM tt9203facare ".                      // Cambiar tabla
                    "WHERE     IdRecGest = $VC03 AND".               // Cambiar campo
                               "AreGest   = '$ClavAyun'";           // Cambiar campo
    break;
}
$con->query($InstSql);
$con->close();
?>
