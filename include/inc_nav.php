<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<nav>
    <a href='page00.php'>accueil</a> |
    <a href='page01.php'>page 1</a> |
    <a href='page02.php'>page 2</a> |
    <a href='panier.php'>panier(<?php echo count($_SESSION["panier"]) ?>)</a>
</nav>