<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="container">
    <?php include "include/inc_nav.php";?>

    <h1> Panier </h1>
    <?php

        $panier =$_SESSION["panier"];
        ?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th> Article </th>
                <th> Prix </th>
                <th> Quantité </th>
                <th> Prix Total </th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($panier as $row){
           echo "<tr><td>". $row["article"]. "</td><td>".$row["prix"]."</td><td>".$row["quantite"]."</td><td>".$row["quantite"]*$row["prix"]."</td></tr>";
        }
    ?></tbody></table>
    <a href="vider_panier.php"><button class='btn btn-danger'> Vider </button></a>
</body>
</html>