<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <script src="js/confirm.js"></script>
    <title>Document</title>
</head>
<body class="container">
    <?php include "check_session.php";?>
    <?php include "include/inc_nav.php";?>
    <?php include "list_of_dish.php";?>
    <h1> Page 01 </h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th> Article </th>
                <th> Prix </th>
                <th> Panier </th>
            </tr>
        </thead>
        <tbody>
            <?php

            $result = getList("page01");
            foreach($result as $row){
                echo "<tr><td>".$row["article"]."</td>
                <td>".$row["prix"]."</td>". 
                "<td><a onclick=\"sendToPanier('ajouter_panier.php?article=".$row["article"]."&prix=".$row["prix"]."&page=page02')\">
                <button class=\"btn btn-primary\">+</button> 
                </a></tr>";
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>