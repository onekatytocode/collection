<?php

/**
 * display all products in collection
 * @param $products
 * @return string
 */
function displayAllProducts(array $products): string {
    $result = '';
    foreach ($products as $product) {
        $result .= displayProduct($product);
    }
    return $result;
}

/**
 * @param $db
 * @return array
 */
function getProducts($db): array
{
    $query = $db->prepare("SELECT `name`, `year-released`, `color-way`, `size`, `price`, `images` FROM `sneakers`;");
    $query->execute();
    return $query->fetchAll();
}

/**
 * split products into individual items
 * @param $product
 * @return string
 */
function displayProduct(array $product): string
{
    $result = '<div class="product"><img src="' . $product['images'] . '" alt="nikeshoe" width=550 height=360; />';
    $result .= '<p><h1>' . $product['name'] . "</h1><p>" . "<h4>YEAR RELEASED: " . $product['year-released'] . "</h4><br>"
        . "<h4>COLOR-WAY: " . $product['color-way'] . "</h4></p>" . "<h4>AVAILABLE SIZES: " . $product['size'] . "</h4><br>"
        . "<h4>PRICE: £" . $product['price'] . '</h4></div>';
    return $result;
}



