<?php

    if(session_status() != PHP_SESSION_ACTIVE) {
        session_start();
        // print_r("index session: ".$_SESSION["login"]);
    }

    include_once("components/header.php");

    include_once("components/body.php");

    include_once("components/footer.php");

?>