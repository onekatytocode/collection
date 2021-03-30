<?php

require_once 'db-connection.php';
require_once 'functions.php';
$db = getDb();
//$result = getSneakers($db);
$products = getProducts($db);
$productsToDisplay = displayAllProducts($products);




function getProducts($db)
{
    $query = $db->prepare("SELECT `name`, `year-released`, `color-way`, `size`, `price`, `images` FROM `sneakers`;");
    $query->execute();
    return $query->fetchAll();
}




?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
    <title>Nike Collection</title>
    </head>
    <body>
        <header>
            <h1>Nike collection</h1>
        </header>
        <main>
                <?php
                echo $productsToDisplay;
                 ?>

        </main>
       </body>
    </html>
