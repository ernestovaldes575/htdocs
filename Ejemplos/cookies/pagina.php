<?php
    if(isset($_COOKIE['usuario'])){
        echo "Usuario: ".$_COOKIE['usuario']." esta configurado <br>";
    }

    //!Desmontar una cookie
    // setcookie('usuario', $usuario, time()-3600);

    //!Validar si hay cookies guardadas
    if(count($_COOKIE) > 0){
        echo "Hay ".count($_COOKIE)." cookies guardadas";
    }