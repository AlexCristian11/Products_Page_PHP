<?php

declare(strict_types=1);

function is_input_empty(string $name, float|string $price, int|string $sku, int|string $quantity) {
    if (empty($name) || empty($price) || empty($sku) || empty($quantity)) {
        return true;
    }
    else {
        return false;
    }
}

//function is_invalid_input(float|string $price, int|string $sku, int|string $quantity) {
//    if (!is_float($price) || !is_int($sku) || !is_int($quantity)) {
//        return true;
//    }
//    else {
//        return false;
//    }
//}

function create_product(object $pdo, string $name, float $price, int $sku, int $quantity) {
    set_product($pdo, $name, $price, $sku, $quantity);
}

