<?php
    session_start();
    session_destroy();
    header("Location:Intranet.php");
?>