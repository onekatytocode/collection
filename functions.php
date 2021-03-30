<?php

/**
 * display all products in collection
 * @param $products
 * @return string
 */


function displayAllProducts($products) {
    $result = '';
    foreach ($products as $product) {
        $result .= displayProduct($product);
    }
    return $result;
}

/**
 * split products into individual items
 * @param $product
 * @return string
 */



function displayProduct($product) {
    $result = '<div class="product"><img src="' . $product['images'] . '" alt="shoe" />';
    $result .= '<h2>' . $product['name'] . "</h2><p>" . $product['year-released'] . $product['color-way'] . "</p>" .
    $product['size'] . $product['price'] . '</div>';
        return $result;
}