<?php

require_once 'db-connection.php';
require_once 'functions.php';
$db = getDb();
$products = getProducts($db);
$productsToDisplay = displayAllProducts($products);

?>

<html lang="en-GB">
    <head>
    <title>Nike Collection</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="normalize.css" type="text/css" />
    </head>
    <body>
        <header>
            <h1 class="top">Nike collection</h1>
            <br>
        </header>
        <main>
                <?php
                echo $productsToDisplay;
                 ?>
        </main>
    <footer>&#169; KatyEvans 2021</footer>
    </body>
</html>