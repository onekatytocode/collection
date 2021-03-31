<?php
/**
 * retrieves a DB connection to the collection of shoes DB
 */

function getDb() {
    $db = new PDO('mysql:host=db; dbname=katy-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}


function getSneakers($db)
{
    $query = $db->prepare("SELECT `name`, `year-released`, `color-way`, `size`, `price`, `images` FROM `sneakers`;");
    $query->execute();
    return $query->fetchAll();
}

$db = getDb();
$result = getSneakers($db);

    echo '<pre>';
var_dump($result);
echo '</pre>';


//make an array of just trying to get the name out first, foreach maybe?

function displayShoeName(array $shoes): array
{
    
}












/**
 * I want to display the shoe data on the FE
 */
//function displayShoes(array $shoes): string
//{
//    $message = 'Top selling Nike trainers:';
//    $message .= '<ul>';
//    foreach ($shoes as $shoe) {
//        $message .= '<li>' . $shoe['name'] . '</li>';
//    }
//    $message .= '</ul>';
//    return $message;
//}
// echo 'hello';