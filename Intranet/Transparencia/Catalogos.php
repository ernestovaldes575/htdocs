<?php

$ArreIdCa = explode("|", $AIdenCat);

$NumeCata = $ArreIdCa[0];
echo $NumeCata;
$Cata01= false; $Cata02= false; $Cata03= false; 
$Cata04= false; $Cata05= false; $Cata06= false;
$Cata07= false; $Cata08= false; $Cata09= false; 
$Cata10= false; $Cata11= false; 
for ($i=1; $i<=$NumeCata; $i++)
{ $ValoCata = $ArreIdCa[$i];
  switch ($ValoCata) 
   { case "01": $Cata01= true; break;
     case "02": $Cata02= true; break;
     case "03": $Cata03= true; break;
     case "04": $Cata04= true; break;
     case "05": $Cata05= true; break;
     case "06": $Cata06= true; break;
     case "07": $Cata07= true; break;
     case "08": $Cata08= true; break;
     case "09": $Cata09= true; break;
     case "10": $Cata10= true; break;
     case "11": $Cata11= true; break;
   }   
}

//Catalogo de sentido indicador
if ( $Cata01 )
 {  $InstSql = "SELECT CSIClave AS Clave, CSIDescri AS Descri ". 
               "FROM tcsentindi ".
               "ORDER BY CSIClave";
// if ($BandMens) echo '1)'.$InstSql.'<br>'; 
    $EjInSql = $ConeBase->prepare($InstSql);
    $EjInSql->execute();
    $ResCat01 = $EjInSql->fetchall();
}        
//Catalogo de area
if ( $Cata02 )
 { $InstSql = "SELECT CARClave AS Clave, CARDescri AS Descri ". 
              "FROM tcarea ".
              "ORDER BY CARClave";
   //if ($BandMens) echo '1)'.$InstSql.'<br>'; 
    $EjInSql = $ConeBase->prepare($InstSql);
    $EjInSql->execute();
    $ResCat02 = $EjInSql->fetchall();
 }
 //Catalogo de tipo contrato
if ( $Cata03 )
{ $InstSql = "SELECT 	CTCClave AS Clave, CTCDescri AS Descri ". 
             "FROM tctipocontra ".
             "ORDER BY CTCClave";
  // if ($BandMens) echo '1)'.$InstSql.'<br>'; 
    $EjInSql = $ConeBase->prepare($InstSql);
    $EjInSql->execute();
    $ResCat03 = $EjInSql->fetchall();
}
 //Catalogo de tipo programa
 if ( $Cata04 )
 { $InstSql = "SELECT 	CTPClave AS Clave, CTPDescri AS Descri ". 
              "FROM tctipoprog ".
              "ORDER BY CTPClave";
   // if ($BandMens) echo '1)'.$InstSql.'<br>'; 
     $EjInSql = $ConeBase->prepare($InstSql);
     $EjInSql->execute();
     $ResCat04 = $EjInSql->fetchall();
 }
  //Catalogo de tipo evento
if ( $Cata05 )
{ $InstSql = "SELECT 	CTEClave AS Clave, CTEDescri AS Descri ". 
             "FROM tctipoeven ".
             "ORDER BY CTEClave";
  // if ($BandMens) echo '1)'.$InstSql.'<br>'; 
    $EjInSql = $ConeBase->prepare($InstSql);
    $EjInSql->execute();
    $ResCat05 = $EjInSql->fetchall();
}
 //Catalogo de alcance del concurso
 if ( $Cata06 )
 { $InstSql = "SELECT 	CACClave AS Clave, CACDescri AS Descri ". 
              "FROM tcalcaconc ".
              "ORDER BY CACClave";
   // if ($BandMens) echo '1)'.$InstSql.'<br>'; 
     $EjInSql = $ConeBase->prepare($InstSql);
     $EjInSql->execute();
     $ResCat06 = $EjInSql->fetchall();
 }
  //Catalogo de tipo cargo o puesto
if ( $Cata07 )
{ $InstSql = "SELECT 	CTCClave  AS Clave, CTCDescri AS Descri ". 
             "FROM tctipocarg ".
             "ORDER BY CTCClave ";
  // if ($BandMens) echo '1)'.$InstSql.'<br>'; 
    $EjInSql = $ConeBase->prepare($InstSql);
    $EjInSql->execute();
    $ResCat07 = $EjInSql->fetchall();
}
 //Catalogo de estado de proceso del concurso
 if ( $Cata08 )
 { $InstSql = "SELECT 	CEPClave AS Clave, CEPDescri AS Descri ". 
              "FROM tcestaproc ".
              "ORDER BY CEPClave";
   // if ($BandMens) echo '1)'.$InstSql.'<br>'; 
     $EjInSql = $ConeBase->prepare($InstSql);
     $EjInSql->execute();
     $ResCat08 = $EjInSql->fetchall();
 }
  //Catalogo de nivel maximo de estudios
if ( $Cata09 )
{ $InstSql = "SELECT 	CNMEClave AS Clave, CNMEDescri AS Descri ". 
             "FROM tcnivemaxest ".
             "ORDER BY CNMEClave";
  // if ($BandMens) echo '1)'.$InstSql.'<br>'; 
    $EjInSql = $ConeBase->prepare($InstSql);
    $EjInSql->execute();
    $ResCat09 = $EjInSql->fetchall();
}
 //Catalogo de sanciones administrativas
 if ( $Cata10 )
 { $InstSql = "SELECT 	CSAClave AS Clave, CSADescri AS Descri ". 
              "FROM tcsancadmi ".
              "ORDER BY CSAClave";
   // if ($BandMens) echo '1)'.$InstSql.'<br>'; 
     $EjInSql = $ConeBase->prepare($InstSql);
     $EjInSql->execute();
     $ResCat10 = $EjInSql->fetchall();
 }
  //Catalogo de rubro
if ( $Cata11 )
{ $InstSql = "SELECT 	CRClave AS Clave, CRDescri AS Descri ". 
             "FROM tcrubro ".
             "ORDER BY CRClave";
  // if ($BandMens) echo '1)'.$InstSql.'<br>'; 
    $EjInSql = $ConeBase->prepare($InstSql);
    $EjInSql->execute();
    $ResCat011 = $EjInSql->fetchall();
}
?>