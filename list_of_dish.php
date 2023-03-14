<?php


function getList($page){

    $cnx = new PDO('mysql:host=localhost;dbname=exam', "root", "");
    $query = $cnx->prepare("SELECT * FROM dish WHERE page like ?");
    $query->execute(["%$page%"]);
    return $query->fetchAll();
}
