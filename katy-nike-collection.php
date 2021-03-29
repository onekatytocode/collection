<?php
/**
 * retrieves a DB connection to the collection of shoes DB
 */
$db = new PDO('mysql:host=db; dbname=katy-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
return $db;
    
    echo '<pre>';
var_dump($result);
echo '</pre>';