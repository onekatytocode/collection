<?php
require_once 'functions.php';



$expected = 'ket missing from array';
$expected = '<div class="product"><img src="/.png" alt="shoe" />';
$expected .= '<h1>test name</h1><p>"
 . "<h3>Year Released: " . $product['year-released'] . "</h3><br>"
    . "<h3>Color-way: " . $product['color-way'] . "</h3></p>" . 
"<h3>Available Sizes: " . $product['size'] . "</h3><br>" . "<h3>Price: £" . $product['price'] . '</div>';
return $expected;


