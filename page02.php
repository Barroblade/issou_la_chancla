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
<body>
    <?php include "include/inc_nav.php";?>
    <?php include "check_session.php";?>
    <h1> Page 02 </h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th> Article </th>
                <th> Prix </th>
                <th> Panier </th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td>Thé nature </td>
                <td> 0.75 </td>
                <td> 
                    <a href="ajouter_panier.php?article=the nature&prix=0.75&page=page02" onclick="sendToPanier()">
                        <button class="btn btn-primary">+</button> 
                    </a> 
                </td>
            </tr>
            <tr>
                <td>Thé à la menthe </td>
                <td> 0.75 </td>
                <td> 
                <a href="ajouter_panier.php?article=the a la menthe&prix=0.75&page=page02" onclick="sendToPanier()">
                        <button class="btn btn-primary">+</button> 
                    </a> 
                </td>
            </tr>
            <tr>
                <td>Café</td>
                <td> 0.80 </td>
                <td> 
                <a href="ajouter_panier.php?article=cafe&prix=0.80&page=page02" onclick="sendToPanier()">
                        <button class="btn btn-primary">+</button> 
                    </a>  
                </td>
            </tr>
            <tr>
                <td>Chocolat</td>
                <td> 0.80 </td>
                <td> 
                <a onclick="sendToPanier('ajouter_panier.php?article=chocolat&prix=0.80&page=page02')">
                        <button class="btn btn-primary">+</button> 
                    </a> 
                </td>
            </tr>            
        </tbody>
    </table>

</body>
</html>