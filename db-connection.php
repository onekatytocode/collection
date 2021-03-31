<?php

/**
 * @return PDO
 * gaining access to the katy-collection database
 */
function getDb():PDO
{
        $db = new PDO('mysql:host=db; dbname=katy-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
