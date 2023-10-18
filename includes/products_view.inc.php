<?php

declare(strict_types=1);

require_once 'dbh.inc.php';
require_once 'products_model.inc.php';

function show_products() {
    global $pdo;

    $products = get_products($pdo);

    foreach ($products as $product) {
        if ($product["quantity"] <= 5 && $product["quantity"] >= 1) {
            echo '<div class="product">';
            echo "<h1>{$product['name']}</h1>";
            if ($product["discount"] !== 0) {
                echo "<p class='strike'>Price: {$product['price']}</p>";
                $discount_price = round($product["price"] * (1 - ($product["discount"] / 100)), 2);
                echo "<p class='discount'>New price: {$discount_price}</p>";
            }
            else{
                echo "<p>Price: {$product['price']}</p>";
            }
            echo "<p>SKU: {$product["sku"]}</p>";
            echo "<p>Quantity: {$product["quantity"]}</p>";
            echo "<p>Nearly out of stock!</p>";
            echo '</div>';
        }
        else if ($product["quantity"] !== 0) {
            echo '<div class="product">';
            echo "<h1>{$product['name']}</h1>";
            if ($product["discount"] !== 0) {
                echo "<p class='strike'>Price: {$product['price']}</p>";
                $discount_price = round($product["price"] * (1 - ($product["discount"] / 100)), 2);
                echo "<p class='discount'>New price: {$discount_price}</p>";
            }
            else{
                echo "<p>Price: {$product['price']}</p>";
            }
            echo "<p>SKU: {$product["sku"]}</p>";
            echo "<p>Quantity: {$product["quantity"]}</p>";
            echo '</div>';
        }
        else {
            echo '<div class="product-out">';
            echo "<h1>{$product['name']}</h1>";
            if ($product["discount"] !== 0) {
                echo "<p class='strike'>Price: {$product['price']}</p>";
                $discount_price = round($product["price"] * (1 - ($product["discount"] / 100)), 2);
                echo "<p class='discount'>New price: {$discount_price}</p>";
            }
            else{
                echo "<p>Price: {$product['price']}</p>";
            }
            echo "<p>SKU: {$product["sku"]}</p>";
            echo "<p>Quantity: Out of stock</p>";
            echo '</div>';
        }

    }
}