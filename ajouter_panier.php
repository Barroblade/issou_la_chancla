<?php
    if (!isset($_GET["article"]) || !isset($_GET["prix"]) || !isset($_GET["page"]) )
    {
        die("erreur...");
    }

    session_start();

    if (!isset($_SESSION["panier"]))
    {
        $_SESSION["panier"]=[];
    }

    $test= false;
    foreach($_SESSION["panier"] as $index => $row){
        if($row["article"] == $_GET["article"]){
            $_SESSION["panier"][$index]["quantite"]++;
            $test= true;
        }
    }
    if($test==false){
        $lignePanier=[];
        $lignePanier["article"] =  $_GET["article"];
        $lignePanier["prix"] = $_GET["prix"];
        $lignePanier["quantite"]=1;
        // ajout de la nouvelle ligne
        $panier = $_SESSION["panier"];  
        $panier[]=$lignePanier;         
        $_SESSION["panier"] = $panier;  
    }


    // préparation de la nouvelle ligne à ajouter au panier
 

    $page = $_GET["page"];

    header("location:$page.php");

