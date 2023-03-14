<?php
    session_start();

    // simule une connexion réussie pour le login passé en paramètre

    if(isset($_GET["login"])){
        $_SESSION["login"] = $_GET["login"];
    }

    if(isset($_SESSION["login"])){
        echo "Connecté en tant que ".$_GET["login"];
        header("Location: page00.php");
    }else{
        echo "Veuillez vous connecté";
    }
 
